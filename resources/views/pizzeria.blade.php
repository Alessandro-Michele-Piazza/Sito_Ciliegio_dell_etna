<x-layout title="{{ __('ui.Pizzeria') }}">
    <x-header title="{{ __('ui.Pizzeria') }}" />



    {{-- ELEMENTO GRAFICO SCARTATO MA CARINO --}}

    <div class="container-fluid g-0 section-camere-premium">
        <div class="row g-0">

            <!-- COLONNA SINISTRA: TESTI + FOTO PICCOLA -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-between p-4 p-md-5 border-divider ">

                <div class="content-text-top margin-left">
                    <!-- Sottotitolo con linea orizzontale -->
                    <div>
                        <img src="{{ asset('storage/media/agripizza.webp') }}" alt="Agripizza" class="img-fluid mb-3 " loading="lazy">

                    </div>

                    <!-- Paragrafo Descrittivo -->
                    <p class="mb-0 scritta_verde_scuro mb-4">
                        {{ __('ui.Pizzeria_Descrizione') }}
                    </p>

                    <a href="{{ route('apri_menu_diretto') }}" class="link-scopri" target="_blank">
                        <span>{{ __('ui.Vedi_il_nostro_menu') }}</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>

                </div>

                <!-- Immagine piccola in basso a sinistra -->
                <div class="mt-5 mt-md-4 margin-left wrapper-img-small ">
                    <img src="{{ asset('storage/media/pizza_3.webp') }}" alt="Pizza Tradizionale" loading="lazy" class="img-small-camere img-fluid shadow-sm margin_right_pizza_piccola">
                </div>
            </div>

            <!-- COLONNA DESTRA: FOTO GRANDE -->
            <div class="col-12 col-md-6 p-4 p-md-5 d-flex align-items-center justify-content-center">
                <div class="wrapper-img-large margin-right">
                    <img src="{{ asset('storage/media/pizza_4.webp') }}" alt="Pizzeria" class="img-large-camere shadow" loading="lazy">
                </div>
            </div>

        </div>
    </div>

    {{-- Pulsante Modifica Flottante --}}
    @auth
        <a href="{{ route('menu_pizzeria_edit') }}" class="btn btn-warning edit-fab shadow">
            🔧 MODIFICA MENÙ
        </a>
    @endauth

</x-layout>
