<nav class="navbar fixed-top" id="navbar">
    <div class="container-fluid px-4"> <!-- Aggiunto un po' di padding laterale -->
        <div class="d-flex justify-content-between w-100 align-items-center">

            <!-- Sinistra: Logo -->
            <div class="d-flex align-items-center">
                <a class="navbar-brand" href=" {{ route('home') }}">
                    <img src="{{ Vite::asset('resources/images/logo_ciliegio.png') }}" alt="Logo" class="icona_navbar">
                </a>
            </div>

            <!-- Destra: Bottone + Hamburger -->
            <div class="d-flex align-items-center">
                <a class="btn btn-prenota me-3"
                    href="https://ilciliegiodelletna.beddy.io?lang={{ app()->getLocale() }}">
                    {{ __('ui.Prenota_ora') }}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

            <!-- Menu Collapse (Il "Dropdown" Bianco) -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('stanze') }}"> {{ __('ui.Camere') }} </a>
                    </li>
                    {{-- <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            {{ __('ui.Servizi') }}
                        </a>
                        <ul class="dropdown-menu border-0 ">
                            <li><a class="dropdown-item dropdown-padding-right" href="#">
                                    {{ __('ui.Corsi_di_cucina') }} </a></li>
                            <li><a class="dropdown-item" href="#">{{ __('ui.Corsi_di_pizzeria') }}</a></li>
                            <li><a class="dropdown-item" href="#"> {{ __('ui.Corsi_di_panificazione') }} </a></li>
                            <li><a class="dropdown-item" href="#"> {{ __('ui.Wine_Tour') }} </a></li>
                            <li><a class="dropdown-item" href="#"> Catering </a></li>
                        </ul>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link" href=" {{ route('esperienze') }} "> {{ __('ui.Esperienze') }} </a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('ristorante') }}">{{ __('ui.Ristorante') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pizzeria') }}"> {{ __('ui.Pizzeria') }}
                        </a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#"> {{ __('ui.Prodotti_Tipici') }} </a></li> --}}
                    <li class="nav-item"><a class="nav-link" href=" {{ route('menu_domenicale') }} ">
                            {{ __('ui.Menu_domenicale') }} </a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('contatti') }}">{{ __('ui.Contatti') }}</a></li>
                    {{-- 
                    <li><a class="dropdown-item bg-dark text-white" href="{{ route('login') }}">Accedi</a></li>
                    <li><a class="dropdown-item bg-dark text-white" href="{{ route('register') }}">Registrati</a></li> --}}


                    <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                        @csrf
                    </form>

                    @auth
                        <!-- Visibile solo se l'utente È loggato -->

                        <!-- Il form nascosto che esegue effettivamente la richiesta POST di logout -->
                        <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                            @csrf
                        </form>

                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('blog.create') ? 'active fw-bold text-primary' : '' }}"
                                href="{{ route('blog.create') }}">
                                <i class="fas fa-plus-circle me-1"></i> Nuovo Articolo
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item bg-dark text-white" href="#"
                                onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                                Logout
                            </a>
                        </li>

                    @endauth

                </ul>
            </div>

        </div>
    </div>
</nav>
