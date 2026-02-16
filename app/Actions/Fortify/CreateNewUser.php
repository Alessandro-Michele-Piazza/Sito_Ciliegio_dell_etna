<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'g-recaptcha-response' => ['required'],
        ], [
            'g-recaptcha-response.required' => 'Conferma il reCAPTCHA.',
        ])->validate();

        $recaptchaSecret = config('services.recaptcha.secret');
        if (!$recaptchaSecret) {
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Configurazione reCAPTCHA non valida.',
            ]);
        }

        try {
            /** @var \Illuminate\Http\Client\Response $recaptchaResponse */
            $recaptchaResponse = Http::asForm()->timeout(10)->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $recaptchaSecret,
                'response' => $input['g-recaptcha-response'] ?? null,
                'remoteip' => request()->ip(),
            ]);
        } catch (\Throwable $exception) {
            Log::warning('reCAPTCHA register request failed', [
                'message' => $exception->getMessage(),
            ]);

            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Servizio reCAPTCHA temporaneamente non disponibile. Riprova tra poco.',
            ]);
        }

        $recaptchaData = $recaptchaResponse->json();

        if (!is_array($recaptchaData) || !data_get($recaptchaData, 'success')) {
            Log::info('reCAPTCHA register validation failed', [
                'error_codes' => data_get($recaptchaData, 'error-codes', []),
            ]);

            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Verifica reCAPTCHA non riuscita. Riprova.',
            ]);
        }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
