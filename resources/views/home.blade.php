@extends('layouts.app')

@section('meta')
    <meta name="description"
          content="Web site goldenstore.com: Сухо строителство, строителство на къщи,строителство на басейни,
          строителство на спа центрове, ремонтни дейности, постаяне на облицовки от естествен и технически камък,
          поставяне на подови настилки, редене на мозайки, плочки,камини, подови настилки ">
@endsection

@section('title','Начало')

@section('nav')
    @include('partials.main-nav')
@endsection

@section('content')
    @if(Auth::user()->userType==='admin')
        {{--<h1 class="text-dark" >Admin</h1>--}}
    @elseif(session('status'))
        <div class="alert alert-danger" role="alert">
            {{ session('status') }}
        </div>
    @endif

@endsection

