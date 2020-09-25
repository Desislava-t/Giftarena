@extends('layouts.app')

@section('meta')
    <meta name="description"
          content="Web site giftarena.com: Сухо строителство, строителство на къщи,строителство на басейни,
          строителство на спа центрове, ремонтни дейности, постаяне на облицовки от естествен и технически камък,
          поставяне на подови настилки, редене на мозайки, плочки,камини, подови настилки , начало">
@endsection

@section('title','Начало')

@section('content')
    @include('partials.main-nav')
    <carousel-component></carousel-component>
    <home-page-content-services-component></home-page-content-services-component>
    <post-home-page-component></post-home-page-component>
    <useful-information-component></useful-information-component>
    <footer-component></footer-component>
@endsection

