<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

    @section('meta')
        <meta name="description" content="Web site giftarena.com admin panel">
    @show
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="Desislava Georgieva, email : desislava.georgieva001@gmail.com, phone: 0897 722 275 ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>{{ config('app.name', 'Giftarena') }} | @yield('title-admin')</title>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!--     Fonts and icons     -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preload" href="css/app.css" as="style">
    <link rel="preload" href="js/app.js" as="script">

</head>
<body>

<div id="app">
    @yield('content-admin')
</div>

</body>

</html>