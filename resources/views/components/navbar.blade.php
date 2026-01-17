<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                id="hamburgerBtn">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/images/logo_ciliegio.png') }}" alt="Logo" class="icona_navbar">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link fs-5" href="#">Ristorante</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="#">Pizzeria</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="#">Hotel</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-5" href="#" role="button"
                        data-bs-toggle="dropdown">Servizi</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Corsi di cucina</a></li>
                        <li><a class="dropdown-item" href="#">Corsi di pizzeria</a></li>
                        <li><a class="dropdown-item" href="#">Corso di Panificazione</a></li>
                        <li><a class="dropdown-item" href="#">Wine Tour</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link fs-5" href="#">Prodotti Tipici</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="#">Esperienze</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="#">Menù Domenicale</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="#">Contatti</a></li>
            </ul>
        </div>

        <div class="d-flex align-items-center">
            <a class="btn btn-prenota" href="#">Prenota Ora</a>
        </div>
    </div>
</nav>
