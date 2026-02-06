<x-layout title="Homepage">

    <div class="h-video">
        <video class="video_home px-0" autoplay loop muted playsinline>

            <source src="{{ asset('storage/media/video_ciliegio_home.mp4') }}" type="video/mp4">
        </video>
    </div>

    <section class="container section-mission py-5" data-aos="fade-down" data-aos-duration="1500"
        data-aos-easing="ease-in-out" data-aos-once="true">

        <div class="row align-items-start">

            <div class="col-lg-5 col-md-12 mb-4 mb-lg-0 text-center text-lg-start">
                <span class="sub-label scritta_rossa"> {{ __('ui.dal_2005') }} </span>
                <h2 class="titolo-mission scritta_verde_scuro mt-2">
                    Il Ciliegio dell'Etna <br>
                    <span class="testo-radici-sul-vulcano">{{ __('ui.radici_sul_vulcano') }}</span>
                </h2>
                <div class="divider-short mx-auto mx-lg-0"></div>
            </div>

            <div class="col-lg-7 col-md-12 text-center text-lg-start">
                <div class="content-wrapper">
                    <p class="descrizione-mission">
                        {{ __('ui.il_nostro') }}<strong
                            class="scritta_verde_medio">{{ __('ui.agriturismo_a_Giarre') }}</strong>
                        {{ __('ui.storia_di_passione') }}<strong class="scritta_verde_medio">
                            Etna</strong>{{ __('ui.la_nostra_missione') }} <strong
                            class="scritta_verde_medio">{{ __('ui.cucina_siciliana') }}</strong>
                        {{ __('ui.antichi_ingredienti') }}
                    </p>
                    <p class="descrizione-mission mt-4">
                        <strong class="scritta_verde_medio"> {{ __('ui.Ristorante') }}</strong>
                        {{ __('ui.nella_nostra') }} <strong
                            class="scritta_verde_medio">{{ __('ui.pizzeria') }}</strong>
                        <strong class="scritta_verde_medio">{{ __('ui.prodotti_tipici') }}</strong>
                        {{ __('ui.km.0') }}
                        <strong class="scritta_verde_medio">{{ __('ui.banchetti') }}</strong>{{ __('ui.avvolti') }}
                    </p>
                    <a href=" {{ route('contatti') }} " class="link-scopri mt-4 d-inline-block">
                        <span> {{ __('ui.contattaci') }}</span>
                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>


    {{-- INIZIO SCACCHIERA --}}

    {{-- INIZIO TERZA SECTION --}}

    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-right" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">
            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera">
                <picture>
                    <!-- Immagine per Mobile (schermi fino a 767px) -->
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/foto(5).webp') }}"
                        class="w-full h-screen object-cover">
                    <!-- Immagine per Desktop (default) -->
                    <img src="{{ asset('storage/media/foto_pc(5).webp') }}" class=" img-scacchiera-custom"
                        alt="Stanza 1">
                </picture>
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5  ">
                <div>
                    <h2 class="fw-bold mb-3"> {{ __('ui.Ristorante') }} <span class="scritta_verde_medio">&</span>
                        {{ __('ui.Pizzeria') }}</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span
                        class="sub-label scritta_verde_medio d-block mb-2 fst-italic">{{ __('ui.Tradizione_Vulcanica') }}</span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.descrizione_scacchiera_1') }}
                    </p>

                    <p class="testo-radici-sul-vulcano mb-5 fst-italic">
                        "{{ __('ui.descrizione_scacchiera_2') }}"
                    </p>

                    <a href="{{ route('ristorante') }}" class="link-scopri">
                        <span> {{ __('ui.esplora_la_nostra_cucina') }}</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- FINE TERZA SECTION --}}

    {{-- INIZIO QUARTA SECTION --}}

    {{-- INIZIO QUARTA SECTION --}}
    <section class="container-fluid div-scacchiera px-0 overflow-hidden" data-aos="fade-left" data-aos-duration="1500"
        data-aos-once="true">
        <div class="row g-0 align-items-stretch">

            <!-- COLONNA TESTO: diventa seconda su mobile (order-2) e torna prima su desktop (order-md-1) -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5 order-2 order-md-1">
                <div>
                    <h2 class="fw-bold mb-3">Comfort <span class="scritta_verde_medio">&</span> Relax</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        {{ __('ui.Ospitalità_sicula') }} </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.descrizione_scacchiera_3') }}
                    </p>

                    <p class="testo-radici-sul-vulcano mb-5 fst-italic">
                        "{{ __('ui.descrizione_scacchiera_4') }}"
                    </p>

                    <a href="{{ route('stanze') }}" class="link-scopri">
                        <span>{{ __('ui.Scopri_le_nostre_camere') }}</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- COLONNA IMMAGINE: diventa prima su mobile (order-1) e torna seconda su desktop (order-md-2) -->
            <div class="col-12 col-md-7 h-scacchiera order-1 order-md-2">
                <picture>
                    <!-- Immagine per Mobile (schermi fino a 767px) -->
                    <source media="(max-width: 767px)" srcset="{{ asset('storage/media/foto_telefono(12).webp') }}"
                        class="w-full h-screen object-cover">
                    <!-- Immagine per Desktop (default) -->
                    <img src="{{ asset('storage/media/foto(12).webp') }}" class=" img-scacchiera-custom"
                        alt="Stanza 1">
                </picture>
            </div>
        </div>
    </section>
    {{-- FINE QUARTA SECTION --}}

    <!-- COLONNA IMMAGINE PARALLASSE -->
    <x-parallasse />
    {{-- INIZIO CAROSELLO --}}

    <div
        class="container-fluid altezza-div-carosello d-flex align-items-evenly justify-content-center larghezza-custom position-relative ">
        <div class="swiper mySwiper px-3 margin-top-reviews " data-aos="fade-down" data-aos-duration="1500"
            data-aos-easing="ease-in-out" data-aos-once="true">
            <div class="swiper-wrapper ">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="avatar-container profilo-1">
                            N <div class="google-icon">G</div>
                        </div>
                        <div class="reviewer-name scritta_verde_scuro">Mariella Di Bella</div>
                        <div class="review-date">05-04-2025</div>
                        <div class="stars">★★★★★ <small>✔</small></div>
                        <p class="review-text scritta_verde_scuro">
                            {{ Str::limit('Il Posto è favoloso, il personale eccellente, la cucina da Dio! Merita davvero! Lo stra-consiglio!!!', 100, '...') }}
                        </p>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="avatar-container profilo-2">
                            M <div class="google-icon">G</div>
                        </div>
                        <div class="reviewer-name scritta_verde_scuro"> Elisa Licciardello</div>
                        <div class="review-date">12-01-2026</div>
                        <div class="stars">★★★★★ <small>✔</small></div>
                        <p class="review-text scritta_verde_scuro">
                            {{ Str::limit(
                                'Cibo buonissimo.Ottima organizzazione.Personale cortese.Vista stupenda. Struttura bellissima e pulita.',
                                100,
                                '...',
                            ) }}
                        </p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="avatar-container profilo-3">
                            R <div class="google-icon">G</div>
                        </div>
                        <div class="reviewer-name scritta_verde_scuro">Riccardo Carmeci</div>
                        <div class="review-date">06-12-2025</div>
                        <div class="stars">★★★★★ <small>✔</small></div>
                        <p class="review-text scritta_verde_scuro">
                            {{ Str::limit(
                                'Locale molto accogliente e personale efficiente. La pizza era buonissima. Completamente soddisfatta tornerò sicuramente.',
                                100,
                                '...',
                            ) }}
                        </p>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="avatar-container profilo-4">
                            S <div class="google-icon">G</div>
                        </div>
                        <div class="reviewer-name scritta_verde_scuro">Stefania Arcidiacono</div>
                        <div class="review-date">20-10-2025</div>
                        <div class="stars">★★★★★ <small>✔</small></div>
                        <p class="review-text scritta_verde_scuro">
                            {{ Str::limit(
                                'Cucina raffinata che esalta i sapori del territorio. I primi piatti sono un’esplosione di gusto, impiattamento curatissimo. Un plauso allo chef!',
                                100,
                                '...',
                            ) }}
                        </p>
                    </div>
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="avatar-container profilo-5">
                            L <div class="google-icon">G</div>
                        </div>
                        <div class="reviewer-name scritta_verde_scuro">Luca Contarino</div>
                        <div class="review-date">08-05-2025</div>
                        <div class="stars">★★★★★ <small>✔</small></div>
                        <p class="review-text scritta_verde_scuro">
                            {{ Str::limit('Soggiorno indimenticabile. Camere pulitissime, silenziose e arredate con gusto. Svegliarsi immersi in questa pace non ha prezzo. Personale gentilissimo.', 100, '...') }}
                        </p>
                    </div>
                </div>

                <!-- Slide 6 -->
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="avatar-container profilo-6">
                            A <div class="google-icon">G</div>
                        </div>
                        <div class="reviewer-name scritta_verde_scuro">Alessia Lizzio</div>
                        <div class="review-date">14-09-2025</div>
                        <div class="stars">★★★★★ <small>✔</small></div>
                        <p class="review-text scritta_verde_scuro">
                            {{ Str::limit('Ho festeggiato qui i miei 18 anni ed è stato tutto perfetto! Musica, cibo ottimo e un’organizzazione impeccabile che ha reso la festa magica.', 100, '...') }}
                        </p>
                    </div>
                </div>

                <!-- Slide 7 -->
                <div class="swiper-slide">
                    <div class="review-card">
                        <div class="avatar-container profilo-7">
                            F <div class="google-icon">G</div>
                        </div>
                        <div class="reviewer-name scritta_verde_scuro">Federica & Marco</div>
                        <div class="review-date">10-02-2025</div>
                        <div class="stars">★★★★★ <small>✔</small></div>
                        <p class="review-text scritta_verde_scuro">
                            {{ Str::limit('Il giorno più bello della nostra vita reso perfetto da questa location da sogno. Gestione professionale e buffet di benvenuto infinito. Grazie di cuore!', 100, '...') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="swiper-button-next " id="button-next" data-aos="fade-left" data-aos-duration="1500"
            data-aos-once="true"> </div>
        <div class="swiper-button-prev" id="button-prev" data-aos="fade-right" data-aos-duration="1500"
            data-aos-once="true"></div>

        {{-- FINE CAROSELLO --}}
    </div>

</x-layout>
