@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Team</h1>
@stop
@include('partials.linkCSS')

@section('content')
    @include('partials.home.team')
    @include('partials.bo.home.teamEdit')
@stop