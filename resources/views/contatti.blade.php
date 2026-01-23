<x-layout title="Contatti">


    <!-- COLONNA IMMAGINE PARALLASSE -->


    <!-- HERO SECTION -->


    <x-header title="Contatti" />
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
                <h2 class="titolo-mission scritta_verde_scuro mb-4">Siamo qui per te</h2>
                <div class="divider-short mb-5"></div>

                <div class="contact-card mb-4">
                    <div class="contact-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="contact-content ">
                        <h5>Dove Siamo</h5>
                        <p>Via Filippo Meda, 88 - Giarre (CT)</p>
                    </div>
                </div>

                <div class="contact-card mb-4">
                    <div class="contact-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="contact-content">
                        <h5>Chiamaci</h5>
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
                        <h5>Orari d'apertura</h5>
                        <p>Aperto tutti i giorni <br>(Martedì chiuso)</p>
                    </div>
                </div>
            </div>

            <!-- FORM BOX -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="form-wrapper">
                    <h3 class="fw-bold scritta_verde_scuro mb-4">Inviaci un messaggio</h3>
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf

                        <div class="row">
                            <!-- NOME COMPLETO -->
                            <div class="col-md-6 mb-4">
                                <label class="custom-label">Nome Completo</label>
                                <input type="text" name="name"
                                    class="form-control contact-input @error('name') is-invalid @enderror"
                                    placeholder="Mario Rossi" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- EMAIL -->
                            <div class="col-md-6 mb-4">
                                <label class="custom-label">Indirizzo Email</label>
                                <input type="email" name="email"
                                    class="form-control contact-input @error('email') is-invalid @enderror"
                                    placeholder="esempio@email.it" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- OGGETTO -->
                        <div class="mb-4">
                            <label class="custom-label">Oggetto</label>
                            <select name="subject"
                                class="form-select contact-input @error('subject') is-invalid @enderror">
                                <option selected disabled value="">Seleziona un'opzione</option>
                                <option value="Prenotazione Tavolo"
                                    {{ old('subject') == 'Prenotazione Tavolo' ? 'selected' : '' }}>Prenotazione Tavolo
                                </option>
                                <option value="Soggiorno Camere"
                                    {{ old('subject') == 'Soggiorno Camere' ? 'selected' : '' }}>Soggiorno Camere
                                </option>
                                <option value="Eventi Speciali"
                                    {{ old('subject') == 'Eventi Speciali' ? 'selected' : '' }}>Eventi Speciali</option>
                                <option value="Altro" {{ old('subject') == 'Altro' ? 'selected' : '' }}>Altro</option>
                            </select>
                            @error('subject')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- MESSAGGIO -->
                        <div class="mb-4">
                            <label class="custom-label">Il tuo Messaggio</label>
                            <textarea name="message" class="form-control contact-input @error('message') is-invalid @enderror" rows="5"
                                placeholder="Scrivi qui...">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn-prenota border-0 w-100 py-3">Invia</button>
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
