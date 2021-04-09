@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Create a new Post & Posts list</h1>
@stop

@section('content')
    @include('partials.bo.blog.postForm')
    @include('partials.bo.blog.postsTable')
@stop