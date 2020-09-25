@extends('layouts.master')

@section('meta-admin')
    <meta name="description" content="Web site giftarena.com admin panel register users update">
@endsection

@section('title-admin','Admin update users information')

@section('content-admin')
    <admin-nav-component></admin-nav-component>
    @include('admin.partials.users-update')
    <admin-footer-component></admin-footer-component>
@endsection
