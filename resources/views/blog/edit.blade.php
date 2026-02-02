<x-layout title="Modifica Articolo">
    <x-header title="Modifica Post" />

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- Link rapido per tornare indietro --}}
                <div class="mb-4">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-secondary btn-sm shadow-sm">
                        <i class="fas fa-chevron-left me-1"></i> Annulla e torna indietro
                    </a>
                </div>

                <div class="card shadow border-0">
                    <div class="card-body p-4 p-md-5">

                        {{-- Notiamo l'action che punta a 'update' e passa l'ID del blog --}}
                        <form action="{{ route('blog.update', $blog->id) }}" method="POST"
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

                            <div class="mb-4">
                                <label for="content" class="form-label fw-bold">Contenuto</label>
                                <textarea name="content" id="content" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content', $blog->content) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
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
