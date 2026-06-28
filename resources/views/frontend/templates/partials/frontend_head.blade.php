<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $metaTitle = $meta['meta_title'] ?? '';
        $metaDescription = $meta['meta_description'] ?? '';
        $metaKeywords = $meta['meta_keywords'] ?? '';
        $metaImage = $meta['image'] ?? '';
        $metaUrl = $meta['url'] ?? '';
        $metaType = 'article';
        $siteName = ' Kitchen Asia';
    @endphp

    <!-- Basic SEO Meta Tags -->
    <title>{{ $metaTitle ?? '' }}</title>
    <meta name="title" content="{{ $metaTitle ?? '' }}">
    <meta name="description" content="{{ $metaDescription ?? '' }}">
    <meta name="keywords" content="{{ $metaKeywords ?? '' }}">

    <!--  Facebook -->
    <meta property="og:type" content="{{ $metaType ?? '' }}">
    <meta property="og:title" content="{{ $metaTitle ?? '' }}">
    <meta property="og:site_name" content="{{ $siteName ?? '' }}">
    <meta property="og:description" content="{{ $metaDescription ?? '' }}">
    <meta property="og:image" content="{{ $metaImage ?? '' }}">
    <meta property="og:url" content="{{ $metaUrl ?? '' }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="{{ $metaDescription ?? '' }}">
    <meta name="twitter:title" content="{{ $metaTitle ?? '' }}">
    <meta name="twitter:description" content="{{ $metaDescription ?? '' }}">
    <meta name="twitter:image" content="{{ $metaImage ?? '' }}">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ $metaUrl ?? '' }}">

    <!-- Google Font URL -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Assets -->
    @vite(['resources/js/frontend.js', 'resources/css/app.css'])

    <!-- Additional CSS -->
    @stack('additional_css')
</head>
