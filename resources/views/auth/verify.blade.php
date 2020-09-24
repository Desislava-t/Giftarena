@extends('layouts.app')

@section('meta')
    <meta name="description"
          content="Verify into Web site goldenstore.com: Сухо строителство, строителство на къщи,строителство на басейни,
          строителство на спа центрове, ремонтни дейности, постаяне на облицовки от естествен и технически камък,
          поставяне на подови настилки, редене на мозайки, плочки,камини, подови настилки ">
@endsection

@section('title','Verify')

@section('nav')
    @include('partials.main-nav')
@endsection

@section('content')
    @include('auth.partials.verify')
@endsection

