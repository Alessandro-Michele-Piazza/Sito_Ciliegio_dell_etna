<x-layout title="Esperienze">

    <x-header title="Esperienze" />

    <!-- 1. ETNA TOUR (Immagine Sinistra - Testo Destra) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- Immagine (Sempre prima su Mobile) -->
            <div class="col-12 col-md-7 h-scacchiera">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_1_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/etna_1.webp') }}" class="img-scacchiera-custom"
                        alt="Escursione sull'Etna">
                </picture>
            </div>
            <!-- Testo -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_tour_escursioni') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span
                        class="sub-label scritta_verde_medio d-block mb-2 fst-italic">{{ __('ui.Sottotitolo_Escursioni_etna') }}</span>
                    <p class="descrizione-scacchiera mb-4">{{ __('ui.Escursioni_etna_descrizione') }}</p>
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center"><i
                                class="fa-regular fa-clock scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Durata') }}</small><span
                                    class="fw-bold">4/5h</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-mountain-sun scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Difficolta') }}</small><span
                                    class="fw-bold">{{ __('ui.Media') }}</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-person-hiking scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Livello') }}</small><span
                                    class="fw-bold">{{ __('ui.Turistico') }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. ETNALAND (Testo Sinistra - Immagine Destra su Desktop | Immagine Sopra su Mobile) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- Immagine: Messa prima nel codice, ma con order-md-2 per spostarla a destra su desktop -->
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-2">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etnaland_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/etnaland.webp') }}" class="img-scacchiera-custom"
                        alt="Etnaland Theme Park" loading="lazy">
                </picture>
            </div>
            <!-- Testo: Seconda nel codice, ma con order-md-1 per spostarla a sinistra su desktop -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-1">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etnaland_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span
                        class="sub-label scritta_verde_medio d-block mb-2 fst-italic">{{ __('ui.Sottotitolo_Etnaland') }}</span>
                    <p class="descrizione-scacchiera mb-4">{{ __('ui.Etnaland_descrizione') }}</p>
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-route scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Distanza') }}</small><span
                                    class="fw-bold">45 min</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-ticket scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Tipologia') }}</small><span
                                    class="fw-bold">{{ __('ui.Parco_Divertimenti') }}</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-children scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Ideale_per') }}</small><span
                                    class="fw-bold">{{ __('ui.Famiglie_bambini') }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Parco Avventura Etna Milo (Testo Destra - Immagine Sinistra su Desktop | Immagine Sopra su Mobile) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">

            <!-- COLONNA IMMAGINE: Prima su mobile, a sinistra su desktop -->
            <div class="col-12 col-md-7 h-scacchiera order-2 order-md-1">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/parco_avventura_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/parco_avventura.webp') }}" class="img-scacchiera-custom"
                        alt="Parco Avventura Etna Milo - Percorsi sugli alberi" loading="lazy">
                </picture>
            </div>

            <!-- COLONNA TESTO: Seconda su mobile, a destra su desktop -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-2">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Parco_Avventura_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Sottotitolo_Parco_Avventura') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Parco_Avventura_descrizione') }}
                    </p>

                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <!-- Tipologia -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-tree scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Tipologia') }}</small>
                                <span class="fw-bold">15 Percorsi</span>
                            </div>
                        </div>

                        <!-- Target -->
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-children scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Ideale_per') }}</small>
                                <span class="fw-bold">{{ __('ui.Tutte_eta') }}</span>
                            </div>
                        </div>

                        <!-- Distanza -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-route scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Distanza') }}</small>
                                <span class="fw-bold">17 min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <!-- 4. GOLE ALCANTARA (Immagine Destra - Testo Sinistra) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">

            <!-- COLONNA IMMAGINE: Prima su mobile, a sinistra su desktop -->
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-2">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/alcantara_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/alcantara.webp') }}" class="img-scacchiera-custom"
                        alt="Body Rafting Gole Alcantara" loading="lazy">
                </picture>
            </div>

            <!-- COLONNA TESTO: Seconda su mobile, a destra su desktop -->

            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-1">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Alcantara_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span
                        class="sub-label scritta_verde_medio d-block mb-2 fst-italic">{{ __('ui.Sottotitolo_Alcantara') }}</span>
                    <p class="descrizione-scacchiera mb-4">{{ __('ui.Alcantara_descrizione') }}</p>
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-route scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Distanza') }}</small><span
                                    class="fw-bold">45 min</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-person-swimming scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Tipologia') }}</small><span
                                    class="fw-bold">{{ __('ui.Body_Rafting') }}</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-bolt scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Difficolta') }}</small><span
                                    class="fw-bold">{{ __('ui.Livello_Medio') }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. TAORMINA (Testo Destra - Immagine Sinistra su Desktop | Immagine Sopra su Mobile) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-rkight"
        data-aos-duration="1500" data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-1">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/taormina_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/taormina.webp') }}" class="img-scacchiera-custom"
                        alt="Taormina" loading="lazy">
                </picture>
            </div>
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-2">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Taormina_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span
                        class="sub-label scritta_verde_medio d-block mb-2 fst-italic">{{ __('ui.Sottotitolo_Taormina') }}</span>
                    <p class="descrizione-scacchiera mb-4">{{ __('ui.Taormina_descrizione') }}</p>
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-route scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Distanza') }}</small><span
                                    class="fw-bold">35 min</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-landmark scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Tipologia') }}</small><span
                                    class="fw-bold">{{ __('ui.Cultura_Mare') }}</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-masks-theater scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Da_non_perdere') }}</small><span
                                    class="fw-bold">{{ __('ui.Teatro_Greco') }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. QUAD TOUR (Immagine Destra - Testo Sinistra) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left"
        data-aos-duration="1500" data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-2">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_quad_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/etna_quad.webp') }}" class="img-scacchiera-custom"
                        alt="Etna Quad" loading="lazy">
                </picture>
            </div>
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-1  ">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_quad_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span
                        class="sub-label scritta_verde_medio d-block mb-2 fst-italic">{{ __('ui.Sottotilo_Quad') }}</span>
                    <p class="descrizione-scacchiera mb-4 ">{{ __('ui.Quad_etna_descrizione') }}</p>
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center"><i
                                class="fa-regular fa-clock scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Durata') }}</small><span
                                    class="fw-bold">3h</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-motorcycle scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">Mezzo</small><span class="fw-bold">Quad
                                    4x4</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-id-card scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">Requisiti</small><span class="fw-bold">Patente
                                    B</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. E-BIKE TOUR (Testo Destra - Immagine Sinistra su Desktop | Immagine Sopra su Mobile) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right"
        data-aos-duration="1500" data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-1">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_bici_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/etna_bici.webp') }}" class="img-scacchiera-custom"
                        alt="E-Bike Etna" loading="lazy">
                </picture>
            </div>
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-2">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_bici_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span
                        class="sub-label scritta_verde_medio d-block mb-2 fst-italic">{{ __('ui.Sottotitolo_Escursioni_biclicletta') }}</span>
                    <p class="descrizione-scacchiera mb-4">{{ __('ui.Escursioni_etna_bicicletta') }}</p>
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center"><i
                                class="fa-regular fa-clock scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Durata') }}</small><span
                                    class="fw-bold">3h</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-bicycle scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Tipologia') }}</small><span
                                    class="fw-bold">E-MTB</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-arrow-up-right-dots scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Dislivello') }}</small><span
                                    class="fw-bold">710m</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. ASINI TOUR (Immagine Sinistra - Testo Destra) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left"
        data-aos-duration="1500" data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-2">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/asini_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/asini.webp') }}" class="img-scacchiera-custom"
                        alt="Asini Etna" loading="lazy">
                </picture>
            </div>
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-1">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_asini_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span
                        class="sub-label scritta_verde_medio d-block mb-2 fst-italic">{{ __('ui.Sottotitolo_asini') }}</span>
                    <p class="descrizione-scacchiera mb-4 ">{{ __('ui.Etna_descrizione_asini') }}</p>
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center"><i
                                class="fa-regular fa-clock scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Durata') }}</small><span
                                    class="fw-bold">1h/2h</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-children scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Ideale_per') }}</small><span
                                    class="fw-bold">{{ __('ui.Famiglie_bambini') }}</span></div>
                        </div>
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-utensils scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Incluso') }}</small><span
                                    class="fw-bold">{{ __('ui.Degustazione') }}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Delfini Giardini (Testo Destra - Immagine Sinistra su Desktop | Immagine Sopra su Mobile) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right"
        data-aos-duration="1500" data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE: Prima su mobile, a destra su desktop -->
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-1">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/delfini_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/delfini.webp') }}" class="img-scacchiera-custom"
                        alt="Dolphin Watching Giardini Naxos" loading="lazy">
                </picture>
            </div>

            <!-- COLONNA TESTO: Seconda su mobile, a sinistra su desktop -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-2">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Delfini_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Sottotitolo_Delfini') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Delfini_descrizione') }}
                    </p>

                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <!-- Durata -->
                        <div class="d-flex align-items-center">
                            <i class="fa-regular fa-clock scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Durata') }}</small>
                                <span class="fw-bold">2h</span>
                            </div>
                        </div>

                        <!-- Tipologia -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-ship scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Tipologia') }}</small>
                                <span class="fw-bold">{{ __('ui.Tour_Barca') }}</span>
                            </div>
                        </div>

                        <!-- Extra -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-glass-cheers scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Incluso') }}</small>
                                <span class="fw-bold">{{ __('ui.Aperitivo_Incluso') }}</span>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-route scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Distanza') }}</small><span
                                    class="fw-bold">30 min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Sciare sull'Etna (Immagine Destra - Testo Sinistra) -->
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left"
        data-aos-duration="1500" data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-2">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_scii_tel.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/etna_scii.webp') }}" class="img-scacchiera-custom"
                        alt="Sciare sull'Etna con vista mare" loading="lazy">
                </picture>
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-1">
                <div>
                    <h2 class="fw-bold mb-3">{{ __('ui.Etna_sci_titolo') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Sottotitolo_sci') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Etna_sci_descrizione') }}
                    </p>

                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4 border-top">
                        <!-- Località -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-mountain-sun scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Stazioni') }}</small>
                                <span class="fw-bold">Nord & Sud</span>
                            </div>
                        </div>

                        <!-- Tipologia -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-person-skiing scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">{{ __('ui.Tipologia') }}</small>
                                <span class="fw-bold">Sci / Snowboard</span>
                            </div>
                        </div>

                        <!-- Distanza -->
                        <div class="d-flex align-items-center"><i
                                class="fa-solid fa-route scritta_verde_medio fs-4 me-2"></i>
                            <div><small class="text-muted d-block lh-1">{{ __('ui.Distanza') }}</small><span
                                    class="fw-bold">30 min</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-layout>
