<x-layout title="Esperienze">

    <x-header title="Esperienze" />

    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera">
                <!-- Alt tag ottimizzato per SEO: focus su Famiglie e Suite -->
                <picture>
                    <!-- Immagine per Mobile (schermi fino a 767px) -->
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_1.jpg') }}"
                        class="w-full h-screen object-cover">
                    <!-- Immagine per Desktop (default) -->
                    <img src="{{ asset('storage/media/etna_1.jpg') }}" class=" img-scacchiera-custom" alt="Stanza 1">
                </picture>
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_tour_escursioni') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Sottotitolo_Escursioni_etna') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Escursioni_etna_descrizione') }}
                    </p>

                    <!-- SEZIONE ICONE DETTAGLI -->
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <!-- Durata -->
                        <div class="d-flex align-items-center">
                            <i class="fa-regular fa-clock scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Durata') }}</small>
                                <span class="fw-bold">4/5h</span>
                            </div>
                        </div>

                        <!-- Difficoltà -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-mountain-sun scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Difficolta') }}</small>
                                <span class="fw-bold">{{ __('ui.Media') }}</span>
                            </div>
                        </div>

                        <!-- Attrezzatura -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-person-hiking scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Livello') }}</small>
                                <span class="fw-bold">{{ __('ui.Turistico') }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- FINE SEZIONE ICONE -->

                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">


            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_quad_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Sottotilo_Quad') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4 ">
                        {{ __('ui.Quad_etna_descrizione') }}
                    </p>

                    <!-- SEZIONE ICONE DETTAGLI -->
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-motorcycle scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">Mezzo</small>
                                <span class="fw-bold">Quad 4x4</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-id-card scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">Requisiti</small>
                                <span class="fw-bold">Patente B</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-mountain-city scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">Sunset Tour</small>
                                <span class="fw-bold">Cena Inclusa</span>
                            </div>
                        </div>

                    </div>

                    <!-- FINE SEZIONE ICONE -->

                </div>
            </div>

            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera">
                <!-- Alt tag ottimizzato per SEO: focus su Famiglie e Suite -->
                <picture>
                    <!-- Immagine per Mobile (schermi fino a 767px) -->
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_quad_tel.jpg') }}"
                        class="w-full h-screen object-cover">
                    <!-- Immagine per Desktop (default) -->
                    <img src="{{ asset('storage/media/etna_quad.jpg') }}" class=" img-scacchiera-custom"
                        alt="Stanza 1">
                </picture>
            </div>

        </div>
    </section>

    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera">
                <!-- Alt tag ottimizzato per SEO: focus su Famiglie e Suite -->
                <picture>
                    <!-- Immagine per Mobile (schermi fino a 767px) -->
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_bici_tel.jpg') }}"
                        class="w-full h-screen object-cover">
                    <!-- Immagine per Desktop (default) -->
                    <img src="{{ asset('storage/media/etna_bici.jpg') }}" class=" img-scacchiera-custom"
                        alt="Stanza 1">
                </picture>
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_bici_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Sottotitolo_Escursioni_biclicletta') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Escursioni_etna_bicicletta') }}
                    </p>

                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-route scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Distanza') }}</small>
                                <span class="fw-bold">28 km</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-bicycle scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Tipologia') }}</small>
                                <span class="fw-bold">E-MTB</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-arrow-up-right-dots scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Dislivello') }}</small>
                                <span class="fw-bold">710m</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa-regular fa-clock scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Durata') }}</small>
                                <span class="fw-bold">3h</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">


            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_asini_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Sottotitolo_asini') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4 ">
                        {{ __('ui.Etna_descrizione_asini') }}
                    </p>

                    <!-- SEZIONE ICONE DETTAGLI -->
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-children scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Ideale_per') }}</small>
                                <span class="fw-bold">{{ __('ui.Famiglie_bambini') }}</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-hourglass-half scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Durata') }}</small>
                                <span class="fw-bold">1h/2h</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-utensils scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Incluso') }}</small>
                                <span class="fw-bold">{{ __('ui.Degustazione') }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- FINE SEZIONE ICONE -->

                </div>
            </div>

            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera">
                <!-- Alt tag ottimizzato per SEO: focus su Famiglie e Suite -->
                <picture>
                    <!-- Immagine per Mobile (schermi fino a 767px) -->
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_quad_tel.jpg') }}"
                        class="w-full h-screen object-cover">
                    <!-- Immagine per Desktop (default) -->
                    <img src="{{ asset('storage/media/asini.jpg') }}" class=" img-scacchiera-custom" alt="Stanza 1">
                </picture>
            </div>

        </div>
    </section>
</x-layout>
