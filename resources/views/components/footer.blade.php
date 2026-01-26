<footer class="footer-modern">
    <div class="container pt-5 px-0">
        <!-- RIGA SUPERIORE: LOGO E INFO -->
        <div class="row g-4 mb-2">
            <!-- COLONNA BRAND -->
            <div class="col-lg-4 col-md-12">
                <img src="{{ Vite::asset('resources/images/logo_ciliegio.png') }}" alt="Logo Il Ciliegio dell'Etna"
                    class="footer-logo mb-3">
                <p class="footer-description">
                    {{ __('ui.footer_scritta') }}
                </p>
            </div>

            <!-- COLONNA LINK RAPIDI -->
            <div class="col-lg-2 col-md-6 ms-lg-auto">
                <h5 class="footer-title">{{ __('ui.esplora') }}</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('ristorante') }}">{{ __('ui.il_ristorante') }}</a></li>
                    <li><a href="{{ route('pizzeria') }}">{{ __('ui.la_pizzeria') }}</a></li>
                    <li><a href="{{ route('stanze') }}">{{ __('ui.le_camere') }}</a></li>
                </ul>
            </div>

            <!-- COLONNA CONTATTI -->
            <div class="col-lg-4 col-md-6">
                <h5 class="footer-title">{{ __('ui.contatti') }}</h5>
                <ul class="list-unstyled footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i> <span>Via Filippo Meda, 88 - 95014 - Giarre (CT)</span></li>
                    <li><i class="fas fa-phone-alt"></i> <span>095 969109 | +39 391 168 6078</span></li>
                    <li><i class="fas fa-envelope"></i> <span>info@ilciliegiodelletna.it</span></li>
                    <li><i class="fas fa-clock"></i> <span>{{ __('ui.orari') }}</span></li>
                </ul>
            </div>
        </div>

        <!-- RIGA INFERIORE: SOCIAL A SINISTRA, LINGUA A DESTRA -->
        <div class="row align-items-center">
            <div class="col-6">
                <div class="footer-socials d-flex gap-3">
                    <a href="https://www.facebook.com/ilciliegiodelletna/?locale=it_IT" class="icona_facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ilciliegiodelletna/" class="icona_instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@il.ciliegio.delle" class="icona_tiktok"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="icona_youtube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="col-6 d-flex justify-content-end">
                <div class="dropup">
                    <button id="langBtn" class="btn dropdown-toggle d-flex align-items-center border-0 shadow-none p-0"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-_locale lang="{{ App::getLocale() }}" />
                    </button>

                    <ul id="langMenu" class="dropdown-menu dropdown-menu-end bg-dark border-secondary shadow-lg">
                        <div class="d-flex flex-column align-items-center gap-2 py-2">
                            @if (App::getLocale() !== 'it') <li><x-_locale lang="it" /></li> @endif
                            @if (App::getLocale() !== 'en') <li><x-_locale lang="en" /></li> @endif
                            @if (App::getLocale() !== 'es') <li><x-_locale lang="es" /></li> @endif
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom text-center py-4 mt-4">
        <div class="container">
            <p class="mb-2">
                © {{ date('Y') }} <strong>Il Ciliegio dell'Etna</strong>. Tutti i diritti riservati.
                <span class="ms-md-3 d-block d-md-inline">
                    <a href="#" id="privacy_scritta">Privacy Policy</a> | <a href="#" id="cookie_scritta">Cookie Policy</a>
                </span>
            </p>
            <p class="small opacity-75 mb-0 my-3 " >
                Powered by <a href="https://www.linkedin.com/in/alessandro-michele-piazza-13b751171/" target="_blank" class="text-decoration-none " id="il_mio_nome">Alessandro Michele Piazza</a>
            </p>
        </div>
    </div>
</footer>