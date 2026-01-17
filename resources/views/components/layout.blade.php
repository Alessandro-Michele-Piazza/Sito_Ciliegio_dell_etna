<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/images/logo_ciliegio.png') }}" type="image/png">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- FONT GOOGLE --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    {{-- FINE FONT GOOGLE --}}


</head>

<body>
    <x-navbar />


    <div class="min-vh-100 ">

        {{ $slot }}
    </div>


    {{-- FONT AWESOME --}}
    <script src="https://kit.fontawesome.com/098ae14503.js" crossorigin="anonymous"></script>

</body>

</html>
