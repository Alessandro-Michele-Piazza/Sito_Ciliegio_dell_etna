<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
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

            // Verifica reCAPTCHA solo se non già validato in questa request
            // (Fortify può chiamare authenticateUsing più volte, es. per 2FA,
            //  e il token reCAPTCHA è monouso → errore "timeout-or-duplicate")
            if (!$request->attributes->get('recaptcha_verified')) {
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
                        'response' => $request->input('g-recaptcha-response'),
                        'remoteip' => $request->ip(),
                    ]);
                } catch (\Throwable $exception) {
                    Log::warning('reCAPTCHA login request failed', [
                        'message' => $exception->getMessage(),
                    ]);

                    throw ValidationException::withMessages([
                        'g-recaptcha-response' => 'Servizio reCAPTCHA temporaneamente non disponibile. Riprova tra poco.',
                    ]);
                }

                $recaptchaData = $recaptchaResponse->json();

                if (!is_array($recaptchaData) || !data_get($recaptchaData, 'success')) {
                    Log::info('reCAPTCHA login validation failed', [
                        'error_codes' => data_get($recaptchaData, 'error-codes', []),
                    ]);

                    throw ValidationException::withMessages([
                        'g-recaptcha-response' => 'Verifica reCAPTCHA non riuscita. Riprova.',
                    ]);
                }

                // Segna come verificato per evitare doppia verifica nella stessa request
                $request->attributes->set('recaptcha_verified', true);
            }

            $user = User::where(Fortify::username(), $request->input(Fortify::username()))->first();

            if ($user && Hash::check($request->password, $user->password)) {
                return $user;
            }

            return null;
        });
    }
}
