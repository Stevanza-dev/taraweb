<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WEB TARA - Solusi website profesional untuk sekolah, perusahaan, dan UMKM. Website modern, cepat, dan responsif.">

    <title>{{ $title ?? 'WEB TARA - Jasa Pembuatan Website Profesional' }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/landing.css'])
</head>
<body class="bg-white text-[var(--wt-navy)] antialiased" style="font-family: 'Inter', ui-sans-serif, system-ui, sans-serif;">
    {{ $slot }}

    @include('partials.landing.scripts')
</body>
</html>
