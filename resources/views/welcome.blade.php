<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        {{--
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        --}}

        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/vendor/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/vendor/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/vendor/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/vendor/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/vendor/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/vendor/jquery.fancybox.min.css') }}">
    </head>
    <body class="antialiased">
        @include('landing.frontpage.home')
        {{-- @include('landing.hero')
        @include('landing.footer') --}}
    </body>
</html>
