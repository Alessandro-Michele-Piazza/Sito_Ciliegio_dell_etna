<x-layout
    title="{{ $post->title }}"
    metaDescription="{{ Str::limit(strip_tags($post->content ?? ''), 160, '') }}"
    ogTitle="{{ $post->title }}"
    ogDescription="{{ Str::limit(strip_tags($post->content ?? ''), 160, '') }}"
    ogImage="{{ $post->image ? asset('storage/' . $post->image) : Vite::asset('resources/images/logo_ciliegio.webp') }}"
    ogType="article"
    canonical="{{ route('blog.show', $post->slug) }}"
>
    @php
        $articleStructuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => route('blog.show', $post->slug),
            ],
            'headline' => $post->title,
            'image' => [$post->image ? asset('storage/' . $post->image) : Vite::asset('resources/images/logo_ciliegio.webp')],
            'datePublished' => optional($post->created_at)->toIso8601String(),
            'dateModified' => optional($post->updated_at)->toIso8601String(),
            'author' => [
                '@type' => 'Organization',
                'name' => "Il Ciliegio dell'Etna",
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => "Il Ciliegio dell'Etna",
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => Vite::asset('resources/images/logo_ciliegio.webp'),
                ],
            ],
            'description' => Str::limit(strip_tags($post->content ?? ''), 160, ''),
        ];
        $breadcrumbStructuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Blog',
                    'item' => route('blog.index'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => $post->title,
                    'item' => route('blog.show', $post->slug),
                ],
            ],
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($articleStructuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <script type="application/ld+json">
        {!! json_encode($breadcrumbStructuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <x-header title="{{ $post->title }}" />

    <div class="blog-show" id="blog-show-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-8">

                    {{-- ── BREADCRUMB / BACK ── --}}
                    <nav class="blog-show__nav">
                        <a href="{{ route('blog.index') }}" class="blog-show__back">
                            <i class="fas fa-arrow-left"></i>
                            <span>{{ __('ui.Torna_al_Blog') }}</span>
                        </a>
                    </nav>

                    <article class="blog-show__article">

                        {{-- ── HERO IMAGE ── --}}
                        <div class="blog-show__hero">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}"
                                    alt="{{ $post->title }}" loading="eager">
                            @else
                                <img src="{{ asset('storage/media/placeholder.webp') }}"
                                    alt="Placeholder" loading="eager">
                            @endif
                            <div class="blog-show__hero-fade"></div>
                        </div>

                        <div class="blog-show__content">

                            {{-- ── META BAR ── --}}
                            <div class="blog-show__meta">
                                <div class="blog-show__meta-left">
                                    <span class="blog-show__date">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ __('ui.Pubblicato_il') }} {{ $post->created_at->format('d/m/Y') }}
                                    </span>
                                    <span class="blog-show__reading">
                                        <i class="far fa-clock"></i>
                                        {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min {{ __('ui.Tempo_di_lettura') }}
                                    </span>
                                </div>
                            </div>

                            {{-- ── TAGS ── --}}
                            @if ($post->tags->isNotEmpty())
                                <div class="blog-show__tags">
                                    @foreach ($post->tags as $postTag)
                                        <a href="{{ route('blog.index', ['tag' => $postTag->slug]) }}"
                                            class="blog-show__tag">{{ $postTag->name }}</a>
                                    @endforeach
                                </div>
                            @endif

                            {{-- ── TITOLO ── --}}
                            <h1 class="blog-show__title">{{ html_entity_decode($post->title) }}</h1>

                            {{-- ── SEPARATORE ── --}}
                            <div class="blog-show__divider"></div>

                            {{-- ── CORPO ARTICOLO ── --}}
                            <div class="blog-show__body blog-post-content">
                                {!! $post->content !!}
                            </div>

                            {{-- ── SHARE + FOOTER ── --}}
                            <footer class="blog-show__footer">
                                <div class="blog-show__share">
                                    <span class="blog-show__share-label">Condividi</span>
                                    <div class="blog-show__share-icons">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                            target="_blank" rel="noopener noreferrer"
                                            class="blog-show__share-btn blog-show__share-btn--fb"
                                            title="Facebook">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text={{ urlencode($post->title . ' ' . url()->current()) }}"
                                            target="_blank" rel="noopener noreferrer"
                                            class="blog-show__share-btn blog-show__share-btn--wa"
                                            title="WhatsApp">
                                            <i class="fab fa-whatsapp"></i>
                                        </a>
                                        <a href="https://t.me/share/url?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}"
                                            target="_blank" rel="noopener noreferrer"
                                            class="blog-show__share-btn blog-show__share-btn--tg"
                                            title="Telegram">
                                            <i class="fab fa-telegram-plane"></i>
                                        </a>
                                    </div>
                                </div>

                                <a href="{{ route('blog.index') }}" class="blog-show__back blog-show__back--bottom">
                                    <i class="fas fa-arrow-left"></i>
                                    <span>{{ __('ui.Torna_al_Blog') }}</span>
                                </a>
                            </footer>

                        </div>
                    </article>

                </div>
            </div>
        </div>
    </div>

    {{-- ── FAB ADMIN ── --}}
    @auth
        <div id="blog-show-actions" class="edit-fab-group">
            <a href="{{ route('blog.edit', $post->slug) }}"
                id="btn-edit-post-{{ $post->id }}"
                class="btn btn-edit edit-fab shadow">
                <i class="fas fa-pen me-1"></i> Modifica
            </a>
            <form action="{{ route('blog.destroy', $post->slug) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit"
                    id="btn-delete-post-{{ $post->id }}"
                    class="btn btn-delete edit-fab shadow"
                    onclick="return confirm('Sei sicuro di voler eliminare questo articolo?')">
                    <i class="fas fa-trash-alt me-1"></i> Elimina
                </button>
            </form>
        </div>
    @endauth
</x-layout>
