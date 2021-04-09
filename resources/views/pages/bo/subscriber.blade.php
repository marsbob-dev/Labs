@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Subscribers</h1>
@stop

@section('content')
    @include('partials.bo.subscriber')
@stop