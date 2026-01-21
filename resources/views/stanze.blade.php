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
                        Le nostre camere triple sono la soluzione ideale per famiglie o piccoli gruppi che non vogliono
                        rinunciare allo stile.
                        Progettate per offrire il massimo equilibrio tra privacy e convivialità, queste stanze si
                        distinguono per
                        l'uso di materiali naturali e una distribuzione degli spazi intelligente, perfetta per
                        rigenerarsi
                        dopo una giornata passata alla scoperta dei sentieri dell'Etna.
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
                        Pensate per accogliere famiglie o gruppi di amici, le nostre camere quadruple offrono
                        ambienti generosi dove la storicità della tenuta incontra un'abitabilità d'eccellenza.
                        Il design riflette i colori e i materiali del territorio etneo, garantendo a ogni
                        ospite il proprio spazio di benessere senza rinunciare alla calda atmosfera di
                        condivisione tipica della nostra terra.
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
                    </div>
                </div>
            </div>
        </div>
    </section>




</x-layout>


{{-- ELEMENTO GRAFICO SCARTATO MA CARINO --}}
{{-- 
<div class="container-fluid g-0 section-camere-premium">
        <div class="row g-0">

            <!-- COLONNA SINISTRA: TESTI + FOTO PICCOLA -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-between p-4 p-md-5 border-divider ">

                <div class="content-text-top margin-left">
                    <!-- Sottotitolo con linea orizzontale -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="line-horizontal me-3"></div>
                        <h5 class="m-0 text-uppercase fw-light" style="letter-spacing: 3px;">Camere</h5>
                    </div>

                    <!-- Titolo Principale -->
                    <h2 class="display-5 mb-4">
                        Un rifugio di charme tra <span class="scritta_verde_medio">tradizione</span> e design
                        contemporaneo
                    </h2>

                    <!-- Paragrafo Descrittivo -->
                    <p class="mb-0">
                        Le nostre camere, ricavate negli spazi storici della tenuta, fondono il fascino
                        del design rurale con i migliori comfort moderni. Ogni dettaglio è pensato per
                        offrirti un'esperienza di relax immersa nella quiete del Parco dell'Etna.
                    </p>
                </div>

                <!-- Immagine piccola in basso a sinistra -->
                <div class="mt-5  margin-left wrapper-img-small">
                    <img src="{{ asset('storage/media/foto(7).jpg') }}" alt="Dettaglio Camera"
                        class="img-small-camere shadow-sm">
                </div>
            </div>

            <!-- COLONNA DESTRA: FOTO GRANDE -->
            <div class="col-12 col-md-6 p-4 p-md-5 d-flex align-items-center justify-content-center">
                <div class="wrapper-img-large margin-right">
                    <img src="{{ asset('storage/media/foto(3).jpg') }}" alt="Stanza Principale"
                        class="img-large-camere shadow">
                </div>
            </div>

            

        </div>
    </div> --}}
