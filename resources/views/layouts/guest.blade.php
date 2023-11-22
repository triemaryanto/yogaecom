<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('landing-page') }}/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('landing-page') }}/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('landing-page') }}/plugins/animate/animate.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('landing-page') }}/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{ asset('landing-page') }}/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('landing-page') }}/css/style.css">
    <!-- Main Stylesheet -->

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body id="body">
    <section class="signin-page account">

        {{ $slot }}

    </section>

    <!-- Main jQuery -->
    <script src="{{ asset('landing-page') }}/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="{{ asset('landing-page') }}/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="{{ asset('landing-page') }}/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="{{ asset('landing-page') }}/plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="{{ asset('landing-page') }}/plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="{{ asset('landing-page') }}/plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="{{ asset('landing-page') }}/plugins/slick/slick.min.js"></script>
    <script src="{{ asset('landing-page') }}/plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="{{ asset('landing-page') }}/plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="{{ asset('landing-page') }}/js/script.js"></script>
</body>

</html>
