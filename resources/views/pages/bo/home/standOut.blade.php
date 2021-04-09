@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Stand Out</h1>
@stop
@include('partials.linkCSS')

@section('content')
    @include('partials.home.promotion')
    @include('partials.bo.home.standOut')
@stop