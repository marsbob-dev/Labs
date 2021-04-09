@extends('template.main')

@section('content')
    @include('partials.services.services')
    @include('partials.services.feature')
    @include('partials.services.blog')
    @include('partials.newsletter')
    @include('partials.home.contact')
@endsection