@extends('layouts.app')

@section('meta')
    <meta name="description"
          content="Register into Web site giftarena.com: Сухо строителство, строителство на къщи,строителство на басейни,
          строителство на спа центрове, ремонтни дейности, постаяне на облицовки от естествен и технически камък,
          поставяне на подови настилки, редене на мозайки, плочки,камини, подови настилки ">
@endsection

@section('title','Регистрация')

@section('nav')
    @include('partials.main-nav')
@endsection

@section('content')
    @include('auth.partials.register')
    <footer-component></footer-component>
@endsection

