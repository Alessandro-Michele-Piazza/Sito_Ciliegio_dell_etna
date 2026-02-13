@php
    // Mapping dei codici lingua ai codici nazione per le bandiere
    $countryCode =
        [
            'it' => 'it',
            'en' => 'gb',
            'es' => 'es',
            'fr' => 'fr',
            'de' => 'de', 
        ][$lang] ?? $lang;
@endphp

<form class="d-inline mx-1" action="{{ route('setLocale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="btn p-0 border-0 bg-transparent shadow-none" title="{{ strtoupper($lang) }}">
        <img src="https://flagcdn.com/w40/{{ $countryCode }}.png" alt="{{ $lang }}" width="28"
            class="rounded shadow-sm flag-hover">
    </button>
</form>
