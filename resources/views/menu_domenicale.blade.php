<x-layout title="{{ __('ui.Menu_domenicale') }}">
    <x-header title=" {{ __('ui.Menu_domenicale') }}  " />

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">

                <div class="menu-wrapper">
                    <div class="row g-4 menu-row">
                        <!-- CARD IMMAGINI: CAROSELLO -->
                        <div class="col-md-6">
                            <div class="menu-card menu-card-image ">
                                <div class="menu-image-side">
                                    <div id="carouselMenu" class="carousel slide" data-bs-ride="carousel"
                                        data-bs-interval="5000">

                                        <div class="carousel-inner">
                                            <!-- Prima Immagine -->
                                            <div class="carousel-item active">
                                                <img src="{{ $article->image ? asset('storage/' . $article->image) : 'https://via.placeholder.com/800x1000?text=Il+Ciliegio+dell+Etna' }}"
                                                    alt="{{ __('ui.Immagine_Menu_1') }}">
                                            </div>

                                            <!-- Seconda Immagine (Condizionale) -->
                                            @if ($article->image_secondary)
                                                <div class="carousel-item">
                                                    <img src="{{ asset('storage/' . $article->image_secondary) }}"
                                                        alt="{{ __('ui.Immagine_Menu_2') }}">
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Indicatori -->
                                        @if ($article->image_secondary)
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselMenu" data-bs-slide-to="0"
                                                    class="active" aria-current="true"
                                                    aria-label="{{ __('ui.Immagine_Menu_1') }}"></button>
                                                <button type="button" data-bs-target="#carouselMenu" data-bs-slide-to="1"
                                                    aria-label="{{ __('ui.Immagine_Menu_2') }}"></button>
                                            </div>

                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselMenu" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">{{ __('ui.Precedente') }}</span>
                                            </button>
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carouselMenu" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">{{ __('ui.Successiva') }}</span>
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- CARD TESTO: CONTENUTO -->
                        <div class="col-md-6 ">
                            <div class="menu-card menu-card-content ">
                                <div class="menu-content-side ">
                                    <div class="menu-content-inner   ">
                                        <div class="menu-badge ">
                                            🍽️ {{ __('ui.Menu_domenicale') }}
                                        </div>
                                        <h1 class="menu-title">{!! nl2br(e($article->title)) !!}</h1>
                                        <div class="menu-divider "></div>
                                        <div id="menu-body" class="menu-body text-center scritta_verde_scuro">
                                            {!! $article->body !!}
                                        </div>

                                        <div class="menu-footer">
                                            <p>
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
        </div>
    </div>

    @auth
        <a href="{{ route('menu.edit') }}" class="btn btn-warning edit-fab shadow">
            🔧 MODIFICA MENÙ
        </a>
    @endauth
</x-layout>
