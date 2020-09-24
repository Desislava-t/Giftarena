@extends('layouts.master')

@section('meta-admin')
    <meta name="description" content="Web site goldenstore.com admin panel">
@endsection

@section('title-admin','Admin')

@section('content-admin')
    <admin-nav-component></admin-nav-component>
    <admin-content-component></admin-content-component>
    <admin-content-to-do-list-component></admin-content-to-do-list-component>
    <admin-content-site-over-view-component></admin-content-site-over-view-component>
    <admin-footer-component></admin-footer-component>
@endsection
