<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Favicon Basic -->
    <link href="https://dusunkalipucung.com/images/logo_atas.png" rel="icon">
<link rel="icon" type="image/x-icon" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="icon" type="image/png" sizes="48x48" href="https://dusunkalipucung.com/images/logo_atas.png">

<meta name="mobile-web-app-capable" content="yes">

<!-- Apple Touch Icons -->
<link rel="apple-touch-icon" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="57x57" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="60x60" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="72x72" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="114x114" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="120x120" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="144x144" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="152x152" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="apple-touch-icon" sizes="180x180" href="https://dusunkalipucung.com/images/logo_atas.png">

<!-- Android Chrome Icons -->
<link rel="icon" type="image/png" sizes="192x192" href="https://dusunkalipucung.com/images/logo_atas.png">
<link rel="icon" type="image/png" sizes="512x512" href="https://dusunkalipucung.com/images/logo_atas.png">

<!-- Windows Metro -->
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="msapplication-config" content="/browserconfig.xml">

<!-- Safari Pinned Tab -->
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">

<!-- Web App Manifest -->
<!--<link rel="manifest" href="/site.webmanifest">-->

<!-- Favicon Meta Tags -->
<meta name="theme-color" content="#ffffff">
<meta name="apple-mobile-web-app-title" content="Wisata Edukasi Kalipucung">
<meta name="application-name" content="Wisata Edukasi Kalipucung">
    
    <!-- Primary Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Wisata Edukasi Kalipucung - Destinasi Wisata Edukatif">
    <meta name="description" content="Kunjungi Wisata Edukasi Kalipucung, tempat belajar dan bermain yang menyenangkan. Nikmati pengalaman edukasi interaktif sambil menikmati keindahan alam.">
    <meta name="keywords" content="wisata edukasi, kalipucung, wisata keluarga, wisata anak, eduwisata, wisata pembelajaran, destinasi edukasi">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="author" content="Wisata Edukasi Kalipucung">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://dusunkalipucung.com/">
    <meta property="og:title" content="Wisata Edukasi Kalipucung - Destinasi Wisata Edukatif">
    <meta property="og:description" content="Kunjungi Wisata Edukasi Kalipucung, tempat belajar dan bermain yang menyenangkan. Nikmati pengalaman edukasi interaktif sambil menikmati keindahan alam.">
    <meta property="og:image" content="https://dusunkalipucung.com/get-image/1731515007.jpg">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://dusunkalipucung.com/">
    <meta property="twitter:title" content="Wisata Edukasi Kalipucung - Destinasi Wisata Edukatif">
    <meta property="twitter:description" content="Kunjungi Wisata Edukasi Kalipucung, tempat belajar dan bermain yang menyenangkan. Nikmati pengalaman edukasi interaktif sambil menikmati keindahan alam.">
    <meta property="twitter:image" content="https://dusunkalipucung.com/get-image/1731515007.jpg">
    
    <!-- Mobile App Tags -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Wisata Edukasi Kalipucung">
    <meta name="application-name" content="Wisata Edukasi Kalipucung">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <title>Wisata Edukasi Kalipucung</title>

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
    
    <!-- Schema.org Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TouristAttraction",
  "name": "Wisata Edukasi Kalipucung",
  "description": "Wisata Edukasi Kalipucung menawarkan pengalaman belajar interaktif dengan fasilitas modern, area bermain edukatif, dan pemandangan alam yang memukau.",
  "url": "https://dusunkalipucung.com/",
  "sameAs": [
    // "https://facebook.com/WisataEdukasiKalipucung",
    "https://www.instagram.com/dusunkalipucung/",
    // "https://twitter.com/WisataKalipucung"
  ],
  "image": "https://dusunkalipucung.com/get-image/1731515007.jpg",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Kalipucung",
    "addressRegion": "Jawa Tengah",
    "addressCountry": "ID"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "-7.625",
    "longitude": "110.1330556"
  },
  "openingHours": "Mo-Su 00:00-23:59",
//   "priceRange": "Rp25.000 - Rp100.000",
  "telephone": "+62-823-9183-1572"
}
</script>

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
