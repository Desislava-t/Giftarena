@extends('layouts.master')

@section('meta-admin')
    <meta name="description" content="Web site goldenstore.com admin panel register users update">
@endsection

@section('title-admin','Admin Gabriel update users information')

@section('content-admin')
    <admin-nav-component></admin-nav-component>
    @include('admin.partials.users-update')
    <admin-footer-component></admin-footer-component>
@endsection
