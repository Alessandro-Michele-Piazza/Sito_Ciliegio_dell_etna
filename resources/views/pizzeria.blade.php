<x-layout title="Pizzeria">

    <x-header title="Pizzeria" />



    {{-- ELEMENTO GRAFICO SCARTATO MA CARINO --}}

    <div class="container-fluid g-0 section-camere-premium">
        <div class="row g-0">

            <!-- COLONNA SINISTRA: TESTI + FOTO PICCOLA -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-between p-4 p-md-5 border-divider ">

                <div class="content-text-top margin-left">
                    <!-- Sottotitolo con linea orizzontale -->
                    <div>
                        <img src="{{ asset('storage/media/agripizza.jpg') }}" alt="Agripizza" class="img-fluid mb-3 ">

                    </div>

                    <!-- Paragrafo Descrittivo -->
                    <p class="mb-0 scritta_verde_scuro mb-4">
                        Le nostre pizze sono preparate con ingredienti locali a km 0, cotte nel nostro forno a legna
                        utilizzando ricette tramandante da generazioni. Ogni impasto è lievitato naturalmente per
                        garantire
                        una qualità superiore e un sapore autentico della tradizione etnea.
                    </p>

                    <a href="{{ route('ristorante') }}" class="link-scopri">
                        <span>Vedi il nostro menù</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <!-- Immagine piccola in basso a sinistra -->
                <div class="mt-5  margin-left wrapper-img-small">
                    <img src="{{ asset('storage/media/pizza_3.jpg') }}" alt="Pizza Tradizionale"
                        class="img-small-camere shadow-sm ">
                </div>
            </div>

            <!-- COLONNA DESTRA: FOTO GRANDE -->
            <div class="col-12 col-md-6 p-4 p-md-5 d-flex align-items-center justify-content-center">
                <div class="wrapper-img-large margin-right">
                    <img src="{{ asset('storage/media/pizza_4.jpg') }}" alt="Pizzeria" class="img-large-camere shadow">
                </div>
            </div>

        </div>
    </div>

</x-layout>
