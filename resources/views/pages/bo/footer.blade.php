@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Introduction</h1>
@stop
@include('partials.linkCSS')

@section('content')
    <div style="margin-top: 100px;">
        @include('partials.footer')
    </div>
    @include('partials.bo.footer')
@stop