<x-layout title="login">

    <x-header title="Login" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 border rounded shadow text-white p-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label scritta_verde_scuro">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label scritta_verde_scuro">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password">
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="fa-solid fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>

                    <div class="mb-4">
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                        @error('g-recaptcha-response')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    @auth
                        <li><a class="dropdown-item bg-dark text-white" href="{{ route('login') }}">Accedi</a></li>
                        <li><a class="dropdown-item bg-dark text-white" href="{{ route('register') }}">Registrati</a></li>

                        <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                            @csrf
                        </form>
                    @endauth
                </form>
            </div>
        </div>
    </div>


</x-layout>
