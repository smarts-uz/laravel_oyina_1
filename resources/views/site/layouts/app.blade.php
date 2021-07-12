<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/news.css') }}">
        {{--<link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/news.css">--}}

        <link rel="stylesheet" type="text/css" href="./css/splide.min.css">
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
	    <link rel="stylesheet" type="text/css" href="{{ asset('css/glide.core.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/glide.theme.min.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script type="text/javascript" src="./js/darkmode.js"></script>

    </head>
    <body class="font-sans antialiased">
        <a id="headerpage"></a>

        <x-navbar/>

        <x-settings/>

        @yield('content')

        <x-footer/>

        <a href="#headerpage"  class="topbtn " id="myBtn" title="Go to top">
            <p class="w-full h-full flex items-center justify-center align-center"><svg width="25" height="18" viewBox="0 0 37 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.6525 22L18.5 8.40216L4.3475 22L3.44872e-06 17.8138L18.5 -2.19738e-06L37 17.8138L32.6525 22Z" fill="white"/>
                </svg>
            </p>
        </a>

    </body>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/splide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/splide.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/glide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/glide.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/clock.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/settings.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/top.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</html>
