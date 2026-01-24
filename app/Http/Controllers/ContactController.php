<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|min:3|max:100',
            'email'   => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10|max:2000',
        ]);

        $content = "Hai ricevuto un nuovo messaggio dal sito Il Ciliegio dell'Etna:\n\n" .
            "Nome: " . $request->name . "\n" .
            "Email: " . $request->email . "\n" .
            "Oggetto: " . $request->subject . "\n\n" .
            "Messaggio:\n" . $request->message;

        Mail::raw($content, function ($message) use ($request) {
            $message->to('alexpiazza98@gmail.com') // Dove ricevi la mail
                // Imposta te stesso come mittente per evitare blocchi
                ->from('alexpiazza98@gmail.com', 'Sito Ciliegio dell\'Etna')

                // FONDAMENTALE: Se rispondi alla mail, risponderai all'utente!
                ->replyTo($request->email, $request->name)

                // Cambia l'oggetto rendendolo dinamico (così Gmail non raggruppa le mail)
                ->subject('Nuovo Contatto da: ' . $request->name . ' - ' . now()->format('H:i'));
        });

        // 4. Torna indietro con messaggio di successo
        return back()->with('success', 'Grazie! Il tuo messaggio è stato inviato correttamente.');
    }
}
