<x-layout title=" {{ __('ui.Il_Ristorante') }} ">

    <x-header title=" {{ __('ui.Il_Ristorante') }} " />

    <div class="container-fluid g-0 section-camere-premium">
        <div class="row g-0">

            <!-- COLONNA SINISTRA: TESTI + FOTO PICCOLA -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-between p-4 p-md-5 border-divider ">

                <div class="content-text-top margin-left">
                    <!-- Sottotitolo con linea orizzontale -->
                    <div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="line-horizontal me-3"></div>
                            <h5 class="m-0 text-uppercase fw-light" style="letter-spacing: 3px;">{{ __('ui.Il_Nostro_Ristorante') }}</h5>
                        </div>

                        <!-- Titolo Principale -->
                        <h2 class="display-5 mb-4">
                            {{ __('ui.Sapori') }} <span class="scritta_verde_medio"> {{ __('ui.Autentici') }} </span> <br> {{ __('ui.Della_Sicilia') }}
                        </h2>
                    </div>

                    <!-- Paragrafo Descrittivo -->
                    <p class="mb-0 scritta_verde_scuro mb-4">
                        {{__('ui.descrizione_ristorante')}}
                    </p>

                    <a href=" " class="link-scopri">
                        <span>{{ __('ui.Vedi_il_nostro_menu') }}</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <!-- Immagine piccola in basso a sinistra -->
                <div class="mt-5 mt-md-4 margin-left wrapper-img-small ">
                    <img src="{{ asset('storage/media/foto(6).jpg') }}" alt="Dettagli Ristorante"
                        class="img-small-camere img-fluid shadow-sm margin_right_pizza_piccola">
                </div>
            </div>

            <!-- COLONNA DESTRA: FOTO GRANDE -->
            <div class="col-12 col-md-6 p-4 p-md-5 d-flex align-items-center justify-content-center">
                <div class="wrapper-img-large margin-right">
                    <img src="{{ asset('storage/media/foto(3).jpg') }}" alt="Ristorante" class="img-large-camere shadow">
                </div>
            </div>
        </div>
    </div>

</x-layout>
