@extends('layouts.master')

@section('meta-admin')
    <meta name="description" content="Web site giftarena.com admin panel subscribers users">
@endsection

@section('title-admin','Admin update users information')

@section('content-admin')
    <admin-nav-component></admin-nav-component>
    <admin-get-subscribers-users-email-component></admin-get-subscribers-users-email-component>
    <admin-footer-component></admin-footer-component>
@endsection

