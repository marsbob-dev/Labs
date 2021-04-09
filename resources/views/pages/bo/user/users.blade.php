@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Users</h1>
@stop

@section('content')
    @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
        @include('partials.bo.users.userTable')
    @else
        @include('partials.bo.users.userBasic')
    @endif
@stop