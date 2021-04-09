@extends('template.second')

@section('content')
    <div class="single-post">
        @include('partials.blog.post.postShow')
        @include('partials.blog.post.postAuthor')
        @include('partials.blog.post.postComment')
        @include('partials.blog.post.postCommentForm')
    </div>
@endsection