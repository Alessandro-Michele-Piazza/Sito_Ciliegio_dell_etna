<x-layout
    title="{{ __('ui.Wine_Tour') }} | Il Ciliegio dell'Etna"
    metaDescription="Wine tour e degustazioni: scopri i pacchetti e prenota la tua esperienza enogastronomica."
    ogTitle="Wine Tour | Il Ciliegio dell'Etna"
    ogDescription="Degustazioni e wine tour con pacchetti dedicati nel territorio dell'Etna."
    ogImage="{{ asset('storage/media/vino.webp') }}"
    canonical="{{ route('winetour') }}"
>
    <x-header title="{{ __('ui.Wine_Tour') }}" />

    <main class="wine-page">
        <section class="hero">
            <div class="hero-grid">
                <div>
                    <span class="sub-label scritta_verde_medio">{{ __('ui.Degustazioni_Sottotitolo') }}</span>
                    <h1 class="wine-title">
                        <span class="line-1">{{ __('ui.Degustazioni_H1_Line1') }}</span>
                        <span class="line-2">{{ __('ui.Degustazioni_H1_Line2') }}</span>
                    </h1>
                    <p class="lead scritta_verde_scuro">
                        {{ __('ui.Degustazioni_Lead') }}
                    </p>
                    <a class="btn btn-prenota" href="{{ route('contatti') }}">{{ __('ui.Contattaci') }}</a>
                </div>
                <img class="hero-img" src="{{ asset('storage/media/vino.webp') }}" alt="{{ __('ui.Degustazioni_Alt1') }}" />
            </div>
        </section>

        <section id="pacchetti" class="section">
            <div class="cards">
                <article class="card">
                    <span class="badge">{{ __('ui.Degustazione_A_Badge') }}</span>
                    <h3>{{ __('ui.Degustazione_A_Titolo') }}</h3>
                    <div class="price">€ 10,00</div>
                    <ul class="list">
                        <li>{{ __('ui.Degustazione_A_Item1') }}</li>
                        <li>{{ __('ui.Degustazione_A_Item2') }}</li>
                    </ul>
                </article>

                <article class="card">
                    <span class="badge">{{ __('ui.Degustazione_B_Badge') }}</span>
                    <h3>{{ __('ui.Degustazione_B_Titolo') }}</h3>
                    <div class="price">€ 15,00</div>
                    <ul class="list">
                        <li>{{ __('ui.Degustazione_B_Item1') }}</li>
                        <li>{{ __('ui.Degustazione_B_Item2') }}</li>
                        <li>{{ __('ui.Degustazione_B_Item3') }}</li>
                        <li>{{ __('ui.Degustazione_B_Item4') }}</li>
                        <li>{{ __('ui.Degustazione_B_Item5') }}</li>
                        <li>{{ __('ui.Degustazione_B_Item6') }}</li>
                    </ul>
                </article>

                <article class="card">
                    <span class="badge">{{ __('ui.Degustazione_C_Badge') }}</span>
                    <h3>{{ __('ui.Degustazione_C_Titolo') }}</h3>
                    <div class="price">€ 20,00</div>
                    <ul class="list">
                        <li>{{ __('ui.Degustazione_C_Item1') }}</li>
                        <li>{{ __('ui.Degustazione_C_Item2') }}</li>
                        <li>{{ __('ui.Degustazione_C_Item3') }}</li>
                        <li>{{ __('ui.Degustazione_C_Item4') }}</li>
                        <li>{{ __('ui.Degustazione_C_Item5') }}</li>
                        <li>{{ __('ui.Degustazione_C_Item6') }}</li>
                        <li>{{ __('ui.Degustazione_C_Item7') }}</li>
                        <li>{{ __('ui.Degustazione_C_Item8') }}</li>
                    </ul>
                </article>

                <article class="card">
                    <span class="badge">{{ __('ui.Degustazione_D_Badge') }}</span>
                    <h3>{{ __('ui.Degustazione_D_Titolo') }}</h3>
                    <div class="price">€ 30,00</div>
                    <ul class="list">
                        <li>{{ __('ui.Degustazione_D_Item1') }}</li>
                        <li>{{ __('ui.Degustazione_D_Item2') }}</li>
                        <li>{{ __('ui.Degustazione_D_Item3') }}</li>
                        <li>{{ __('ui.Degustazione_D_Item4') }}</li>
                        <li>{{ __('ui.Degustazione_D_Item5') }}</li>
                        <li>{{ __('ui.Degustazione_D_Item6') }}</li>
                        <li>{{ __('ui.Degustazione_D_Item7') }}</li>
                        <li>{{ __('ui.Degustazione_D_Item8') }}</li>
                    </ul>
                </article>
            </div>

            <div class="split wine-split">
                <img class="hero-img" src="{{ asset('storage/media/vino2.webp') }}" alt="{{ __('ui.Degustazioni_Alt2') }}" />
                <div>
                    <h2 class="scritta_verde_scuro">{{ __('ui.Degustazioni_Sezione_Titolo') }}</h2>
                    <p class="lead">
                        {{ __('ui.Degustazioni_Sezione_Lead') }}
                    </p>
                    <p class="note">{{ __('ui.Degustazioni_Nota') }}</p>
                </div>
            </div>
        </section>

        <footer class="wine-footer">
            {{ __('ui.Degustazioni_Footer') }}
        </footer>
    </main>
</x-layout>
