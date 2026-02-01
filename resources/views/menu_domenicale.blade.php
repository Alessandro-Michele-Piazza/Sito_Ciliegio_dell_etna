<x-layout title="Menù Domenicale">
    <x-header title=" {{ __('ui.Menu_domenicale') }}  " />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <div class="menu-wrapper">
                    <div class="row g-0">
                        <!-- COLONNA SINISTRA: CAROSELLO -->
                        <div class="col-md-6 menu-image-side">
                            <div id="carouselMenu" class="carousel slide h-100" data-bs-ride="carousel">

                                <div class="carousel-inner h-100">
                                    <!-- Prima Immagine -->
                                    <div class="carousel-item active h-100">
                                        <img src="{{ $article->image ? asset('storage/' . $article->image) : 'https://via.placeholder.com/800x1000?text=Il+Ciliegio+dell+Etna' }}"
                                            alt="Immagine Menù 1">
                                    </div>

                                    <!-- Seconda Immagine (Condizionale) -->
                                    @if ($article->image_secondary)
                                        <div class="carousel-item h-100">
                                            <img src="{{ asset('storage/' . $article->image_secondary) }}"
                                                alt="Immagine Menù 2">
                                        </div>
                                    @endif
                                </div>

                                <!-- Controlli Carosello: visibili solo se esiste la seconda immagine -->
                                @if ($article->image_secondary)
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMenu"
                                        data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Precedente</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselMenu"
                                        data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Successiva</span>
                                    </button>
                                @endif
                            </div>
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
