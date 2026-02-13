<x-layout title="Crea Nuovo Articolo">
    <x-header title="Nuovo Post" />

    <div class="container py-5 blog-create-content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- Pulsante per tornare indietro --}}
                <div class="mb-4">
                    <a href="{{ route('blog.index') }}" class="btn-modern-back">
                        <i class="fas fa-arrow-left me-1"></i> Torna alla lista
                    </a>
                </div>

                <div class="card shadow border-0">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h4 fw-bold mb-4 text-dark text-center">Inserisci i dettagli del post</h2>

                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf {{-- Obbligatorio per la sicurezza in Laravel --}}

                            {{-- Campo Titolo --}}
                            <div class="mb-4">
                                <label for="title" class="form-label fw-semibold">Titolo dell'Articolo</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}"
                                    placeholder="Es: La raccolta delle ciliegie dell'Etna 2026">

                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Campo Immagine --}}
                            <div class="mb-4">
                                <label for="image" class="form-label fw-semibold">Immagine di Copertina</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i
                                            class="fas fa-image text-muted"></i></span>
                                    <input type="file" name="image" id="image"
                                        class="form-control @error('image') is-invalid @enderror">
                                </div>
                                <div class="form-text mt-1 text-muted">
                                    Dimensioni consigliate: 1200x675px. Max 2MB (jpeg, png, jpg, webp).
                                </div>

                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Campo Tag --}}
                            <div class="mb-4">
                                <label for="tags" class="form-label fw-semibold">Tag (separati da virgola)</label>
                                <input type="text" name="tags" id="tags"
                                    class="form-control @error('tags') is-invalid @enderror"
                                    value="{{ old('tags') }}"
                                    placeholder="es: eventi, cucina, estate">
                                @error('tags')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Campo Contenuto --}}
                            <div class="mb-4">
                                <label for="content" class="form-label fw-semibold @error('content') text-danger @enderror">Contenuto dell'Articolo</label>
                                <textarea name="content" id="content" class="d-none">{{ old('content') }}</textarea>
                                <div id="blog-editor" class="blog-editor @error('content') is-invalid @enderror">
                                    <div id="content-editor" aria-label="Contenuto dell'articolo"></div>
                                </div>

                                @error('content')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Pulsante Invio --}}
                            <div class="d-grid mt-5">
                                <button type="submit" class="btn btn-success btn-lg shadow">
                                    <i class="fas fa-paper-plane me-2"></i> Pubblica Articolo
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                {{-- Nota informativa sul limite --}}
                <div class="text-center mt-4">
                    <p class="small text-muted">
                        <i class="fas fa-info-circle me-1"></i>
                        Ricorda: il sistema mantiene solo gli ultimi 100 post. La pubblicazione di questo post potrebbe
                        eliminare il più vecchio.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
