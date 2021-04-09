@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Logo</h1>
@stop

@section('content')
    <div>
        <img src="{{asset('img/'.$logo->src)}}" alt="">
    </div>
    @include('partials.bo.logo')
@stop