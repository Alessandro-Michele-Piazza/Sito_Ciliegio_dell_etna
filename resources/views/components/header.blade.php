{{-- filepath: c:\Users\alexp\Sito_ciliegio_dell_etna_2026\resources\views\components\header.blade.php --}}
<section class="header header-modern d-flex align-items-center justify-content-center">
    <div class="header-overlay"></div>
    <div class="container text-center position-relative" data-aos="fade-up">
        <span class="sub-label header-badge">IL CILIEGIO DELL'ETNA</span>
        <h1 class="display-4 text-white mt-3">{{ html_entity_decode($title ?? '') }}</h1>
        <p class="header-subtitle text-white mb-0">{{ __('ui.header_subtitle') }}</p>
    </div>
</section>
