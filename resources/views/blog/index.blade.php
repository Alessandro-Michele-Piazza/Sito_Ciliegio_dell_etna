<x-layout title="Blog">
    <x-header title="Blog" />

    <div class="container py-5" id="blog-container-main">

        {{-- ── BARRA RICERCA + FILTRI ── --}}
        <div class="blog-toolbar">
            <form action="{{ route('blog.index') }}" method="GET" class="blog-search-wrapper">
                <div class="blog-search-box">
                    <i class="fas fa-search blog-search-icon"></i>
                    <input type="text" name="q" value="{{ $search ?? '' }}" class="blog-search-field"
                        placeholder="Cerca articoli..." aria-label="Cerca nel blog">
                    <button type="submit" class="blog-search-go">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
                <select name="year" class="blog-year-select" aria-label="Filtra per anno">
                    <option value="">Anno</option>
                    @if (!empty($years) && $years->isNotEmpty())
                        @foreach ($years as $yearItem)
                            <option value="{{ $yearItem }}" {{ ($year ?? '') == $yearItem ? 'selected' : '' }}>
                                {{ $yearItem }}
                            </option>
                        @endforeach
                    @endif
                </select>
                @if (!empty($tag))
                    <input type="hidden" name="tag" value="{{ $tag }}">
                @endif
            </form>

            @if (!empty($tags) && $tags->isNotEmpty())
                <div class="blog-tag-bar">
                    <a href="{{ route('blog.index', array_filter(['q' => $search, 'year' => $year])) }}"
                        class="blog-pill{{ empty($tag) ? ' blog-pill--active' : '' }}">
                        Tutti
                    </a>
                    @foreach ($tags as $tagItem)
                        <a href="{{ route('blog.index', array_filter(['tag' => $tagItem->slug, 'q' => $search, 'year' => $year])) }}"
                            class="blog-pill{{ ($tag ?? '') === $tagItem->slug ? ' blog-pill--active' : '' }}">
                            {{ $tagItem->name }}
                        </a>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- ── TITOLO SEZIONE ── --}}
        <div class="blog-section-heading">
            <h2>{{ __('ui.Ultimi_Articoli') }}</h2>
            <span class="blog-heading-line"></span>
            @if (!empty($search) || !empty($tag) || !empty($year))
                <a href="{{ route('blog.index') }}" class="blog-reset-link">
                    <i class="fas fa-times me-1"></i>Cancella filtri
                </a>
            @endif
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-4" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- ── GRIGLIA CARD ── --}}
        <div class="row g-4">
            @forelse($posts as $post)
                <div class="col-md-6 col-lg-4">
                    <article class="blog-card">
                        <a href="{{ route('blog.show', $post->slug) }}" class="blog-card__img-link">
                            <div class="blog-card__img-wrap">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        alt="{{ $post->title }}" loading="lazy">
                                @else
                                    <img src="{{ asset('storage/media/placeholder.webp') }}"
                                        alt="Placeholder" loading="lazy">
                                @endif
                                <div class="blog-card__img-overlay"></div>
                            </div>
                        </a>

                        <div class="blog-card__body">
                            <div class="blog-card__meta">
                                <time datetime="{{ $post->created_at->toDateString() }}">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ $post->created_at->format('d M, Y') }}
                                </time>
                                @auth
                                    <div class="blog-card__actions">
                                        <a href="{{ route('blog.edit', $post->slug) }}"
                                            id="btn-edit-post-{{ $post->id }}"
                                            class="blog-card__action blog-card__action--edit"
                                            title="Modifica">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <form action="{{ route('blog.destroy', $post->slug) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                id="btn-delete-post-{{ $post->id }}"
                                                class="blog-card__action blog-card__action--delete"
                                                onclick="return confirm('Vuoi eliminare questo articolo?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                            </div>

                            @if ($post->tags->isNotEmpty())
                                <div class="blog-card__tags">
                                    @foreach ($post->tags as $postTag)
                                        <a href="{{ route('blog.index', array_filter(['tag' => $postTag->slug, 'q' => $search ?? '', 'year' => $year ?? ''])) }}"
                                            class="blog-chip">{{ $postTag->name }}</a>
                                    @endforeach
                                </div>
                            @endif

                            <h3 class="blog-card__title">
                                <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                            </h3>
                            <p class="blog-card__excerpt">
                                {!! Str::limit(strip_tags($post->content), 120) !!}
                            </p>
                        </div>

                        <div class="blog-card__footer">
                            <a href="{{ route('blog.show', $post->slug) }}" class="btn-peel-cherry">
                                <span class="read_more_button_blog">{{ __('ui.Leggi_di_più') }}</span>
                            </a>
                        </div>
                    </article>
                </div>
            @empty
                <div class="col-12">
                    <div class="blog-empty">
                        <i class="far fa-newspaper blog-empty__icon"></i>
                        <h3>Nessun articolo trovato</h3>
                        <p>Prova a modificare i filtri di ricerca o torna alla lista completa.</p>
                        <a href="{{ route('blog.index') }}" class="btn-peel-cherry">
                            <span class="read_more_button_blog">Vedi tutti gli articoli</span>
                        </a>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    @auth
        <div class="edit-fab-group">
            <a href="{{ route('blog.create') }}" id="btn-create-post" class="btn btn-success edit-fab shadow"
                title="Crea nuovo articolo" aria-label="Crea nuovo articolo">
                <i class="fas fa-plus me-2"></i>NUOVO ARTICOLO
            </a>
        </div>
    @endauth
</x-layout>
