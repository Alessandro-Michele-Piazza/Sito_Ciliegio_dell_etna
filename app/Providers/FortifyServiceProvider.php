<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        Fortify::redirectUserForTwoFactorAuthenticationUsing(RedirectIfTwoFactorAuthenticatable::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())) . '|' . $request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::registerView(function () {
            return view('auth.register');
        });

        Fortify::authenticateUsing(function (Request $request) {
            $request->validate([
                Fortify::username() => ['required', 'string'],
                'password' => ['required', 'string'],
                'g-recaptcha-response' => ['required'],
            ], [
                'g-recaptcha-response.required' => 'Conferma il reCAPTCHA.',
            ]);

            $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
            if (!$recaptchaSecret) {
                throw ValidationException::withMessages([
                    'g-recaptcha-response' => 'Configurazione reCAPTCHA non valida.',
                ]);
            }

            $recaptchaPayload = http_build_query([
                'secret' => $recaptchaSecret,
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
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

            $user = User::where(Fortify::username(), $request->input(Fortify::username()))->first();

            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }

            return null;
        });
    }
}
