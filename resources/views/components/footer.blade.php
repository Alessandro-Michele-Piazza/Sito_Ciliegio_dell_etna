<footer class="footer-modern">
    <div class="container pt-5 px-0">
        <!-- RIGA SUPERIORE: LOGO E INFO -->
        <div class="row g-4 mb-2">
            <!-- COLONNA BRAND -->
            <div class="col-lg-4 col-md-12">
                <a href="{{ route('home') }}"> <img src="{{ Vite::asset('resources/images/logo_ciliegio.webp') }}"
                        alt="Logo Il Ciliegio dell'Etna" class="footer-logo mb-3"></a>
                <p class="footer-description mb-3">
                    {{ __('ui.footer_scritta') }}
                </p>
                <ul class="footer-commercial list-unstyled">
                    <li>
                        <span class="footer-commercial__title">IL CILIEGIO DELL’ETNA Soc. Agricola S.R.L.</span>
                    </li>

                    <li>
                        <i class="fas fa-id-card"></i>
                        <span>P. IVA e C.F. 05388700873</span>
                    </li>

                    <li>
                        <i class="fas fa-clipboard-list"></i>
                        <span>Iscrizione REA CT - 362901</span>
                    </li>
                    <li>
                        <i class="fas fa-shield-halved"></i>
                        <span>PEC: ciliegiodelletna@pec.it</span>
                    </li>
                </ul>

            </div>

            <!-- COLONNA LINK RAPIDI -->
            <div class="col-lg-2 col-md-6 ms-lg-auto">
                <h5 class="footer-title">{{ __('ui.esplora') }}</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ route('ristorazione') }}">{{ __('ui.ristorazione_footer') }}</a></li>
                    <li><a href="{{ route('stanze') }}">{{ __('ui.le_camere') }}</a></li>
                    {{-- <li><a href="{{ route('blog.index') }}">Blog</a></li>
                    <li><a href="{{ route('esperienze') }}">{{ __('ui.Esperienze') }}</a></li> --}}
                    <li><a href="{{ route('eventi') }}">{{ __('ui.Eventi') }}</a></li>
                    <li><a href="{{ route('menu_domenicale') }}">{{ __('ui.Menu_domenicale') }}</a></li>
                    <li><a href="https://www.tenutadeiciliegi.it">{{ __('ui.Matrimoni') }}</a></li>
                </ul>
            </div>

            <!-- COLONNA CONTATTI -->
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('contatti') }}">
                    <h5 class="footer-title" id="contatti">{{ __('ui.contatti') }}</h5>
                </a>
                <ul class="list-unstyled footer-contact">
                    <a href="https://maps.app.goo.gl/3xSpixaTwDHq2xfP6">
                        <li id="indicazione_mappa_footer"> <i class="fas fa-map-marker-alt"></i> <span>Via Filippo Meda,
                                88 - 95014 - Giarre (CT)</span></li>
                    </a>
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
                    <a href="https://www.facebook.com/ilciliegiodelletna/?locale=it_IT" class="icona_facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/ilciliegiodelletna/" class="icona_instagram"><i
                            class="fab fa-instagram"></i></a>
                    <a href="https://www.tiktok.com/@il.ciliegio.delle" class="icona_tiktok"><i
                            class="fab fa-tiktok"></i></a>
                    <a href="https://www.youtube.com/watch?v=D07m6Y-4lrc" class="icona_youtube"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-6 d-flex justify-content-end">
                <div class="dropup">
                    <button id="langBtn"
                        class="btn dropdown-toggle d-flex align-items-center border-0 shadow-none p-0" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <x-_locale lang="{{ App::getLocale() }}" />
                    </button>

                    <ul id="langMenu" class="dropdown-menu dropdown-menu-end bg-dark border-secondary shadow-lg">
                        <div class="d-flex flex-column align-items-center gap-2 py-2">
                            @if (App::getLocale() !== 'it')
                                <li><x-_locale lang="it" /></li>
                            @endif
                            @if (App::getLocale() !== 'en')
                                <li><x-_locale lang="en" /></li>
                            @endif
                            @if (App::getLocale() !== 'es')
                                <li><x-_locale lang="es" /></li>
                            @endif
                            @if (App::getLocale() !== 'fr')
                                <li><x-_locale lang="fr" /></li>
                            @endif
                            @if (App::getLocale() !== 'de')
                                <li><x-_locale lang="de" /></li>
                            @endif

                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom text-center py-4 mt-4">
        <div class="container">
            {{-- <p class="mb-2">
                © {{ date('Y') }} <strong>Il Ciliegio dell'Etna</strong>. Tutti i diritti riservati.
                <span class="ms-md-3 d-block d-md-inline">
                    <a href="#" id="privacy_scritta">Privacy Policy</a> | <a href="#"
                        id="cookie_scritta">Cookie Policy</a>
                </span>
            </p> --}}
            <p class="small opacity-75 mb-0 my-3 ">
                Powered by <a href="https://www.linkedin.com/in/alessandro-michele-piazza-13b751171/" target="_blank"
                    class="text-decoration-none" id="il_mio_nome">Alessandro Michele Piazza</a>
            </p>
        </div>
    </div>
</footer>
