<x-layout title="{{ __('ui.Eventi') }}"
    metaDescription="Organizza il tuo evento speciale al Ciliegio dell'Etna: lauree, compleanni, cerimonie e meeting aziendali con vista Etna."
    ogTitle="Eventi Privati | Il Ciliegio dell'Etna"
    ogDescription="Celebra i tuoi momenti più importanti in un agriturismo immerso nei vigneti dell'Etna. Spazi interni ed esterni per ogni tipo di evento."
    ogImage="{{ asset('storage/media/nozze_pc.webp') }}" canonical="{{ route('eventi') }}">

        {{-- HERO --}}
    <x-header title="{{ __('ui.Eventi') }}"/>

    {{-- INTRO – immagine + testo a scacchiera --}}
    <section id="ev-intro">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 order-lg-2" data-aos="fade-left" data-aos-duration="1000">
                    <span id="ev-intro-badge">{{ __('ui.ev_badge_intro') }}</span>
                    <h2 id="ev-intro-title">{{ __('ui.ev_intro_title') }}</h2>
                    <p id="ev-intro-text">{{ __('ui.ev_intro_text') }}</p>
                </div>
                <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-duration="1000">
                    <div id="ev-intro-img-wrapper">
                        <picture>
                            <source media="(max-width: 576px)" srcset="{{ asset('storage/media/laurea_pc.webp') }}">
                            <img id="ev-intro-img-main"
                                 src="{{ asset('storage/media/laurea_pc.webp') }}"
                                 alt="{{ __('ui.ev_img_alt_festa') }}"
                                 loading="lazy">
                        </picture>
                        <img id="ev-intro-img-accent"
                             src="{{ asset('storage/media/laurea_pc (2).webp') }}"
                             alt="{{ __('ui.ev_img_alt_dettaglio') }}"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CATEGORIE --}}
    <section id="ev-categories">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <h2 id="ev-categories-title">{{ __('ui.ev_categories_title') }}</h2>
                <hr id="ev-categories-divider">
            </div>

            <div class="row g-4">
                {{-- Lauree --}}
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                    <div id="ev-card-lauree">
                        <div id="ev-icon-lauree"><i class="fa-solid fa-graduation-cap"></i></div>
                        <h3 id="ev-cardtitle-lauree">{{ __('ui.ev_card_lauree') }}</h3>
                        <p id="ev-cardtext-lauree">{{ __('ui.ev_card_lauree_desc') }}</p>
                    </div>
                </div>

                {{-- Compleanni --}}
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                    <div id="ev-card-compleanni">
                        <div id="ev-icon-compleanni"><i class="fa-solid fa-cake-candles"></i></div>
                        <h3 id="ev-cardtitle-compleanni">{{ __('ui.ev_card_compleanni') }}</h3>
                        <p id="ev-cardtext-compleanni">{{ __('ui.ev_card_compleanni_desc') }}</p>
                    </div>
                </div>

                {{-- Cerimonie --}}
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                    <div id="ev-card-cerimonie">
                        <div id="ev-icon-cerimonie"><i class="fa-solid fa-dove"></i></div>
                        <h3 id="ev-cardtitle-cerimonie">{{ __('ui.ev_card_cerimonie') }}</h3>
                        <p id="ev-cardtext-cerimonie">{{ __('ui.ev_card_cerimonie_desc') }}</p>
                    </div>
                </div>

                {{-- Meeting --}}
                <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="400">
                    <div id="ev-card-meeting">
                        <div id="ev-icon-meeting"><i class="fa-solid fa-briefcase"></i></div>
                        <h3 id="ev-cardtitle-meeting">{{ __('ui.ev_card_meeting') }}</h3>
                        <p id="ev-cardtext-meeting">{{ __('ui.ev_card_meeting_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- GALLERIA SCACCHIERA – testo + immagine --}}
    <section id="ev-gallery">
        <div class="container-fluid p-0">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <picture>
                        <source media="(max-width: 576px)" srcset="{{ asset('storage/media/18°compl_pc.webp') }}">
                        <img id="ev-gallery-img"
                             src="{{ asset('storage/media/18°compl_pc.webp') }}"
                             alt="{{ __('ui.ev_img_alt_location') }}"
                             loading="lazy">
                    </picture>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-center" data-aos="fade-left" data-aos-duration="1000">
                    <div id="ev-gallery-text">
                        <span id="ev-gallery-badge">{{ __('ui.ev_gallery_badge') }}</span>
                        <h2 id="ev-gallery-title">{{ __('ui.ev_gallery_title') }}</h2>
                        <p id="ev-gallery-desc">{{ __('ui.ev_gallery_desc') }}</p>
                        <ul id="ev-features-list">
                            <li><i class="fa-solid fa-check"></i> {{ __('ui.ev_feature_1') }}</li>
                            <li><i class="fa-solid fa-check"></i> {{ __('ui.ev_feature_2') }}</li>
                            <li><i class="fa-solid fa-check"></i> {{ __('ui.ev_feature_3') }}</li>
                            <li><i class="fa-solid fa-check"></i> {{ __('ui.ev_feature_4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section id="ev-cta">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h2 id="ev-cta-title">{{ __('ui.ev_cta_title') }}</h2>
            <p id="ev-cta-subtitle">{{ __('ui.ev_cta_subtitle') }}</p>
            <a id="ev-cta-btn" href="{{ route('contatti') }}">{{ __('ui.ev_cta_btn') }}</a>
        </div>
    </section>

</x-layout>
