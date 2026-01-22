<x-layout title="stanze">

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
                    <h2 class="fw-bold mb-3">Camere Matrimoniali</h2>
                    <div class="divider-short mb-4 mt-0"></div>
                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic"> Un nido di pace
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        Le nostre camere matrimoniali nascono dal sapiente recupero degli spazi storici della tenuta,
                        fondendo l'estetica del design rurale siciliano con i più alti standard di comfort moderno.
                        Ogni ambiente è un rifugio esclusivo, pensato per chi desidera un soggiorno rigenerante
                        circondato dalla natura incontaminata del vulcano.
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-snowflake scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Aria Condizionata</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wifi scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Wi-Fi Free</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-tv scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold"> TV</span>
                        </div>

                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-shower scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Bagno Privato</span>
                        </div>

                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-mug-hot scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Bollitore in stanza</span>
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

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white py-5 px-4 p-md-5">
                <div>
                    <h2 class="fw-bold mb-3">Camere Triple Superior</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        Ampiezza e comfort per i vostri momenti condivisi.
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                       Le nostre camere triple sono ideali per famiglie e piccoli gruppi che non vogliono rinunciare allo stile. Ogni camera è dotata di un letto matrimoniale e un letto singolo, offrendo il giusto equilibrio tra privacy e convivialità. Gli spazi ben distribuiti e l’uso di materiali naturali creano un ambiente accogliente, perfetto per rigenerarsi dopo un’escursione sui sentieri dell’Etna.
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-snowflake scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Aria Condizionata</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wifi scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Wi-Fi Free</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-tv scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Smart TV</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-mug-hot scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Bollitore in stanza</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wheelchair scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Accesso Disabili</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-shower scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Bagno Privato</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 h-scacchiera">
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
                    <h2 class="fw-bold mb-3">Quadruple Family Suite</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio d-block mb-2 fst-italic">
                        Spazio e armonia per i vostri momenti più preziosi.
                    </span>

                    <p class="descrizione-scacchiera mb-4">
                        Pensate per famiglie o gruppi di amici, le nostre camere quadruple bilocali offrono ambienti ampi e confortevoli.
                        La camera è climatizzata, dotata di due televisori, un letto matrimoniale e due letti singoli, con una piacevole vista mare. Il design richiama i colori e i materiali del territorio etneo, garantendo a ogni ospite il proprio spazio di benessere, in un’atmosfera accogliente e conviviale.
                    </p>

                    <div class="row g-3 mt-2">
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-snowflake scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Aria Condizionata</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wifi scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Wi-Fi Free</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-tv scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Smart TV</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-mug-hot scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Bollitore in stanza</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-wheelchair scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Accesso Disabili</span>
                        </div>
                        <div class="col-6 col-sm-4 d-flex align-items-center">
                            <i class="fas fa-shower scritta_verde_medio me-2"></i>
                            <span class="small fw-semibold">Bagno Privato</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




</x-layout>

