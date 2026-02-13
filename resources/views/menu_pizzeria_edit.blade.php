<x-layout title="EDIT MENU' PIZZERIA">
    <x-header title="EDIT MENU' PIZZERIA" />

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card pizzeria-card">
                    <div class="card-body p-4 p-md-5">

                        @if (session('success'))
                            <div class="alert alert-success border-0 shadow-sm mb-4">
                                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('menu_pizzeria_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="admin-upload-box mb-4">
                                <i class="fas fa-cloud-upload-alt fa-3x text-primary mb-3"></i>
                                <label for="pdf_file" class="form-label d-block fw-bold">Trascina o seleziona il nuovo
                                    PDF</label>
                                <input type="file" name="pdf_file" id="pdf_file"
                                    class="form-control @error('pdf_file') is-invalid @enderror"
                                    accept="application/pdf">

                                @error('pdf_file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <div class="form-text mt-3">
                                    Nota: Il caricamento eliminerà automaticamente il file precedente dal server.
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg rounded-pill shadow">
                                    <i class="fas fa-sync-alt me-2"></i>Pubblica Nuovo Menù
                                </button>
                            </div>
                        </form>

                        @if ($menu)
                            <div class="mt-5 pt-4 border-top">
                                <h6 class="text-uppercase fw-bold text-muted small mb-3">File attualmente online</h6>
                                <div class="d-flex align-items-center justify-content-between bg-light p-3 rounded">
                                    <span class="text-truncate">
                                        <i class="fas fa-file-pdf text-danger me-2"></i>
                                        {{ basename($menu->pdf_path) }}
                                    </span>
                                    <a href="{{ asset('storage/' . $menu->pdf_path) }}" target="_blank"
                                        class="btn btn-sm btn-outline-dark">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('ristorazione') }}" class="text-decoration-none text-muted">
                        <i class="fas fa-arrow-left me-1"></i> Torna alla pagina pubblica
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
