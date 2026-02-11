<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/images/logo_ciliegio.webp') }}" type="image/webp">
    <title>{{ html_entity_decode($title ?? '') }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Il Ciliegio dell\'Etna - Agriturismo, ristorante e pizzeria a Giarre. Scopri il nostro menu, camere e esperienze.' }}">
    <link rel="canonical" href="{{ $canonical ?? url()->current() }}" />
    <meta name="robots" content="index, follow">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/contatti.css'])

    {{-- FONT GOOGLE --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- FINE FONT GOOGLE --}}

    {{-- GOOGLE CAPTCHA --}}
    <script src="https://www.google.com/recaptcha/api.js?hl={{ app()->getLocale() }}" async defer></script>
    {{-- FINE GOOGLE CAPTCHA --}}

    {{-- CAROSELLO DI SWIPERSJS.COM --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- FINE CAROSELLO --}}

    {{-- PARTE NECESSARIA PER LA CONDIVISIONE BLOG --}}
    <meta property="og:title" content="{{ $ogTitle ?? ($post->title ?? 'Il Ciliegio dell\'Etna') }}">
    <meta property="og:description" content="{{ $ogDescription ?? Str::limit($post->content ?? '', 150) }}">
    <meta property="og:image" content="{{ $ogImage ?? (isset($post->image) ? asset('storage/' . $post->image) : Vite::asset('resources/images/logo_ciliegio.webp')) }}">
    <meta property="og:url" content="{{ $canonical ?? url()->current() }}">
    <meta property="og:type" content="{{ $ogType ?? (isset($post) ? 'article' : 'website') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $ogTitle ?? ($post->title ?? 'Il Ciliegio dell\'Etna') }}">
    <meta name="twitter:description" content="{{ $ogDescription ?? Str::limit($post->content ?? '', 150) }}">
    <meta name="twitter:image" content="{{ $ogImage ?? (isset($post->image) ? asset('storage/' . $post->image) : Vite::asset('resources/images/logo_ciliegio.webp')) }}">

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
    <script src="https://kit.fontawesome.com/098ae14503.js" crossorigin="anonymous"></script>

    {{-- CAROSELLO --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>

</html>
