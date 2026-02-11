@php
    $pageTitle = html_entity_decode($title ?? '');
    $pageDescription = $metaDescription
        ?? 'Il Ciliegio dell\'Etna - Agriturismo, ristorante e pizzeria a Giarre. Scopri il nostro menu, camere e esperienze.';
    $pageDescription = Str::limit(strip_tags($pageDescription), 160, '');

    $pageCanonical = $canonical ?? url()->current();

    $pageOgTitle = $ogTitle ?? ($post->title ?? 'Il Ciliegio dell\'Etna');
    $pageOgDescription = $ogDescription ?? ($post->content ?? $pageDescription);
    $pageOgDescription = Str::limit(strip_tags($pageOgDescription), 160, '');
    $pageOgImage = $ogImage ?? (isset($post->image)
        ? asset('storage/' . $post->image)
        : Vite::asset('resources/images/logo_ciliegio.webp'));
    $pageOgType = $ogType ?? (isset($post) ? 'article' : 'website');
    $pageOgLocale = str_replace('_', '-', app()->getLocale());
    $currentPath = request()->path();
    $currentPath = $currentPath === '/' ? '' : $currentPath;
    $supportedLocales = ['it', 'en', 'es', 'fr'];
    $alternateLinks = [];
    foreach ($supportedLocales as $locale) {
        $localizedPath = $currentPath ? $locale . '/' . $currentPath : $locale;
        $alternateLinks[$locale] = url($localizedPath);
    }
@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/images/logo_ciliegio.webp') }}" type="image/webp">
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <link rel="canonical" href="{{ $pageCanonical }}" />
    <meta name="robots" content="index, follow">
    <meta name="author" content="Il Ciliegio dell'Etna">
    <meta name="theme-color" content="#001a23">
    @foreach ($alternateLinks as $locale => $alternateUrl)
        <link rel="alternate" hreflang="{{ $locale }}" href="{{ $alternateUrl }}">
    @endforeach
    <link rel="alternate" hreflang="x-default" href="{{ url($currentPath) }}">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/contatti.css'])

    {{-- FONT GOOGLE --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- FINE FONT GOOGLE --}}

    {{-- Critical CSS (small, above-the-fold rules to reduce FOUC/LCP) --}}
    <style>
        /* Navbar and header essentials */
        .navbar{position:fixed;top:0;left:0;width:100%;z-index:1050;background-color:transparent}
        .icona_navbar{width:6.5rem}
        .header-modern{min-height:45vh;background-size:cover;background-position:center}
        .video_home{display:block;width:100%;height:100vh;object-fit:cover}
        .h-video{height:100vh}
        /* Basic body paint to avoid white flash */
        body{background-color:var(--bianco_sfondo)}
    </style>

    {{-- Preload the main OG image (helps LCP when it's the hero image) --}}
    @if(!empty($pageOgImage))
        <link rel="preload" as="image" href="{{ $pageOgImage }}">
    @endif

    {{-- GOOGLE CAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js?hl={{ app()->getLocale() }}" async defer></script>
    {{-- FINE GOOGLE CAPTCHA --}}

    {{-- CAROSELLO DI SWIPERSJS.COM --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- FINE CAROSELLO --}}

    {{-- PARTE NECESSARIA PER LA CONDIVISIONE BLOG --}}
    <meta property="og:title" content="{{ $pageOgTitle }}">
    <meta property="og:description" content="{{ $pageOgDescription }}">
    <meta property="og:image" content="{{ $pageOgImage }}">
    <meta property="og:url" content="{{ $pageCanonical }}">
    <meta property="og:type" content="{{ $pageOgType }}">
    <meta property="og:locale" content="{{ $pageOgLocale }}">
    <meta property="og:site_name" content="Il Ciliegio dell'Etna">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageOgTitle }}">
    <meta name="twitter:description" content="{{ $pageOgDescription }}">
    <meta name="twitter:image" content="{{ $pageOgImage }}">

</head>

<body class="w-100">
    <x-navbar />



    <div>

        {{ $slot }}
    </div>

    <x-footer />

    <div class="whatsapp-container">
        <span class="whatsapp-text"> {{ __('ui.whatsapp_text') }}</span>
        <a href="https://wa.me/39095969109?text=Ciao!%20Vorrei%20ricevere%20informazioni" class="whatsapp-btn"
            target="_blank">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
    </div>

    {{-- FONT AWESOME --}}
    <script src="https://kit.fontawesome.com/098ae14503.js" crossorigin="anonymous" defer></script>

    {{-- CAROSELLO --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>


</body>

</html>
