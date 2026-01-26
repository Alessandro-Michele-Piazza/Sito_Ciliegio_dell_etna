<x-layout title="Modifica Menù">

    <x-header title="Modifica Menù" />
    <div class="container main-container">
        <div class="row align-items-start">

            <!-- Lato Immagine -->
            <div class="col-lg-6 img-container">
                @if ($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" class="img-floating" alt="Il Ciliegio">
                @else
                    <div class="img-floating d-flex align-items-center justify-content-center bg-secondary text-white">
                        Immagine Menù
                    </div>
                @endif
            </div>

            <!-- Lato Testo Menù -->
            <div class="col-lg-6">
                <div class="menu-card-floating">
                    <div class="chef-badge">Signature Menu</div>
                    <h1 class="menu-title px-3">{{ $article->title }}</h1>

                    <p class="text-muted mb-4">
                        Creato con passione dallo Chef <strong>{{ $article->authors }}</strong>
                    </p>

                    <div class="menu-items">
                        {{ $article->body }}
                    </div>

                    <div class="mt-5 text-center">
                        <img src="https://cdn-icons-png.flaticon.com/512/606/606338.png" width="40"
                            style="opacity: 0.2;" alt="divider">
                    </div>
                </div>
            </div>

        </div>
    </div>

    @auth
        <div class="admin-edit-btn">
            <a href="{{ route('menu.edit') }}" class="btn btn-dark shadow-lg border-0 px-4 py-2 rounded-pill">
                🔧 Modifica
            </a>
        </div>
    @endauth
</x-layout>
