<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $rules = [
            'name'    => 'required|min:3|max:100',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10|max:2000',
            'g-recaptcha-response' => 'required',
        ];

        $messages = [
            'g-recaptcha-response.required' => 'Conferma il reCAPTCHA.',
        ];

        $request->validate($rules, $messages);

        $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
        if (!$recaptchaSecret) {
            return back()->withErrors([
                'g-recaptcha-response' => 'Configurazione reCAPTCHA non valida.',
            ])->withInput();
        }

        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecret,
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip(),
        ]);

        if (!$recaptchaResponse->ok() || !data_get($recaptchaResponse->json(), 'success')) {
            return back()->withErrors([
                'g-recaptcha-response' => 'Verifica reCAPTCHA non riuscita. Riprova.',
            ])->withInput();
        }

        $content = "Hai ricevuto un nuovo messaggio dal sito Il Ciliegio dell'Etna:\n\n" .
            "Nome: " . $request->name . "\n" .
            "Email: " . $request->email . "\n" .
            "Oggetto: " . $request->subject . "\n\n" .
            "Messaggio:\n" . $request->message;

        Mail::raw($content, function ($message) use ($request) {
            $message->to('info@ilciliegiodelletna.it') // Dove vuoi RICEVERE il messaggio
                ->from(config('mail.from.address'), config('mail.from.name')) // Invia tramite Gmail
                ->replyTo($request->email, $request->name) // Se rispondi, rispondi all'utente
                ->subject('Nuovo Contatto: ' . $request->name);
        });

        

        return back()->with('success', 'Grazie! Il tuo messaggio è stato inviato correttamente.');
    }
}
