<x-layout title="{{ $post->title }}">
    {{-- Usiamo il titolo del post nell'header --}}
    <x-header title="{{ $post->title }}" />

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                {{-- Barra di navigazione interna --}}
                <div class="d-flex justify-content-between align-items-center mb-4">

                    <a href="{{ route('blog.index') }}" class="btn-modern-back">
                        <i class="fas fa-arrow-left me-2"></i>
                        {{ __('ui.Torna_al_Blog') }}

                    </a>

                    {{-- Mostriamo i controlli di gestione solo se l'utente è loggato con Fortify --}}
                    @auth
                        <div class="edit-fab-group">
                            <a href="{{ route('blog.edit', $post->id) }}" id="btn-edit-post-{{ $post->id }}" class="btn btn-edit edit-fab shadow">
                                <i class="fas fa-edit me-1"></i> Modifica
                            </a>

                            <form action="{{ route('blog.destroy', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="btn-delete-post-{{ $post->id }}" class="btn btn-delete edit-fab shadow"
                                    onclick="return confirm('Sei sicuro?')">
                                    <i class="fas fa-trash me-1"></i> Elimina
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>

                <article class="bg-white rounded shadow-sm overflow-hidden">

                    {{-- Immagine Copertina Full Width --}}
                    @if ($post->image)
                        <div class="ratio ratio-21x9">
                            <img src="{{ asset('storage/' . $post->image) }}" class="object-fit-cover w-100"
                                alt="{{ $post->title }}">
                        </div>
                    @else
                        <div class="ratio ratio-21x9">
                            <img src="{{ asset('storage/media/placeholder.webp') }}" class="object-fit-cover w-100" alt="Placeholder">
                        </div>
                    @endif

                    <div class="p-4 p-md-5">
                        {{-- Meta dati --}}
                        <div class="d-flex align-items-center mb-4 text-muted small">
                            <span class="me-3">
                                <i class="far fa-calendar-alt me-1"></i>
                                {{ __('ui.Pubblicato_il') }} {{ $post->created_at->format('d/m/Y') }}
                            </span>
                            <span >
                                <i class="far fa-clock me-1"></i>


                                {{ __('ui.Tempo_di_lettura') }} {{ ceil(str_word_count($post->content) / 200) }} min
                            </span>
                        </div>

                        {{-- Titolo --}}
                        <h1 class="display-5 fw-bold text-dark mb-4">{{ html_entity_decode($post->title) }}</h1>

                        {{-- Testo dell'articolo --}}
                        <div class="fs-5 lh-lg mb-5 blog-post-content">
                            {!! $post->content !!}
                        </div>

                        {{-- Social Share Funzionanti --}}
                        <div class="border-top pt-4 mt-5 d-flex align-items-center justify-content-between">

                            <div class="d-flex flex-column">
                                <p class="text-uppercase small fw-bold text-muted mb-3">Condividi questo articolo</p>
                                <div>
                                    <div class="d-flex gap-3 align-items-center">

                                        {{-- Condividi su Facebook --}}
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                            target="_blank" rel="noopener noreferrer"
                                            class="share-icon brand-facebook fs-4" title="Condividi su Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>

                                        {{-- Condividi su WhatsApp --}}
                                        <a href="https://api.whatsapp.com/send?text={{ urlencode('Guarda questo articolo: ' . $post->title . ' ' . url()->current()) }}"
                                            target="_blank" rel="noopener noreferrer"
                                            class="share-icon brand-whatsapp fs-4" title="Condividi su WhatsApp">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>

                                        {{-- Condividi su Telegram --}}
                                        <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode('Guarda questo articolo: ' . $post->title) }}"
                                            target="_blank" rel="noopener noreferrer"
                                            class="share-icon brand-telegram fs-4" title="Condividi su Telegram">
                                            <i class="fab fa-telegram"></i>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <a href="{{ route('blog.index') }}" class="btn-modern-back mt-4">
                                <i class="fas fa-arrow-left me-2"></i> Torna al Blog
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</x-layout>
