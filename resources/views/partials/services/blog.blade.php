<!-- services card section-->
<div class="services-card-section spad" id="cardSection">
    <div class="container">
        <div class="row">
            @foreach ($lastPost as $item)
                <!-- Single Card -->
                <div class="col-md-4 col-sm-6">
                    <div class="sv-card">
                        <div class="card-img">
                            <img src="{{asset('img/blog/'.$item->src)}}" alt="">
                        </div>
                        <div class="card-text">
                            <h2>{{$item->title}}</h2>
                            <p>{{Str::limit($item->content, 100)}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- services card section end-->