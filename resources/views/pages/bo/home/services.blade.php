@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Services</h1>
@stop
@include('partials.linkCSS')

@section('content')
    <div class="services-section spad">
        <div class="container">
            <div class="section-title dark">
                <h2>{!! $title !!}</h2>
            </div>
            <div class="my-3"></div>
            <div class="text-center">
                <a href="{{$services->btnLink}}" class="site-btn">{{$services->btn}}</a>
            </div>
        </div>
    </div>
    <div class="team-section spad">
        <div class="container">
            <div class="section-title">
                <h2>{!! $title2 !!}</h2>
            </div>
        </div>
    </div>
    @include('partials.bo.home.servicesEdit')
@stop