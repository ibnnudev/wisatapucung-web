<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <style>
        * {
            font-family: InterVariable, system-ui, sans-serif !important;
            font-feature-settings: "cv02", "cv03", "cv04", "cv11";
        }
    </style>

    <!-- Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @toastifyCss

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased h-screen bg-gray-50 overflow-x-hidden">
    {{ $slot }}

    <!-- Flowbite JS -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- Text Animation JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        // fade in text
        var textWrapper = document.querySelector('.fd-in-text');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.fd-in-text .letter',
                opacity: [0, 1],
                easing: "easeInOutQuad",
                duration: 2250,
                delay: (el, i) => 50 * (i + 1)
            }).add({
                targets: '.fd-in-text',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    </script>

    @toastifyJs

    @stack('js-internal')
</body>

</html>
