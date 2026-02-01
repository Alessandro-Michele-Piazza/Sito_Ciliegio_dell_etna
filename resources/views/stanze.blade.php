<x-layout title="camere">

    <div id="sezione-carosello-1" class="wrapper-carosello">

        <!-- Carosello Orizzontale -->
        <div class="swiper swiper-principale-1">
            <div class="swiper-wrapper">

                <!-- Slide 1 con Verticale -->
                <div class="swiper-slide">
                    <div class="swiper swiper-verticale-1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="{{ asset('storage/media/foto(1).jpg') }}" alt="Stanza 1">
                            </div>
                            <div class="swiper-slide"><img src="{{ asset('storage/media/foto(2).jpg') }}"
                                    alt="Stanza 2"></div>
                            <div class="swiper-slide"><img src="{{ asset('storage/media/foto(4).jpg') }}"
                                    alt="Stanza 3"></div>
                        </div>
                        <!-- Pagination Verticale (Linee a destra) -->
                        <div class="swiper-pagination pag-verticale-1"></div>
                    </div>
                </div>


            </div>
            <!-- Pagination Orizzontale (Linee in basso) -->
            <div class="swiper-pagination pag-orizzontale-1"></div>
        </div>

    </div>





    {{-- INIZIO SCACCHIERA STANZE --}}

    {{-- STANZE MATRIMONIALI --}}


    <section class="container-fluid div-scacchiera px-0 overflow-hidden " data-aos="fade-right" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera">
                <img src="{{ asset('storage/media/foto(2).jpg') }}" alt="Ristorante" class="img-scacchiera-custom"
                    id="img-scacchiera">
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center  py-5 px-4 p-md-5 bg-white ">
                <div>
                    <h2 class="fw-bold mb-3"> {{ __('ui.Camere_matrimoniali') }} </h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic"> {{ __('ui.Un_nido') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Camere_matrimoniali_Descrizione') }}
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-snowflake scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Aria_Condizionata') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wifi scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Wi-Fi_Free') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-tv scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.TV') }}</span>
                        </div>

                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-shower scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Bagno_privato') }}</span>
                        </div>

                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-mug-hot scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Bollitore_in_stanza') }}</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- CAMERE TRIPLE --}}


    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">

            <!-- COLONNA TESTO: Ho aggiunto order-2 (seconda su mobile) e order-md-1 (torna prima su PC) -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-1">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Camere_Triple_Superior') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Ampiezza_e_Comfort') }}

                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Camere_Triple_Descrizione') }}
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-snowflake scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Aria_Condizionata') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wifi scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Wi-Fi_Free') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-tv scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.TV') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-mug-hot scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Bollitore_in_stanza') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wheelchair scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Accesso_Disabili') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-shower scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Bagno_privato') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLONNA IMMAGINE: Ho aggiunto order-1 (prima su mobile) e order-md-2 (torna seconda su PC) -->
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-2">
                <!-- Alt tag ottimizzato SEO -->
                <img src="{{ asset('storage/media/foto(4).jpg') }}"
                    alt="Camera tripla spaziosa per famiglie al Ciliegio dell'Etna" class="img-scacchiera-custom">
            </div>
        </div>
    </section>
    {{-- CAMERE QUADRUPLE --}}


    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera">
                <!-- Alt tag ottimizzato per SEO: focus su Famiglie e Suite -->
                <img src="{{ asset('storage/media/foto(2).jpg') }}"
                    alt="Camere Quadruple Family Suite per famiglie al Ciliegio dell'Etna" class="img-scacchiera-custom"
                    id="img-scacchiera">
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Quadrupla') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Spazio_e_armonia') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Camere_Quadruple_Descrizione') }}
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-snowflake scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Aria_Condizionata') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wifi scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Wi-Fi_Free') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-tv scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Smart TV</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-mug-hot scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Bollitore_in_stanza') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wheelchair scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Accesso_Disabili') }}</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-shower scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">{{ __('ui.Bagno_privato') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
