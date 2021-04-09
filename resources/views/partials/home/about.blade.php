<!-- About section -->
<div class="about-section">
    <div class="overlay"></div>
    <!-- card section -->
    <div class="card-section">
        <div class="container">
            <div class="row">
                @foreach ($resources->random(3) as $item)
                    <!-- single card -->
                    <div class="col-md-4 col-sm-6">
                        <div class="lab-card">
                            <div class="icon">
                                <i class="{{$item->icons->name}}"></i>
                            </div>
                            <h2>{{$item->title}}</h2>
                            <p>{{$item->content}}</p>
                        </div>
                    </div>
                    <!-- single card -->
                @endforeach
            </div>
        </div>
    </div>
    <!-- card section end-->


    <!-- About contant -->
    <div class="about-contant">
        <div class="container">
            <div class="section-title">
                <h2>{!! $titleIntro !!}</h2>
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
<!-- About section end -->