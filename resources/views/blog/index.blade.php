<x-layout title="blog">
    <x-header title="Blog" />

    <div class="container py-5" id="blog-container-main">

        <div class="d-flex justify-content-between align-items-center mb-5">
            <h2 class="h4 text-uppercase fw-bold m-0 text-dark"> {{ __('ui.Ultimi_Articoli') }}</h2>
            @auth
                <a href="{{ route('blog.create') }}" class="btn btn-primary px-4 shadow-sm">
                    <i class="fas fa-plus me-2"></i>Crea Nuovo
                </a>
            @endauth
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            @forelse($posts as $post)
                <div class="col-md-6 col-lg-4 mb-4">
                    <article class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-16x9">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top object-fit-cover"
                                    alt="{{ $post->title }}">
                            @else
                                <img src="https://via.placeholder.com/600x400?text=Ciliegio+dell+Etna"
                                    class="card-img-top object-fit-cover" alt="Placeholder">
                            @endif
                        </div>

                        <div class="card-body p-4">
                            <div class="small text-muted mb-2">
                                <i class="far fa-calendar-alt me-1"></i> {{ $post->created_at->format('d M, Y') }}
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-3">{{ $post->title }}</h5>
                            <p class="card-text text-secondary">
                                {{ Str::limit($post->content, 110) }}
                            </p>
                        </div>

                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-flex justify-content-between align-items-center">

                                {{-- NUOVO PULSANTE MODERNO CON EFFETTO PIEGA --}}
                                <a href="{{ route('blog.show', $post->id) }}" class="btn-peel-cherry">
                                    {{ __('ui.Leggi_di_più') }}
                                </a>

                                @auth
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('blog.edit', $post->id) }}"
                                            class="btn btn-light btn-sm text-warning shadow-sm border">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('blog.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-light btn-sm text-danger shadow-sm border"
                                                onclick="return confirm('Vuoi eliminare?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>

                    </article>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <h3 class="text-secondary">Nessun articolo trovato</h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
