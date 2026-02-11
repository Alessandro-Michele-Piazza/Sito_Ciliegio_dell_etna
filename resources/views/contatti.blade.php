<x-layout title="{{ __('ui.Contatti') }}">

    @php
        $structuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => "Il Ciliegio dell'Etna",
            'url' => url('/'),
            'image' => [asset('images/logo_ciliegio.webp')],
            'logo' => asset('images/logo_ciliegio.webp'),
            'telephone' => '+39095969109',
            'email' => 'info@ilciliegiodelletna.it',
            'contactPoint' => [
                [
                    '@type' => 'ContactPoint',
                    'telephone' => '+39095969109',
                    'contactType' => 'customer service',
                ],
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Via Filippo Meda, 88',
                'addressLocality' => 'Giarre',
                'addressRegion' => 'CT',
                'postalCode' => '95014',
                'addressCountry' => 'IT',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 37.7451354,
                'longitude' => 15.1634449,
            ],
            'servesCuisine' => ['Italian', 'Sicilian', 'Pizza'],
        ];
    @endphp
    <script type="application/ld+json">
        {!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>


    <!-- COLONNA IMMAGINE PARALLASSE -->


    <!-- HERO SECTION -->


    <x-header title="{{ __('ui.Contatti') }}" />
    @if (session('success'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa-solid fa-circle-check me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <!-- INFO & FORM SECTION -->
    <section class="container py-5">
        <div class="row g-5">

            <!-- INFO BOXES -->
            <div class="col-lg-5" data-aos="fade-right">
                <h2 class="titolo-mission scritta_verde_scuro mb-4"> {{ __('ui.Siamo_qui_per_te') }}</h2>
                <div class="divider-short mb-5"></div>

                <div class="contact-card mb-4">
                    <div class="contact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-content ">
                        <h5>{{ __('ui.Dove_Siamo') }}</h5>
                        <p>Via Filippo Meda, 88 - Giarre (CT)</p>
                    </div>
                </div>

                <div class="contact-card mb-4">
                    <div class="contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-content">
                        <h5>{{ __('ui.Chiamaci') }}</h5>
                        <p>+39 095 969 109 <br> +39 391 168 6078</p>
                    </div>
                </div>

                <div class="contact-card mb-4">
                    <div class="contact-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="contact-content">
                        <h5>Email</h5>
                        <p>info@ilciliegiodelletna.it</p>
                    </div>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fa-solid fa-clock"></i>
                    </div>
                    <div class="contact-content">
                        <h5>{{ __('ui.Orari_contatti') }}</h5>
                        <p>{{ __('ui.Aperto_tutti_i_giorni') }} <br>({{ __('ui.Martedì_chiuso') }})</p>
                    </div>
                </div>
            </div>

            <!-- FORM BOX -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="form-wrapper">
                    <h3 class="fw-bold scritta_verde_scuro mb-4">{{ __('ui.Inviaci_un_messaggio') }}</h3>
                    <form id="contact-form" action="{{ route('contact.send') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- NOME COMPLETO -->
                            <div class="col-md-6 mb-4">
                                <label class="custom-label">{{ __('ui.Nome_Completo') }}</label>
                                <input type="text" name="name"
                                    class="form-control contact-input @error('name') is-invalid @enderror"
                                    placeholder="Mario Rossi" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="custom-label">{{ __('ui.Indirizzo_Email') }}</label>
                                <input type="email" name="email"
                                    class="form-control contact-input @error('email') is-invalid @enderror"
                                    placeholder=" {{ __('ui.email_esempio') }} " value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- OGGETTO -->
                        <div class="mb-4">
                            <label class="custom-label">{{ __('ui.Oggetto') }}</label>
                            <select name="subject"
                                class="form-select contact-input @error('subject') is-invalid @enderror">
                                <option selected disabled value=""> {{ __('ui.Seleziona_un_opzione') }} </option>
                                <option value="Prenotazione Tavolo"
                                    {{ old('subject') == 'Prenotazione Tavolo' ? 'selected' : '' }}>
                                    {{ __('ui.Prenotazione_Tavolo') }}
                                </option>
                                <option value="Soggiorno Camere"
                                    {{ old('subject') == 'Soggiorno Camere' ? 'selected' : '' }}>
                                    {{ __('ui.Soggiorno_Camere') }}
                                </option>
                                <option value="Corsi di cucina"
                                    {{ old('subject') == 'Corsi di cucina' ? 'selected' : '' }}>
                                    {{ __('ui.Corsi_di_cucina') }}
                                </option>
                                <option value="Eventi Speciali"
                                    {{ old('subject') == 'Eventi Speciali' ? 'selected' : '' }}>
                                    {{ __('ui.Eventi_Speciali') }}</option>
                                <option value="Lavora con noi" {{ old('subject') == 'Lavora con noi' ? 'selected' : '' }}>
                                    {{ __('ui.Lavora_con_noi') }}</option>
                                <option value="Altro" {{ old('subject') == 'Altro' ? 'selected' : '' }}>
                                    {{ __('ui.Altro') }}</option>
                            </select>
                            @error('subject')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- MESSAGGIO -->
                        <div class="mb-4">
                            <label class="custom-label">{{ __('ui.Il_tuo_Messaggio') }}</label>
                            <textarea name="message" class="form-control contact-input @error('message') is-invalid @enderror" rows="5"
                                placeholder=" {{ __('ui.Scrivi_qui') }} ">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- CURRICULUM (PDF) -->
                        <div class="mb-4">
                            <label class="custom-label">{{ __('ui.Allega_CV') }}</label>
                            <input type="file" name="cv" accept="application/pdf"
                                class="form-control contact-input @error('cv') is-invalid @enderror">
                            <div class="form-text">{{ __('ui.Solo_PDF') }}</div>
                            @error('cv')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                            @error('g-recaptcha-response')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn-prenota border-0 w-100 py-3">{{ __('ui.Invia') }}</button>

                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- MAPPA SECTION -->
    <section class="container-fluid px-0 pt-5">
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d25246.295514246463!2d15.144402091706615!3d37.724678657837224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x131407010c31b87b%3A0x7d52551d759a5837!2sCasello%20di%20Giarre%2C%20Giarre%2C%20CT!3m2!1d37.7044486!2d15.1685954!4m5!1s0x131407af435429f9%3A0x8a2bde68902eded0!2sIl%20Ciliegio%20dell&#39;Etna%20Agriturismo%2C%20Via%20Filippo%20Meda%2C%2088%2C%2095014%20Giarre%20CT!3m2!1d37.745135399999995!2d15.1634449!5e0!3m2!1sit!2sit!4v1768904173571!5m2!1sit!2sit"
                class="map-iframe"></iframe>
        </div>
    </section>



</x-layout>

