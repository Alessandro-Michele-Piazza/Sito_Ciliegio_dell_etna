<x-layout title="{{ __('ui.Ristorazione') }}"
    metaDescription="Ristorante e Pizzeria Il Ciliegio dell'Etna: cucina siciliana autentica, pizze a lunga lievitazione e ingredienti a km 0."
    ogTitle="Ristorante & Pizzeria | Il Ciliegio dell'Etna"
    ogDescription="Sapori autentici della Sicilia: ristorante con piatti tipici e pizzeria con impasti tradizionali presso Il Ciliegio dell'Etna."
    ogImage="{{ asset('storage/media/foto(3).webp') }}" canonical="{{ route('ristorazione') }}">

    <x-header title="{{ __('ui.Ristorazione') }}" />

    {{-- === SEZIONE RISTORANTE === --}}
    <section class="riz-section">
        <div class="container-fluid g-0">
            <div class="row g-0 align-items-stretch">

                {{-- Colonna testo ristorante --}}
                <div class="col-12 col-lg-6 d-flex align-items-center order-2 order-lg-1">
                    <div class="riz-text-block riz-text-left">
                        <div class="riz-badge-line">
                            <span class="riz-badge">{{ __('ui.Il_Nostro_Ristorante') }}</span>
                        </div>
                        <h2 class="riz-title">
                            {{ __('ui.Sapori') }}
                            <span class="scritta_verde_medio">{{ __('ui.Autentici') }}</span><br>
                            {{ __('ui.Della_Sicilia') }}
                        </h2>
                        <p class="riz-description">
                            {{ __('ui.descrizione_ristorante') }}
                        </p>
                        <a href="https://pro.pns.sm/3sshe7v" class="link-scopri">
                            <span>{{ __('ui.Prenota_il_tuo_tavolo') }}</span>
                            <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                {{-- Colonna immagini ristorante --}}
                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <div class="riz-img-stack">
                        <div class="riz-img-main">
                            <img src="{{ asset('storage/media/foto(3).webp') }}" alt="{{ __('ui.Ristorante') }}"
                                class="riz-img shadow" loading="lazy">
                        </div>
                        <div class="riz-img-accent">
                            <img src="{{ asset('storage/media/foto(6).webp') }}" alt="{{ __('ui.Piatti_Tipici') }}"
                                class="riz-img shadow-sm" loading="lazy">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- === DIVISORE DECORATIVO === --}}
    <div class="riz-divider-section">
        <div class="container text-center">
            <div class="riz-divider-line"></div>
            <span class="riz-divider-icon">
                <i class="fas fa-utensils"></i>
            </span>
            <div class="riz-divider-line"></div>
        </div>
    </div>

    {{-- === SEZIONE PIZZERIA === --}}
    <section class="riz-section riz-section-alt">
        <div class="container-fluid g-0">
            <div class="row g-0 align-items-stretch">

                {{-- Colonna immagini pizzeria --}}
                <div class="col-12 col-lg-6">
                    <div class="riz-img-stack riz-img-stack-reverse">
                        <div class="riz-img-main">
                            <img src="{{ asset('storage/media/pizza_4.webp') }}" alt="{{ __('ui.Pizzeria') }}"
                                class="riz-img shadow" loading="lazy">
                        </div>
                        <div class="riz-img-accent riz-img-accent-right">
                            <img src="{{ asset('storage/media/pizza_3.webp') }}"
                                alt="{{ __('ui.ristorazione_pizza_tradizionale') }}" class="riz-img shadow-sm"
                                loading="lazy">
                        </div>
                    </div>
                </div>

                {{-- Colonna testo pizzeria --}}
                <div class="col-12 col-lg-6 d-flex align-items-center">
                    <div class="riz-text-block riz-text-right">
                        <div class="riz-badge-line">
                            <img src="{{ asset('storage/media/agripizza.webp') }}" alt="Agripizza"
                                class="riz-agripizza-logo" loading="lazy">
                        </div>
                        <h2 class="riz-title">
                            {{ __('ui.ristorazione_pizzeria_titolo_1') }}
                            <span class="scritta_verde_medio">{{ __('ui.ristorazione_pizzeria_titolo_2') }}</span>
                        </h2>
                        <p class="riz-description">
                            {{ __('ui.Pizzeria_Descrizione') }}
                        </p>
                        <div class="d-flex flex-wrap gap-3 align-items-center">
                            <a href="{{ route('apri_menu_diretto') }}" class="link-scopri" target="_blank">
                                <span>{{ __('ui.Vedi_il_nostro_menu') }}</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- === SEZIONE CTA PRENOTAZIONE === --}}
    <section class="riz-cta-section">
        <div class="container text-center">
            <h3 class="riz-cta-title">{{ __('ui.ristorazione_cta_titolo') }}</h3>
            <p class="riz-cta-subtitle">{{ __('ui.ristorazione_cta_sottotitolo') }}</p>
            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <a href="https://pro.pns.sm/3sshe7v" class="btn btn-prenota">
                    {{ __('ui.Prenota_il_tuo_tavolo') }}
                </a>
                <a href="{{ route('contatti') }}" class="riz-btn-outline py-0 d-flex align-items-center gap-2">
                    {{ __('ui.Contattaci') }}
                </a>
            </div>
        </div>
    </section>

    {{-- Pulsante Modifica Flottante --}}
    @auth
        <a href="{{ route('menu_pizzeria_edit') }}" class="btn btn-warning edit-fab shadow">
            &#128295; MODIFICA MEN&Ugrave;
        </a>
    @endauth

</x-layout>
