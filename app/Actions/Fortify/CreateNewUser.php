<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

        $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
        if (!$recaptchaSecret) {
            throw ValidationException::withMessages([
                'g-recaptcha-response' => 'Configurazione reCAPTCHA non valida.',
            ]);
        }

        $recaptchaPayload = http_build_query([
            'secret' => $recaptchaSecret,
            'response' => $input['g-recaptcha-response'] ?? null,
            'remoteip' => request()->ip(),
        ]);

        $recaptchaRaw = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'content' => $recaptchaPayload,
                'timeout' => 10,
            ],
        ]));

        $recaptchaData = is_string($recaptchaRaw) ? json_decode($recaptchaRaw, true) : null;

        if (!is_array($recaptchaData) || !data_get($recaptchaData, 'success')) {
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
