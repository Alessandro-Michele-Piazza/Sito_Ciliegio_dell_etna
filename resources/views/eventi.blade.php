<x-layout
    title="{{ __('ui.Eventi') }}"
    metaDescription="Eventi, cerimonie e momenti speciali a Il Ciliegio dell'Etna."
    ogTitle="{{ __('ui.Eventi') }} | Il Ciliegio dell'Etna"
    ogDescription="Scopri la nostra pagina eventi e personalizza i contenuti in base alle tue esigenze."
    ogImage="{{ Vite::asset('resources/images/ciliegio_esterno.webp') }}"
    canonical="{{ route('eventi') }}"
>
    <x-header title="{{ __('ui.Eventi') }}" />

    <section class="container section-mission py-5" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center">
                <span class="sub-label scritta_rossa">{{ __('ui.Eventi') }}</span>
                <h2 class="titolo-mission scritta_verde_scuro mt-2">{{ __('ui.Eventi') }}</h2>
                <div class="divider-short mx-auto"></div>
                <p class="descrizione-mission mt-4">
                    Questa è la pagina Eventi. Da ora in poi puoi personalizzare tutto il contenuto modificando solo questa vista:
                    <strong class="scritta_verde_medio">resources/views/eventi.blade.php</strong>
                </p>
            </div>
        </div>
    </section>
</x-layout>
