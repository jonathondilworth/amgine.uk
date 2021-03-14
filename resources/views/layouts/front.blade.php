<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="Amgine Is A Private Space For Disruptive Technologies" />
		<meta name="keywords" content="bitcoin, ethereum, monero, ico, token, free token, btc, eth" />
		<meta name="author" content="Jonathon Dilworth"/>

        <title>{{ config('app.name', 'Amgine - Disruptive Technologies') }}</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png" />

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- START -->
        <!-- We Won't Need These Then We Wrap Everything Into Webpack -->
		<!-- Bootstrap & Plugins CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom CSS -->
		<link href="assets/css/dark.css" rel="stylesheet" type="text/css">
		<!-- Donate CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/donate.css">
		<!-- END -->
    </head>
    <body>

            <!-- LOADER -->

            @include('partials.front.loader')

            <!-- PAGE HEADER & NAV -->

            @include('partials.front.header')

            <!-- CONTENT -->

            @yield('content')

    </body>
</html>