<!-- features section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! $title2 !!}</h2>
        </div>
        <div class="row">
            <!-- foreach services -->
            <div class="col-md-4 col-sm-4 features">
                @foreach ($lastServices as $item)
                {{-- 3 left --}}
                    @if($loop->iteration <= 3)
                        <div class="icon-box light left">
                            <div class="service-text">
                                <h2>{{$item->title}}</h2>
                                <p>{{Str::limit($item->content, 80)}}</p>
                            </div>
                            <div class="icon">
                                <i class="{{$item->icons->name}}"></i>
                            </div>
                        </div>
                    @endif
                        {{-- center --}}
                    @if ($loop->iteration == 3)
                        </div>
                        <div class="col-md-4 col-sm-4 devices">
                            <div class="text-center">
                                <img src="{{asset('img/'.$phones->src)}}" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 features">
                    @endif
                            {{-- 3 right --}}
                    @if($loop->iteration > 3)
                        <div class="icon-box light right">
                            <div class="icon">
                                <i class="{{$item->icons->name}}"></i>
                            </div>
                            <div class="service-text">
                                <h2>{{$item->title}}</h2>
                                <p>{{Str::limit($item->content, 80)}}</p>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <!-- Devices -->
        </div>
        <div class="text-center mt100">
            <a href="{{$phones->btnLink}}" class="site-btn">{{$phones->btn}}</a>
        </div>
    </div>
</div>
<!-- features section end-->