@extends('template.third')

@section('content')
    <div style="margin-top: 5%;">
        <div class="about-section">
            <!-- About contant -->
            <div class="about-contant">
                <div class="container">
                    <div class="section-title">
                        <h2>{!! $title !!}</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>{{$introductions->p1}}</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{$introductions->p2}}</p>
                        </div>
                    </div>
                    <div class="text-center mt60">
                        <a href="{{$introductions->btnLink}}" class="site-btn">{{$introductions->btn}}</a>
                    </div>
                    <!-- popup video -->
                    <div class="intro-video">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <img src="{{asset('img/'.$introductions->src)}}" alt="">
                                <a href="{{$introductions->url}}" class="video-popup">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('partials.bo.home.introduction')
@stop