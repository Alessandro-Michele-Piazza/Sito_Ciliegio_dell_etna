<x-layout title="Menù Domenicale">

    <style>
        /* Contenitore principale della "Carta Menù" */
        
    </style>

    <x-header title="Tradizione ed Eleganza" />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <div class="menu-wrapper">
                    <div class="row g-0"> {{-- g-0 toglie lo spazio tra le colonne --}}

                        <!-- COLONNA SINISTRA: IMMAGINE -->
                        <div class="col-md-6 menu-image-side"
                            style="background-image: url('{{ $article->image ? asset('storage/' . $article->image) : 'https://via.placeholder.com/800x1000?text=Il+Ciliegio+dell+Etna' }}');">
                        </div>

                        <!-- COLONNA DESTRA: CONTENUTO -->
                        <div class="col-md-6 menu-content-side">
                            <div class="text-center">
                                <h1 class="menu-title">{{ $article->title }}</h1>

                              

                                <div class="menu-body">
                                    {{ $article->body }}
                                </div>

                                <div class="mt-5 pt-4 border-top">
                                    <p class="text-muted italic small">
                                        🍃 Prodotti freschi della nostra terra siciliana 🍃
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Tasto Modifica (visibile solo agli admin) --}}
    @auth
        <a href="{{ route('menu.edit') }}" class="btn btn-warning edit-fab shadow">
            🔧 MODIFICA MENÙ
        </a>
    @endauth

</x-layout>
