<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WEB TARA - Jasa pembuatan website profesional bergaya flat comic neo-brutalism. Cepat, modern, dan berkarakter kuat.">

    <title>{{ $title ?? 'WEB TARA - Jasa Pembuatan Website Profesional' }}</title>

    <link rel="icon" href="{{ asset('images/webtara-logo.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('images/webtara-logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/landing.css'])
</head>
<body class="bg-[#F8FAFC] text-black comic-grid antialiased selection:bg-blue-600 selection:text-white min-h-screen flex flex-col">
    {{ $slot }}

    @include('partials.landing.scripts')
</body>
</html>
