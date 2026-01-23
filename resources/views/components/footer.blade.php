<footer class="footer-modern ">
    <div class="container py-5 px-0 position-relative">
        <div class="row g-4">

            <!-- COLONNA BRAND & INFO -->
            <div class="col-lg-4 col-md-12">
                <img src="{{ Vite::asset('resources/images/logo_ciliegio.png') }}" alt="Logo Il Ciliegio dell'Etna"
                    class="footer-logo mb-3">

                <p class="footer-description">
                    {{ __('ui.footer_scritta') }}
                </p>
                <div class="footer-socials">
                    <a href="https://www.facebook.com/ilciliegiodelletna/?locale=it_IT" class="icona_facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ilciliegiodelletna/" class="icona_instagram"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@il.ciliegio.delle?is_from_webapp=1&sender_device=pc"
                        class="icona_tiktok"><i class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/watch?v=D07m6Y-4lrc" target="_blank" class="icona_youtube"><i
                            class="fab fa-youtube"></i></a>

                </div>
            </div>

            <!-- COLONNA LINK RAPIDI -->
            <div class="col-lg-2 col-md-6 ms-lg-auto">
                <h5 class="footer-title">Esplora</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('ristorante') }}">Il Ristorante</a></li>
                    <li><a href="{{ route('pizzeria') }}">La Pizzeria</a></li>
                    <li><a href="{{ route('stanze') }}">Le Camere</a></li>
                </ul>
            </div>

            <!-- COLONNA CONTATTI -->
            <div class="col-lg-4 col-md-6">
                <h5 class="footer-title">Contatti</h5>
                <ul class="list-unstyled footer-contact">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Via Filippo Meda, 88 - 95014 - Giarre (CT)</span>
                    </li>
                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <span>095 969109 | +39 391 168 6078</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>info@ilciliegiodelletna.it</span>
                    </li>
                    <li>
                        <i class="fas fa-clock"></i>
                        <span>Aperto tutti i giorni (Martedì chiuso)</span>
                    </li>
                </ul>
            </div>

        </div>

        <div class="dropup position-absolute bottom-0 end-0 mb-4 me-4">
            <button id="langBtn" class="btn dropdown-toggle d-flex align-items-center border-0 shadow-none p-0"
                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <x-_locale lang="{{ App::getLocale() }}" />
            </button>

            <ul id="langMenu" class="dropdown-menu dropdown-menu-end bg-dark border-secondary shadow-lg">
                <div class="d-flex flex-column align-items-center gap-2 py-1">
                    @if (App::getLocale() !== 'it')
                        <li><x-_locale lang="it" /></li>
                    @endif

                    @if (App::getLocale() !== 'en')
                        <li><x-_locale lang="en" /></li>
                    @endif

                    @if (App::getLocale() !== 'es')
                        <li><x-_locale lang="es" /></li>
                    @endif
                </div>
            </ul>
        </div>

    </div>

    <!-- COPYRIGHT -->

    <div class="footer-bottom text-center py-4">
        <div class="container">
            <!-- Prima riga: Copyright e Policy -->
            <p class="mb-4">
                © {{ date('Y') }} <strong>Il Ciliegio dell'Etna</strong>. Tutti i diritti riservati.
                <span class="d-block d-md-inline ms-md-3">
                    <a href="#" id="privacy_scritta">Privacy Policy</a> | <a href="#"
                        id="cookie_scritta">Cookie Policy</a>
                </span>
            </p>

            <!-- Seconda riga: Powered by -->
            <p class="mb-2 small">
                Powered by <a href="https://www.linkedin.com/in/alessandro-michele-piazza-13b751171/" target="_blank"
                    class="text-decoration-none" id="il_mio_nome">Alessandro Michele Piazza</a>
            </p>
        </div>
    </div>


</footer>
