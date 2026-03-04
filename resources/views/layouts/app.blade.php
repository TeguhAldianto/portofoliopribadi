<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data="{ darkMode: localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches) }"
    x-init="$watch('darkMode', val => localStorage.setItem('theme', val ? 'dark' : 'light'))">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- SEO Meta Tags --}}
    <title>@yield('title', 'Teguh Aldianto - Full-Stack & Mobile Developer')</title>
    <meta name="description"
        content="@yield('description', 'Portfolio of Teguh Aldianto, a Full-Stack Web Developer and Mobile Developer with expertise in Laravel, Kotlin, and modern web technologies.')">
    <meta name="keywords"
        content="Teguh Aldianto, Full-Stack Developer, Mobile Developer, Laravel, Kotlin, Web Development, Android Development">
    <meta name="author" content="Teguh Aldianto">

    {{-- Open Graph Tags --}}
    <meta property="og:title" content="@yield('og_title', 'Teguh Aldianto - Full-Stack & Mobile Developer')">
    <meta property="og:description"
        content="@yield('og_description', 'Portfolio of Teguh Aldianto showcasing professional projects and expertise in software development.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    {{-- Twitter Card Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Teguh Aldianto - Portfolio')">
    <meta name="twitter:description" content="@yield('description', 'Professional software developer portfolio')">

    {{-- Canonical URL --}}
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('components.navbar')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('components.footer')
</body>

</html>