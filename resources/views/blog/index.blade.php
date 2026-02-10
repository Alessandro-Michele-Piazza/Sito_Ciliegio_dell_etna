<x-layout title="Blog">
    <x-header title="Blog" />

    <div class="container py-5" id="blog-container-main">

        <div class="d-flex justify-content-between align-items-center mb-5">
            <h2 class="h4 text-uppercase fw-bold m-0 text-dark"> {{ __('ui.Ultimi_Articoli') }}</h2>
            @auth
                {{-- Pulsante flottante per creare un nuovo articolo --}}
                <div class="d-none d-lg-block">{{-- mantiene spazio su mobile per non rompere layout --}}</div>
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
                                <img src="{{ asset('storage/media/placeholder.webp') }}" class="card-img-top object-fit-cover" alt="Placeholder">
                            @endif
                        </div>

                        <div class="card-body p-4">
                            <div class="small text-muted mb-2">
                                <i class="far fa-calendar-alt me-1"></i> {{ $post->created_at->format('d M, Y') }}
                            </div>
                            <h5 class="card-title fw-bold text-dark mb-3">{{ $post->title }}</h5>
                            <p class="card-text text-secondary">
                                {{-- TODO: Controllare il metodo corretto per fare questo oppure prendere exerpt già dal controller --}}
                                {!! Str::limit(strip_tags($post->content), 110) !!}
                            </p>
                        </div>

                        <div class="card-footer bg-transparent border-0 p-4 pt-0">
                            <div class="d-flex justify-content-between align-items-center">

                                {{-- NUOVO PULSANTE MODERNO CON EFFETTO PIEGA --}}
                                <a href="{{ route('blog.show', $post->id) }}" class="btn-peel-cherry">
                                    <p class="read_more_button_blog">{{ __('ui.Leggi_di_più') }}</p>
                                    
                                </a>

                                @auth
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('blog.edit', $post->id) }}"
                                            id="btn-edit-post-{{ $post->id }}"
                                            class="btn btn-edit btn-sm shadow-sm border">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form action="{{ route('blog.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" id="btn-delete-post-{{ $post->id }}" class="btn btn-delete btn-sm shadow-sm border"
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
    @auth
        <div class="edit-fab-group">
            <a href="{{ route('blog.create') }}" id="btn-create-post" class="btn btn-primary edit-fab shadow" title="Crea nuovo articolo" aria-label="Crea nuovo articolo">
                <i class="fas fa-plus me-2"></i>NUOVO ARTICOLO
            </a>
        </div>
    @endauth
</x-layout>
