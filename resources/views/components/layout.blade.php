<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta name="robots" content="index, follow">

    <!-- Titolo ottimizzato SEO -->
    <title>Pizzeria Passaparola Roma | Pizza romana nel forno a legna</title>

    <!-- Meta description migliorata -->
    <meta name="description"
        content="Scopri la Pizzeria Passaparola a Roma: vera pizza romana cotta nel forno a legna, ingredienti freschi e accoglienza familiare.">

    <!-- Keywords -->
    <meta name="keywords"
        content="pizzeria, pizza romana, forno a legna, Passaparola, ristorante, pizze artigianali, cena, locale accogliente">

    <!-- Autore -->
    <meta name="author" content="Pizzeria Passaparola">

    <!-- Open Graph per condivisione social -->
    <meta property="og:title" content="Pizzeria Passaparola | Pizza romana con forno a legna">
    <meta property="og:description"
        content="Vieni a gustare la vera pizza romana in un ambiente familiare e accogliente.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <!-- Dati strutturati (Schema.org JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "name": "Pizzeria Passaparola",
        "image": "{{ asset('images/logoPrincipale.png') }}",
        "description": "Pizzeria a conduzione familiare a Roma. Pizza romana cotta nel forno a legna con ingredienti freschi e ambiente accogliente.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Via Francesco Vitalini, 31",
            "addressLocality": "Roma",
            "addressRegion": "RM",
            "postalCode": "00155",
            "addressCountry": "IT"
        },
        "telephone": "+39 06 8765 5926",
        "email": "pizzeriapassaparolaroma@gmail.com",
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                    "Monday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday",
                    "Sunday"
                ],
                "opens": "18:30",
                "closes": "23:30"
            }
        ],
        "servesCuisine": "Italian",
        "priceRange": "€",
        "acceptsReservations": "True",
        "hasMap": "https://www.google.com/maps/place/Via+Francesco+Vitalini,+31,+00155+Roma+RM"
    }
    </script>
</head>


<body>
    <x-navbar></x-navbar>
    {{ $slot }}
    <x-footer></x-footer>
</body>

</html>
