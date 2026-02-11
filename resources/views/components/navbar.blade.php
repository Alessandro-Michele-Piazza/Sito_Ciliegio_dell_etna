<nav class="navbar" id="navbar">
    <div class="navbar-left">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/images/logo_ciliegio.webp') }}" alt="Logo Il Ciliegio dell'Etna" class="icona_navbar">
        </a>
    </div>

    <div class="navbar-right">
        <a class="btn btn-prenota" href="https://ilciliegiodelletna.beddy.io?lang={{ app()->getLocale() }}">
            {{ __('ui.Prenota_ora') }}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas"
            aria-controls="navbarOffcanvas" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</nav>

<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-end navbar-offcanvas" tabindex="-1" id="navbarOffcanvas"
    aria-labelledby="navbarOffcanvasLabel" data-bs-backdrop="true">

    <div class="offcanvas-header">
        <a href="{{ route('home') }}">
            <img src="{{ Vite::asset('resources/images/logo_ciliegio.webp') }}" alt="Logo" class="offcanvas-logo">
        </a>
        <button type="button" class="btn-close-offcanvas" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>

    <div class="offcanvas-body">
        <div class="offcanvas-nav-wrapper">
            <ul class="offcanvas-nav">
                <li><a class="offcanvas-link" href="{{ route('stanze') }}">{{ __('ui.Camere') }}</a></li>
                <li><a class="offcanvas-link" href="{{ route('ristorante') }}">{{ __('ui.Ristorante') }}</a></li>
                <li><a class="offcanvas-link" href="{{ route('pizzeria') }}">{{ __('ui.Pizzeria') }}</a></li>
                <li><a class="offcanvas-link" href="{{ route('menu_domenicale') }}">{{ __('ui.Menu_domenicale') }}</a></li>
                <li><a class="offcanvas-link" href="{{ route('blog.index') }}">Blog</a></li>
                <li><a class="offcanvas-link" href="{{ route('esperienze') }}">{{ __('ui.Esperienze') }}</a></li>

                <li class="offcanvas-divider"></li>

                <li class="offcanvas-section-title">{{ __('ui.Servizi') }}</li>
                <li><a class="offcanvas-link offcanvas-link-sub" href="{{ route('corso_cucina') }}">{{ __('ui.Corsi_di_cucina') }}</a></li>
                <li><a class="offcanvas-link offcanvas-link-sub" href="{{ route('corso_pizzeria') }}">{{ __('ui.Corsi_di_pizzeria') }}</a></li>
                <li><a class="offcanvas-link offcanvas-link-sub" href="{{ route('winetour') }}">{{ __('ui.Wine_Tour') }}</a></li>

                <li class="offcanvas-divider"></li>

                <li><a class="offcanvas-link" href="{{ route('contatti') }}">{{ __('ui.Contatti') }}</a></li>

                @auth
                    <li class="offcanvas-divider"></li>
                    <li>
                        <a class="offcanvas-link" href="{{ route('blog.create') }}">
                            <i class="fas fa-plus-circle me-1"></i> Nuovo Articolo
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" id="form-logout">
                            @csrf
                        </form>
                        <a class="offcanvas-link offcanvas-link-logout" href="#"
                            onclick="event.preventDefault(); document.getElementById('form-logout').submit();">
                            Logout
                        </a>
                    </li>
                @endauth
            </ul>
        </div>

        <div class="offcanvas-cta">
            <a class="btn btn-prenota w-100" href="https://ilciliegiodelletna.beddy.io?lang={{ app()->getLocale() }}">
                {{ __('ui.Prenota_ora') }}
            </a>
        </div>
    </div>
</div>
