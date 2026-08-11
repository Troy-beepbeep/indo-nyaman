<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Indo Nyaman — Jasa Cleaning & Garden Service Bali')</title>
    <meta name="description" content="@yield('meta_description', 'Indo Nyaman menyediakan jasa cleaning dan garden service terpercaya di Bali.')">

    <!-- Open Graph (buat preview pas di-share ke WA/IG/FB) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Indo Nyaman — Jasa Cleaning & Garden Service Bali')">
    <meta property="og:description" content="@yield('meta_description', 'Indo Nyaman menyediakan jasa cleaning dan garden service terpercaya di Bali.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:image" content="{{ asset('images/og-preview.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Fonts & Vite Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Style Anti Kedip (x-cloak) -->
    <style>
        [x-cloak] { display: none !important; }
    </style>
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16x16.png') }}">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
</head>

<body x-data="{ 
    lang: localStorage.getItem('site_lang') || 'id',
    setLang(l) {
        this.lang = l;
        localStorage.setItem('site_lang', l);
    }
}" class="bg-cream text-ink font-sans antialiased">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
    @include('partials.whatsapp-button')

</body>
</html>