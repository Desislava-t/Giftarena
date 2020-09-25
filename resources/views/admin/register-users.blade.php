@extends('layouts.master')

@section('meta-admin')
    <meta name="description" content="Web site giftarena.com admin panel">
@endsection

@section('title-admin','Admin register-users')

@section('content-admin')
    <admin-nav-component></admin-nav-component>
    @include('admin.partials.users')
    <admin-footer-component></admin-footer-component>
@endsection
