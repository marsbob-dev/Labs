<!-- Testimonial section -->
<div class="testimonial-section pb100">
    <div class="test-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-4">
                <div class="section-title left">
                    <h2>{!! $titleTesti !!}</h2>
                </div>
                <div class="owl-carousel" id="testimonial-slide">
                    @foreach ($witnesses as $item)
                        <!-- single testimonial -->
                        <div class="testimonial">
                            <span>{{$testimonials->span}}​‌</span>
                            <p>{{$item->content}}</p>
                            <div class="client-info">
                                <div class="avatar">
                                    <img src="{{asset('img/avatar/'.$item->src)}}" alt="">
                                </div>
                                <div class="client-name">
                                    <h2>{{$item->surname}} {{$item->name}}</h2>
                                    <p>{{$item->job}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- single testimonial -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial section end-->