<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid">
        <div class="d-flex justify-content-between w-100 align-items-center">

            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="#">
                    <img src="{{ Vite::asset('resources/images/logo_ciliegio.png') }}" alt="Logo" class="icona_navbar">
                </a>
            </div>

            <div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link fs-5" href="#">Ristorante</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="#">Pizzeria</a></li>
                        <li class="nav-item"><a class="nav-link fs-5" href="#">Hotel</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-5" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Servizi
                            </a>
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
            </div>

            <div class="d-flex align-items-center">
                <a class="btn btn-prenota" href="#">Prenota Ora</a>
                <button class="navbar-toggler me-2 mx-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation" id="hamburgerBtn">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

        </div>
    </div>
</nav>
