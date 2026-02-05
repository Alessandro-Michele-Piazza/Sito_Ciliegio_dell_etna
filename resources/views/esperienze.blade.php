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
                        {{ __('ui.Sottotilo_Escursioni') }}
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        {{ __('ui.Escursioni_etna_descrizione') }}
                    </p>

                    <!-- SEZIONE ICONE DETTAGLI -->
                    <div class="d-flex flex-wrap gap-4 mt-4 pt-4">
                        <!-- Durata -->
                        <div class="d-flex align-items-center">
                            <i class="fa-regular fa-clock scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">Durata</small>
                                <span class="fw-bold">4/5h</span>
                            </div>
                        </div>

                        <!-- Difficoltà -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-mountain-sun scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">Difficoltà</small>
                                <span class="fw-bold">Media</span>
                            </div>
                        </div>

                        <!-- Attrezzatura -->
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-person-hiking scritta_verde_medio fs-4 me-2"></i>
                            <div>
                                <small class="text-muted d-block lh-1">Livello</small>
                                <span class="fw-bold">Turistico</span>
                            </div>
                        </div>
                    </div>
                    <!-- FINE SEZIONE ICONE -->

                </div>
            </div>
        </div>
    </section>

</x-layout>
