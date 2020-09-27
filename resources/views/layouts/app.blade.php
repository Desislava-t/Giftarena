<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">

    @section('meta')
        <meta name="description" content="Web site giftarena.com: Сухо строителство, строителство на къщи,строителство на басейни,
          строителство на спа центрове, ремонтни дейности, постаяне на облицовки от естествен и технически камък,
          поставяне на подови настилки, редене на мозайки, плочки,камини, подови настилки">
    @show

    {{--Meta author--}}
    <meta name="author" content="Desislava Georgieva, email : desislava.georgieva001@gmail.com, phone: 0897 722 275">
    {{--./Meta author--}}

<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Giftarena') }} | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}


<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">--}}


    {{--preload--}}
    <link rel="preload" href="css/app.css" as="style">
    <link rel="preload" href="js/app.js" as="script">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" as="style">

    {{--./preload--}}
</head>
<body>
@yield('nav')
<div id="app">
    {{--Anchorst--}}
    <a href="#" id="top" aria-label="anchors link"><i class="fas fa-chevron-circle-up"></i></a>
    {{--./Anchorst--}}
    <span>
        @section('content')
        @show
    </span>
</div>
</body>
</html>
