<x-layout
    title="{{ __('ui.Camere') }}"
    metaDescription="Camere confortevoli con servizi moderni presso Il Ciliegio dell'Etna a Giarre."
    ogTitle="Camere | Il Ciliegio dell'Etna"
    ogDescription="Camere matrimoniali e triple con comfort, Wi-Fi e servizi per un soggiorno rilassante."
    ogImage="{{ asset('storage/media/foto(9).webp') }}"
    canonical="{{ route('stanze') }}"
>

    <div class="stanze-page">

    <div id="sezione-carosello-1" class="wrapper-carosello">
        <!-- Carosello Orizzontale -->
        <div class="swiper swiper-principale-1">
            <div class="swiper-wrapper">
                <!-- Slide 1 con Verticale -->
                <div class="swiper-slide">
                    <div class="swiper swiper-verticale-1">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 (NO LAZY per LCP) -->
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)"
                                        srcset="{{ asset('storage/media/foto_telefono(9).webp') }}"
                                        class="w-full h-screen object-cover">
                                    <img src="{{ asset('storage/media/foto(9).webp') }}" class="img_carosello_stanza"
                                        alt="Camera matrimoniale - interno della stanza presso Il Ciliegio dell'Etna">
                                </picture>
                            </div>

                            <!-- Slide 2 (Lazy) -->
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)"
                                        srcset="{{ asset('storage/media/foto_telefono(10).webp') }}">
                                    <img src="{{ asset('storage/media/foto(10).webp') }}" class="img_carosello_stanza"
                                        alt="Camera matrimoniale - dettaglio arredamento presso Il Ciliegio dell'Etna" loading="lazy">
                                </picture>
                            </div>

                            <!-- Slide 3 (Lazy) -->
                            <div class="swiper-slide">
                                <picture>
                                    <source media="(max-width: 767px)"
                                        srcset="{{ asset('storage/media/foto_telefono(11).webp') }}">
                                    <img src="{{ asset('storage/media/foto(11).webp') }}" class="img_carosello_stanza"
                                        alt="Camera matrimoniale - vista e decorazioni presso Il Ciliegio dell'Etna" loading="lazy">
                                </picture>
                            </div>
                        </div>
                        <div class="swiper-pagination pag-verticale-1"></div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination pag-orizzontale-1"></div>
        </div>
    </div>

    {{-- INIZIO SCACCHIERA STANZE --}}

    {{-- 1. STANZE MATRIMONIALI (Immagine Sinistra - Testo Destra) --}}
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera col-img-stanze">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/foto_telefono(12).webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/foto(12).webp') }}" class="img-scacchiera-custom"
                        alt="Camere Matrimoniali" loading="lazy">
                </picture>
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center col-text-stanze py-5 px-4 p-md-5">
                <div class="position-relative w-100">
                    <span class="stanze-section-number">01</span>
                    <h2 class="stanze-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-once="true">{{ __('ui.Camere_matrimoniali') }}</h2>
                    <hr class="divider-premium-stanze" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                    <span class="stanze-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                        data-aos="fade-up" data-aos-delay="350"
                        data-aos-once="true">{{ __('ui.Un_nido') }}</span>
                    <p class="stanze-description mb-4" data-aos="fade-up" data-aos-delay="400"
                        data-aos-once="true">{{ __('ui.Camere_matrimoniali_Descrizione') }}</p>
                    <div class="amenity-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                        <div class="amenity-item">
                            <i class="fas fa-snowflake scritta_verde_medio"></i>
                            <span>{{ __('ui.Aria_Condizionata') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-wifi scritta_verde_medio"></i>
                            <span>{{ __('ui.Wi-Fi_Free') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-tv scritta_verde_medio"></i>
                            <span>{{ __('ui.TV') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-shower scritta_verde_medio"></i>
                            <span>{{ __('ui.Bagno_privato') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-mug-hot scritta_verde_medio"></i>
                            <span>{{ __('ui.Bollitore_in_stanza') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-separator-stanze">

    {{-- 2. CAMERE TRIPLE (Testo Sinistra - Immagine Destra su Desktop | Immagine SOPRA su Mobile) --}}
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera col-img-stanze order-1 order-md-2">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/tripla_telefono.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/tripla.webp') }}" class="img-scacchiera-custom"
                        alt="Camere Triple Superior" loading="lazy">
                </picture>
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center col-text-stanze py-5 px-4 p-md-5 order-2 order-md-1">
                <div class="position-relative w-100">
                    <span class="stanze-section-number">02</span>
                    <h2 class="stanze-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-once="true">{{ __('ui.Camere_Triple_Superior') }}</h2>
                    <hr class="divider-premium-stanze" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                    <span class="stanze-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                        data-aos="fade-up" data-aos-delay="350"
                        data-aos-once="true">{{ __('ui.Ampiezza_e_Comfort') }}</span>
                    <p class="stanze-description mb-4" data-aos="fade-up" data-aos-delay="400"
                        data-aos-once="true">{{ __('ui.Camere_Triple_Descrizione') }}</p>
                    <div class="amenity-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                        <div class="amenity-item">
                            <i class="fas fa-snowflake scritta_verde_medio"></i>
                            <span>{{ __('ui.Aria_Condizionata') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-wifi scritta_verde_medio"></i>
                            <span>{{ __('ui.Wi-Fi_Free') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-tv scritta_verde_medio"></i>
                            <span>{{ __('ui.TV') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-mug-hot scritta_verde_medio"></i>
                            <span>{{ __('ui.Bollitore_in_stanza') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-wheelchair scritta_verde_medio"></i>
                            <span>{{ __('ui.Accesso_Disabili') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-shower scritta_verde_medio"></i>
                            <span>{{ __('ui.Bagno_privato') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="section-separator-stanze">

    {{-- 3. CAMERE QUADRUPLE (Immagine Sinistra - Testo Destra) --}}
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right"
        data-aos-duration="1500" data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera col-img-stanze">
                <picture>
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/quadrupla_telefono.webp') }}"
                        class="w-full h-screen object-cover">
                    <img src="{{ asset('storage/media/quadrupla.webp') }}" class="img-scacchiera-custom"
                        alt="Camere Quadruple" loading="lazy">
                </picture>
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center col-text-stanze py-5 px-4 p-md-5">
                <div class="position-relative w-100">
                    <span class="stanze-section-number">03</span>
                    <h2 class="stanze-title fw-bold mb-3" data-aos="fade-up" data-aos-delay="200"
                        data-aos-once="true">{{ __('ui.Quadrupla') }}</h2>
                    <hr class="divider-premium-stanze" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                    <span class="stanze-subtitle sub-label scritta_verde_medio d-block mb-2 fst-italic"
                        data-aos="fade-up" data-aos-delay="350"
                        data-aos-once="true">{{ __('ui.Spazio_e_armonia') }}</span>
                    <p class="stanze-description mb-4" data-aos="fade-up" data-aos-delay="400"
                        data-aos-once="true">{{ __('ui.Camere_Quadruple_Descrizione') }}</p>
                    <div class="amenity-row" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                        <div class="amenity-item">
                            <i class="fas fa-snowflake scritta_verde_medio"></i>
                            <span>{{ __('ui.Aria_Condizionata') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-wifi scritta_verde_medio"></i>
                            <span>{{ __('ui.Wi-Fi_Free') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-tv scritta_verde_medio"></i>
                            <span>Smart TV</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-mug-hot scritta_verde_medio"></i>
                            <span>{{ __('ui.Bollitore_in_stanza') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-wheelchair scritta_verde_medio"></i>
                            <span>{{ __('ui.Accesso_Disabili') }}</span>
                        </div>
                        <div class="amenity-item">
                            <i class="fas fa-shower scritta_verde_medio"></i>
                            <span>{{ __('ui.Bagno_privato') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>

</x-layout>
