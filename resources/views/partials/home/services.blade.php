<!-- Services section -->
<div class="services-section spad">
    <div class="container">
        <div class="section-title dark">
            <h2>{!! $titleService !!}</h2>
        </div>
        <div class="row">
            <!-- service -->
            @foreach ($resources->random(9) as $item)
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
                <!-- service -->
            @endforeach
        </div>
        {{-- btn --}}
        <div class="text-center">
            <a href="{{$services->btnLink}}" class="site-btn">{{$services->btn}}</a>
        </div>
    </div>
</div>
<!-- services section end -->