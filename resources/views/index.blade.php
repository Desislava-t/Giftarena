@extends('layouts.app')

@section('meta')
    <meta name="description"
          content="Web site Giftarena.eu:
        Здравословен начин на живот, здравословно готвене, здравословно хранене, рецепти, домакински уреди">
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

