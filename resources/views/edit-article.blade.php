<x-layout title="Modifica Menù">
    <x-header title="Pannello di Controllo Menù" />

    <div class="edit-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="edit-card">
                        <h2 class="mb-4 text-center">Aggiorna il Menù della Domenica</h2>

                        <form action="{{ route('menu.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <!-- Colonna Sinistra: Anteprima e Foto -->
                                <div class="col-md-5">
                                    <label class="form-label">Immagine Attuale</label>
                                    @if ($article->image)
                                        <img src="{{ asset('storage/' . $article->image) }}" class="preview-img"
                                            alt="Anteprima">
                                    @endif

                                    <label class="form-label">Sostituisci Immagine</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Formati: JPG, PNG. Max 2MB.</small>
                                </div>

                                <!-- Colonna Destra: Testi -->
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label class="form-label">Titolo del Menù</label>
                                        <textarea name="title" class="form-control" rows="2" required>{{ $article->title }}</textarea>
                                        <small class="text-muted">Premi INVIO per scrivere la data sotto il
                                            titolo.</small>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Chef / Autore</label>
                                        <input type="text" name="authors" class="form-control"
                                            value="{{ $article->authors }}">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Elenco Piatti e Descrizione</label>
                                        <textarea name="body" class="form-control" rows="8" required>{{ $article->body }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-center gap-3">
                                <button type="submit" class="btn btn-success btn-lg px-5 rounded-pill">
                                    🚀 PUBBLICA AGGIORNAMENTO
                                </button>
                                <a href="{{ route('menu_domenicale') }}"
                                    class="btn btn-outline-secondary btn-lg px-5 rounded-pill">
                                    Annulla
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
