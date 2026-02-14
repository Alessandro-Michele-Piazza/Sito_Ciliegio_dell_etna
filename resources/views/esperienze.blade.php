<x-layout
    title="{{ __('ui.Esperienze') }}"
    metaDescription="Esperienze e tour sull'Etna: escursioni, parchi avventura e attrazioni vicine a Giarre."
    ogTitle="Esperienze | Il Ciliegio dell'Etna"
    ogDescription="Scopri esperienze, escursioni e attività sul territorio dell'Etna."
    ogImage="{{ asset('storage/media/etna_1.webp') }}"
    canonical="{{ route('esperienze') }}"
>

    <div class="esperienze-page">

        <x-header title="{{ __('ui.Esperienze') }}" />

        <!-- 1. ETNA TOUR (Immagine Sinistra - Testo Destra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_1_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/etna_1.webp') }}" class="img-scacchiera-custom"
                            alt="Escursione sull'Etna">
                    </picture>
                </div>
                <!-- Testo -->
                <div class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">01</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Etna_tour_escursioni') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_Escursioni_etna') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Escursioni_etna_descrizione') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-regular fa-clock"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Durata') }}</span>
                                    <span class="badge-value">4/5h</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-mountain-sun"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Difficolta') }}</span>
                                    <span class="badge-value">{{ __('ui.Media') }}</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-person-hiking"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Livello') }}</span>
                                    <span class="badge-value">{{ __('ui.Turistico') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 2. ETNALAND (Testo Sinistra - Immagine Destra su Desktop | Immagine Sopra su Mobile) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-1 order-md-2">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etnaland_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/etnaland.webp') }}" class="img-scacchiera-custom"
                            alt="Etnaland Theme Park" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-1">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">02</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Etnaland_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_Etnaland') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Etnaland_descrizione') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-route"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Distanza') }}</span>
                                    <span class="badge-value">45 min</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-ticket"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Tipologia') }}</span>
                                    <span class="badge-value">{{ __('ui.Parco_Divertimenti') }}</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-children"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Ideale_per') }}</span>
                                    <span class="badge-value">{{ __('ui.Famiglie_bambini') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 3. Parco Avventura Etna Milo (Immagine Sinistra - Testo Destra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-2 order-md-1">
                    <picture>
                        <source media="(max-width: 767px)"
                            srcset="{{ asset('storage/media/parco_avventura_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/parco_avventura.webp') }}" class="img-scacchiera-custom"
                            alt="Parco Avventura Etna Milo - Percorsi sugli alberi" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-2">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">03</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Parco_Avventura_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_Parco_Avventura') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Parco_Avventura_descrizione') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-tree"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Tipologia') }}</span>
                                    <span class="badge-value">15 Percorsi</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-children"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Ideale_per') }}</span>
                                    <span class="badge-value">{{ __('ui.Tutte_eta') }}</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-route"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Distanza') }}</span>
                                    <span class="badge-value">17 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 4. GOLE ALCANTARA (Immagine Destra - Testo Sinistra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-1 order-md-2">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/alcantara_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/alcantara.webp') }}" class="img-scacchiera-custom"
                            alt="Body Rafting Gole Alcantara" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-1">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">04</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Alcantara_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_Alcantara') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Alcantara_descrizione') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-route"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Distanza') }}</span>
                                    <span class="badge-value">45 min</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-person-swimming"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Tipologia') }}</span>
                                    <span class="badge-value">{{ __('ui.Body_Rafting') }}</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-bolt"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Difficolta') }}</span>
                                    <span class="badge-value">{{ __('ui.Livello_Medio') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 5. TAORMINA (Immagine Sinistra - Testo Destra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-1 order-md-1">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/taormina_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/taormina.webp') }}" class="img-scacchiera-custom"
                            alt="Taormina" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-2">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">05</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Taormina_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_Taormina') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Taormina_descrizione') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-route"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Distanza') }}</span>
                                    <span class="badge-value">35 min</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-landmark"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Tipologia') }}</span>
                                    <span class="badge-value">{{ __('ui.Cultura_Mare') }}</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-masks-theater"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Da_non_perdere') }}</span>
                                    <span class="badge-value">{{ __('ui.Teatro_Greco') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 6. QUAD TOUR (Immagine Destra - Testo Sinistra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-1 order-md-2">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_quad_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/etna_quad.webp') }}" class="img-scacchiera-custom"
                            alt="Etna Quad" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-1">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">06</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Etna_quad_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotilo_Quad') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Quad_etna_descrizione') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-regular fa-clock"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Durata') }}</span>
                                    <span class="badge-value">3h</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-motorcycle"></i></div>
                                <div>
                                    <span class="badge-label">Mezzo</span>
                                    <span class="badge-value">Quad 4x4</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-id-card"></i></div>
                                <div>
                                    <span class="badge-label">Requisiti</span>
                                    <span class="badge-value">Patente B</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 7. E-BIKE TOUR (Immagine Sinistra - Testo Destra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-1 order-md-1">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_bici_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/etna_bici.webp') }}" class="img-scacchiera-custom"
                            alt="E-Bike Etna" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-2">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">07</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Etna_bici_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_Escursioni_biclicletta') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Escursioni_etna_bicicletta') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-regular fa-clock"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Durata') }}</span>
                                    <span class="badge-value">3h</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-bicycle"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Tipologia') }}</span>
                                    <span class="badge-value">E-MTB</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-arrow-up-right-dots"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Dislivello') }}</span>
                                    <span class="badge-value">710m</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 8. ASINI TOUR (Immagine Destra - Testo Sinistra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-1 order-md-2">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/asini_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/asini.webp') }}" class="img-scacchiera-custom"
                            alt="Asini Etna" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-1">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">08</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Etna_asini_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_asini') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Etna_descrizione_asini') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-regular fa-clock"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Durata') }}</span>
                                    <span class="badge-value">1h/2h</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-children"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Ideale_per') }}</span>
                                    <span class="badge-value">{{ __('ui.Famiglie_bambini') }}</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-utensils"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Incluso') }}</span>
                                    <span class="badge-value">{{ __('ui.Degustazione') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 9. Delfini Giardini (Immagine Sinistra - Testo Destra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-1 order-md-1">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/delfini_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/delfini.webp') }}" class="img-scacchiera-custom"
                            alt="Dolphin Watching Giardini Naxos" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-2">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">09</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Delfini_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_Delfini') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Delfini_descrizione') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-regular fa-clock"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Durata') }}</span>
                                    <span class="badge-value">2h</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-ship"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Tipologia') }}</span>
                                    <span class="badge-value">{{ __('ui.Tour_Barca') }}</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-glass-cheers"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Incluso') }}</span>
                                    <span class="badge-value">{{ __('ui.Aperitivo_Incluso') }}</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-route"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Distanza') }}</span>
                                    <span class="badge-value">30 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr class="section-separator">

        <!-- 10. Sciare sull'Etna (Immagine Destra - Testo Sinistra) -->
        <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left"
            data-aos-duration="1500" data-aos-once="true">
            <div class="row g-0 align-items-stretch">
                <!-- Immagine -->
                <div class="col-12 col-md-7 h-scacchiera col-img-exp order-1 order-md-2">
                    <picture>
                        <source media="(max-width: 767px)" srcset="{{ asset('storage/media/etna_scii_tel.webp') }}"
                            class="w-full h-screen object-cover">
                        <img src="{{ asset('storage/media/etna_scii.webp') }}" class="img-scacchiera-custom"
                            alt="Sciare sull'Etna con vista mare" loading="lazy">
                    </picture>
                </div>
                <!-- Testo -->
                <div
                    class="col-12 col-md-5 d-flex align-items-center col-text-exp py-5 px-4 p-md-5 order-2 order-md-1">
                    <div class="position-relative w-100">
                        <span class="exp-section-number">10</span>
                        <h2 class="exp-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                            data-aos-once="true">{{ __('ui.Etna_sci_titolo') }}</h2>
                        <hr class="divider-premium" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                        <span class="exp-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                            data-aos="fade-up" data-aos-delay="350"
                            data-aos-once="true">{{ __('ui.Sottotitolo_sci') }}</span>
                        <p class="exp-description mb-4" data-aos="fade-up" data-aos-delay="400"
                            data-aos-once="true">{{ __('ui.Etna_sci_descrizione') }}</p>
                        <div class="info-badges-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-mountain-sun"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Stazioni') }}</span>
                                    <span class="badge-value">Nord & Sud</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-person-skiing"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Tipologia') }}</span>
                                    <span class="badge-value">Sci / Snowboard</span>
                                </div>
                            </div>
                            <div class="info-badge">
                                <div class="badge-icon"><i class="fa-solid fa-route"></i></div>
                                <div>
                                    <span class="badge-label">{{ __('ui.Distanza') }}</span>
                                    <span class="badge-value">30 min</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

</x-layout>
