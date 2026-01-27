<x-layout title="Menù Domenicale">
    <x-header title=" {{ __('ui.Menu_domenicale') }}  " />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <div class="menu-wrapper">
                    <div class="row g-0">
                        <!-- COLONNA SINISTRA: IMMAGINE (Senza stile in linea) -->
                        <div class="col-md-6 menu-image-side">
                            <img src="{{ $article->image ? asset('storage/' . $article->image) : 'https://via.placeholder.com/800x1000?text=Il+Ciliegio+dell+Etna' }}"
                                alt="Immagine Menù Domenicale">
                        </div>

                        <!-- COLONNA DESTRA: CONTENUTO -->
                        <div class="col-md-6 menu-content-side">
                            <div class="text-center">
                                <h1 class="menu-title">{!! nl2br(e($article->title)) !!}</h1>
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

    @auth
        <a href="{{ route('menu.edit') }}" class="btn btn-warning edit-fab shadow">
            🔧 MODIFICA MENÙ
        </a>
    @endauth
</x-layout>
