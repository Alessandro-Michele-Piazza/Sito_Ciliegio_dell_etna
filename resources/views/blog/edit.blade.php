<x-layout title="Modifica Articolo">
    <x-header title="Modifica Post" />

    <div class="container py-5 blog-edit-content">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- Link rapido per tornare indietro --}}
                <div class="mb-4">
                    <a href="{{ route('blog.index') }}" class="btn-modern-back">
                        <i class="fas fa-chevron-left me-1"></i> Annulla e torna indietro
                    </a>
                </div>

                <div class="card shadow border-0">
                    <div class="card-body p-4 p-md-5">

                        {{-- Notiamo l'action che punta a 'update' e passa l'ID del blog --}}
                        <form action="{{ route('blog.update', $blog->slug) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT') {{-- Fondamentale per le rotte di aggiornamento --}}

                            <div class="mb-4">
                                <label for="title" class="form-label fw-bold">Titolo dell'Articolo</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title', $blog->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold d-block">Immagine Attuale</label>
                                {{-- Anteprima immagine esistente --}}
                                <div class="mb-3">
                                    @if ($blog->image)
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                            class="img-thumbnail img-fluid rounded shadow-sm w-25">
                                    @else
                                        <span class="badge bg-light text-secondary border p-2">Nessuna immagine
                                            caricata</span>
                                    @endif
                                </div>

                                <label for="image" class="form-label fw-bold">Sostituisci Immagine
                                    (Opzionale)</label>
                                <input type="file" name="image" id="image"
                                    class="form-control @error('image') is-invalid @enderror">
                                <div class="form-text text-muted">Carica un file solo se desideri cambiare quella
                                    attuale.</div>

                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Campo Tag --}}
                            @php
                                $tagsValue = $blog->tags->pluck('name')->implode(', ');
                            @endphp
                            <div class="mb-4">
                                <label for="tags" class="form-label fw-bold">Tag (separati da virgola)</label>
                                <input type="text" name="tags" id="tags"
                                    class="form-control @error('tags') is-invalid @enderror"
                                    value="{{ old('tags', $tagsValue) }}"
                                    placeholder="es: eventi, cucina, estate">
                                @error('tags')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="content" class="form-label fw-bold @error('content') text-danger @enderror">Contenuto</label>
                                <textarea name="content" id="content" class="d-none ">{{ old('content', $blog->content) }}</textarea>
                                <div class="blog-editor @error('content') is-invalid @enderror">
                                    <div id="content-editor" aria-label="Contenuto dell'articolo"></div>
                                </div>
                                @error('content')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2 mt-5">
                                <button type="submit" class="btn btn-warning btn-lg fw-bold shadow">
                                    <i class="fas fa-sync-alt me-2"></i> Aggiorna Articolo
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
