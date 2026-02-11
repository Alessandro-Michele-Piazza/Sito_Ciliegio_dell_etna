<nav class="navbar" id="navbar">
    <div class="navbar-left">
        <a class="navbar-brand" href=" {{ route('home') }}">
            <img src="{{ Vite::asset('resources/images/logo_ciliegio.webp') }}" alt="Logo Il Ciliegio dell'Etna" class="icona_navbar">
        </a>
    </div>

    <div class="navbar-right">
        <a class="btn btn-prenota mt-3" href="https://ilciliegiodelletna.beddy.io?lang={{ app()->getLocale() }}">
            {{ __('ui.Prenota_ora') }}
        </a>

        <button class="navbar-toggler mt-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Menu Collapse (Il "Dropdown" Bianco) -->
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('stanze') }}"> {{ __('ui.Camere') }} </a> </li>
                     <li class="nav-item"><a class="nav-link" href="{{ route('ristorante') }}">{{ __('ui.Ristorante') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pizzeria') }}"> {{ __('ui.Pizzeria') }}</a> </li>
                    <li class="nav-item"><a class="nav-link" href=" {{ route('menu_domenicale') }} "> {{ __('ui.Menu_domenicale') }} </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.index') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href=" {{ route('esperienze') }} "> {{ __('ui.Esperienze') }} </a></li>

                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            {{ __('ui.Servizi') }}
                        </a>
                        <ul class="dropdown-menu border-0 ">
                            <li><a class="dropdown-item dropdown-padding-right" href=" {{ route('corso_cucina') }} ">
                                    {{ __('ui.Corsi_di_cucina') }} </a></li>
                            <li><a class="dropdown-item" href="{{ route('corso_pizzeria') }}">{{ __('ui.Corsi_di_pizzeria') }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('winetour') }}"> {{ __('ui.Wine_Tour') }} </a></li>
                        </ul>
                    </li>
                   
                    {{-- <li class="nav-item"><a class="nav-link" href="#"> {{ __('ui.Prodotti_Tipici') }} </a></li> --}}

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
</nav>
