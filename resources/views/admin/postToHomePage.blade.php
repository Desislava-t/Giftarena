@extends('layouts.master')

@section('meta-admin')
    <meta name="description" content="Web site goldenstore.com add post to home page">
@endsection

@section('title-admin','Admin Gabriel')

@section('content-admin')
    <admin-nav-component></admin-nav-component>
    <admin-post-to-home-page-component></admin-post-to-home-page-component>
    <admin-footer-component></admin-footer-component>
@endsection
