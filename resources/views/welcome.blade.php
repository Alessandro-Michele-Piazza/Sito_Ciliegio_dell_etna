<x-layout title="Homepage">

    <div class="h-video">
        <video class="video_home px-0" autoplay loop muted playsinline>

            <source src="{{ asset('storage/media/video_ciliegio_home.mp4') }}" type="video/mp4">
        </video>
    </div>

    <section class="container section-mission py-5 " data-aos="fade-down" data-aos-duration="1500"
        data-aos-easing="ease-in-out" data-aos-once="true">

        <div class="row align-items-start">

            <div class="col-lg-5 col-md-12 mb-5 mb-lg-0">
                <span class="sub-label scritta_rossa">DAL 2005</span>
                <h2 class="titolo-mission">
                    Il Ciliegio dell'Etna <br>
                    <span class="testo-radici-sul-vulcano">Radici sul Vulcano</span>
                </h2>
                <div class="divider-short"></div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="content-wrapper">
                    <p class="descrizione-mission">
                        Il nostro <strong class="scritta_verde_medio">agriturismo a Giarre</strong> racconta una storia
                        di passione
                        legata
                        indissolubilmente al territorio dell’<strong class="scritta_verde_medio"> Etna</strong>. La
                        nostra missione è portarvi alla
                        scoperta della vera <strong class="scritta_verde_medio">cucina siciliana</strong>, fatta di
                        gesti antichi e ingredienti
                        purissimi.
                    </p>
                    <p class="descrizione-mission mt-4">
                        Nel nostro <strong class="scritta_verde_medio">ristorante</strong> e nella nostra <strong
                            class="scritta_verde_medio">pizzeria</strong>, i
                        <strong class="scritta_verde_medio">prodotti tipici</strong> a chilometro zero diventano i
                        protagonisti: dalle verdure del
                        nostro orto alle farine pregiate. Siamo la cornice ideale per celebrare i vostri
                        <strong class="scritta_verde_medio">banchetti</strong>, avvolti dal fascino unico della terra
                        vulcanica.
                    </p>
                    <a href="#" class="link-scopri mt-4">
                        <span>Contattaci</span>
                        <i class="fa-solid fa-arrow-right-long ms-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>


    {{-- INIZIO SCACCHIERA --}}

    {{-- INIZIO TERZA SECTION --}}

    <section class="container-fluid  div-scacchiera px-0 margin-top-scacchiera" data-aos="fade-right"
        data-aos-duration="1500" data-aos-easing="ease-in-out" data-aos-once="true">
        <div class="row  align-items-stretch ">

            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7  ">
                <div class="h-100 container-img-scacchiera">

                    {{-- IMMAGINE DA CAMBIARE  --}}

                    <img src="{{ asset('storage/media/ciliegio_esterno.jpg') }}"
                        alt="Immagine Pizzeria Ristorante al Ciliegio" class="img-fluid img-scacchiera-custom">
                </div>
            </div>

            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white">
                <div class="px-5 py-4">
                    <h2 class="fw-bold mb-3">Ristorante <span class="scritta_verde_medio">&</span> Pizzeria</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio">Tradizione Vulcanica</span>


                    <p class="descrizione-scacchiera mb-4">
                        Al Ciliegio, ogni piatto racconta la storia della nostra terra. Dalla selezione di farine per le
                        nostre pizze a lunga lievitazione, agli ingredienti freschi del territorio etneo, curiamo ogni
                        dettaglio per offrirvi un’esperienza autentica.
                    </p>

                    <p class="testo-radici-sul-vulcano mb-5 ">
                        "Il sapore della tradizione, servito con una vista indimenticabile."
                    </p>

                    <a href="#" class="link-scopri">
                        <span>Esplora la nostra cucina</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- FINE TERZA SECTION -->


    {{-- INIZIO QUARTA SECTION --}}

    <section class="container-fluid  div-scacchiera px-0 margin-top-scacchiera" data-aos="fade-left"
        data-aos-duration="1500" data-aos-easing="ease-in-out" data-aos-once="true">
        <div class="row  align-items-stretch ">



            <!-- COLONNA TESTO -->
            <div class="col-12 col-md-5 d-flex align-items-center bg-white ">
                <div class="px-5 py-4">
                    <h2 class="fw-bold mb-3">Comfort <span class="scritta_verde_medio">&</span> Relax</h2>
                    <div class="divider-short mb-4 mt-0"></div>

                    <span class="sub-label scritta_verde_medio ">Ospitalità Sicula</span>


                    <p class="descrizione-scacchiera mb-4">
                        Scegliere un soggiorno a Il Ciliegio dell'Etna significa immergersi nella quiete del Parco
                        dell'Etna. Le nostre camere, ricavate con cura negli spazi storici della tenuta, fondono il
                        fascino del design rurale con i migliori comfort moderni. Siamo il rifugio ideale per chi
                        desidera dormire
                        sull'Etna e rigenerarsi circondato dalla natura siciliana, lontano dal caos cittadino.
                    </p>

                    <p class="testo-radici-sul-vulcano mb-5">
                        "Svegliarsi con il respiro del vulcano e addormentarsi nel silenzio profondo di una dimora
                        storica"
                    </p>

                    <a href="#" class="link-scopri">
                        <span>Scopri le nostre camere</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

            <!-- COLONNA IMMAGINE -->
            <div class="col-12 col-md-7 px-0 ">
                <div class="h-100 container-img-scacchiera ">
                    {{-- IMMAGINE DA CAMBIARE  --}}

                    <img src="{{ asset('storage/media/ciliegio_esterno.jpg') }}" alt="Immagine camera d'albergo"
                        class="img-fluid img-scacchiera-custom">
                </div>
            </div>

        </div>
    </section>

    {{-- FINE QUARTA SECTION --}}


</x-layout>
