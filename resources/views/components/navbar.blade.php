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
                <a class="btn btn-prenota me-3" href="#">Prenota Ora</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>

            <!-- Menu Collapse (Il "Dropdown" Bianco) -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('stanze') }}">Stanze</a></li>
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Servizi
                        </a>
                        <ul class="dropdown-menu border-0 ">
                            <li><a class="dropdown-item dropdown-padding-right" href="#">Corsi di cucina</a></li>
                            <li><a class="dropdown-item" href="#">Corsi di pizzeria</a></li>
                            <li><a class="dropdown-item" href="#">Corsi di panificazione</a></li>
                            <li><a class="dropdown-item" href="#">Wine Tour</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Esperienze</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('ristorante') }}">Ristorante</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pizzeria') }}">Pizzeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Prodotti Tipici</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contatti') }}">Contatti</a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>
