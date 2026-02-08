{{-- filepath: c:\Users\alexp\Sito_ciliegio_dell_etna_2026\resources\views\corso_pizzeria.blade.php --}}
<x-layout :title="__('ui.corso_pizzeria_title')">
    <x-header :title="__('ui.corso_pizzeria_title')" />

    {{-- Hero con Immagine --}}
    <section class="container py-4 py-lg-5">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <span class="badge rounded-pill bg-success-subtle text-success mb-3">{{ __('ui.corso_pizzeria_badge') }}</span>
                <h1 class="display-5 fw-bold mb-3">{{ __('ui.corso_pizzeria_h1') }}</h1>
                <p class="lead text-muted mb-4">
                    {{ __('ui.corso_pizzeria_lead') }}
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <div class="info-tile">
                        <i class="fa-solid fa-clock scritta_verde_medio"></i>
                        <div>
                            <h6 class="mb-1">{{ __('ui.corso_pizzeria_durata_label') }}</h6>
                            <p class="mb-0">{{ __('ui.corso_pizzeria_durata_value') }}</p>
                        </div>
                    </div>
                    <div class="info-tile">
                        <i class="fa-solid fa-tag scritta_verde_medio"></i>
                        <div>
                            <h6 class="mb-1">{{ __('ui.corso_pizzeria_costo_label') }}</h6>
                            <p class="mb-0"><strong>{{ __('ui.corso_pizzeria_costo_value') }}</strong></p>
                        </div>
                    </div>
                </div>
                 <a href="{{ route('contatti') }}" class="btn btn-prenota">
                    <i class="fa-solid fa-calendar-check me-2"></i> {{ __('ui.corso_pizzeria_prenota') }}
                </a>
            </div>

            <div class="col-lg-6">
                <img src="{{ asset('storage/media/pizza_3.webp') }}" 
                     alt="Corso di pizza" class="img-fluid rounded-3 shadow-sm">
            </div>
        </div>
    </section>

    {{-- Contenuti principali --}}
    <section class="container pb-5">
        <div class="row g-4 align-items-stretch">
            {{-- Card Programma --}}
            <div class="col-lg-5">
                <div class="card-corso p-4 p-lg-5 shadow-sm h-100">
                    <h3 class="h5 mb-3"><i class="fa-solid fa-list-check me-2"></i>{{ __('ui.corso_pizzeria_programma') }}</h3>
                    <ul class="corso-list">
                        <li>{{ __('ui.corso_pizzeria_programma_1') }}</li>
                        <li>{{ __('ui.corso_pizzeria_programma_2') }}</li>
                        <li>{{ __('ui.corso_pizzeria_programma_3') }}</li>
                        <li>{{ __('ui.corso_pizzeria_programma_4') }}</li>
                        <li>{{ __('ui.corso_pizzeria_programma_5') }}</li>
                        <li>{{ __('ui.corso_pizzeria_programma_6') }}</li>
                        <li>{{ __('ui.corso_pizzeria_programma_7') }}</li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card-corso p-4 p-lg-5 h-100 shadow-sm">
                    <h2 class="mb-3">{{ __('ui.corso_pizzeria_esperienza_title') }}</h2>
                    <p class="descrizione-mission">
                        {{ __('ui.corso_pizzeria_esperienza_text') }}
                    </p>

                    <div class="row g-3 mt-4">
                        <div class="col-md-4">
                            <div class="card p-3 border-0 bg-light h-100">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-seedling text-success"></i>
                                    <strong>{{ __('ui.corso_pizzeria_feature_1_title') }}</strong>
                                </div>
                                <p class="mb-0 text-muted">{{ __('ui.corso_pizzeria_feature_1_text') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 border-0 bg-light h-100">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-fire text-danger"></i>
                                    <strong>{{ __('ui.corso_pizzeria_feature_2_title') }}</strong>
                                </div>
                                <p class="mb-0 text-muted">{{ __('ui.corso_pizzeria_feature_2_text') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 border-0 bg-light h-100">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="fa-solid fa-hands text-primary"></i>
                                    <strong>{{ __('ui.corso_pizzeria_feature_3_title') }}</strong>
                                </div>
                                <p class="mb-0 text-muted">{{ __('ui.corso_pizzeria_feature_3_text') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sezione Ingredienti e Chef --}}
     <section class="container pb-5">
        <div class="row g-4">
            <div class="col-lg-8">
                 <div class="card-corso p-4 h-100 shadow-sm">
                    <h3 class="h5 mb-3"><i class="fa-solid fa-wheat-awn me-2"></i>{{ __('ui.corso_pizzeria_ingredienti') }}</h3>
                    <ul class="corso-list">
                        <li>{{ __('ui.corso_pizzeria_ingrediente_1') }}</li>
                        <li>{{ __('ui.corso_pizzeria_ingrediente_2') }}</li>
                        <li>{{ __('ui.corso_pizzeria_ingrediente_3') }}</li>
                        <li>{{ __('ui.corso_pizzeria_ingrediente_4') }}</li>
                        <li>{{ __('ui.corso_pizzeria_ingrediente_5') }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card-corso p-4 h-100 shadow-sm">
                    <h3 class="h5 mb-2"><i class="fa-solid fa-user me-2"></i>{{ __('ui.corso_pizzeria_chef_title') }}</h3>
                    <p class="mb-1">{{ __('ui.corso_pizzeria_chef_name') }}</p>
                    <p class="text-muted mb-0">{{ __('ui.corso_pizzeria_chef_note') }}</p>

                    <div id="prenota" class="mt-4 p-3 bg-light rounded">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <i class="fa-solid fa-ticket text-success"></i>
                            <strong>{{ __('ui.corso_pizzeria_prenotazioni_title') }}</strong>
                        </div>
                        <p class="mb-2 text-muted">{{ __('ui.corso_pizzeria_prenotazioni_text') }}</p>
                        <a href="{{ route('contatti') }}" class="btn btn-prenota w-100">
                            {{ __('ui.corso_pizzeria_contattaci') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>