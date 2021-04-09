<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            <img src="{{asset('img/'.$logo->src)}}" alt="">
        </div>
    </div>
    <!-- slider -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carrousels as $item)
            <div class="item  hero-item" data-bg="{{asset('img/'.$item->src)}}"><p class="pCarrousel text-center">{{$item->paragraph}}</p></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->