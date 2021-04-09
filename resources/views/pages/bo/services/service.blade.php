@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Introduction</h1>
@stop
@include('partials.linkCSS')

@section('content')
    <div style="margin-top: 10%;" class="container">
        <div class="row">
            @foreach ($resources as $item)
                <!-- single service -->
                <div class="col-md-4 col-sm-6">
                    <div class="service">
                        <div class="icon">
                            <i class="{{$item->icons->name}}"></i>
                        </div>
                        <div class="service-text">
                            <h2>{{$item->title}}</h2>
                            <p>{{$item->content}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            {{$resources->fragment('service')->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
    @include('partials.bo.services.resourcesTable')
    @include('partials.linkJS')
@stop