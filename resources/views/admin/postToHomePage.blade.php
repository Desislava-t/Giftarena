@extends('layouts.master')

@section('meta-admin')
    <meta name="description" content="Web site giftarena.com add post to home page">
@endsection

@section('title-admin','Admin create post')

@section('content-admin')
    <admin-nav-component></admin-nav-component>
    <admin-post-to-home-page-component></admin-post-to-home-page-component>
    <admin-footer-component></admin-footer-component>
@endsection
