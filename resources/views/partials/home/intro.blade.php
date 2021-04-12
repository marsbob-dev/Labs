<!-- Intro Section -->
<div class="hero-section">
    <div class="hero-content">
        <div class="hero-center">
            {{-- petit logo --}}
            <img width="504" height="148" src="{{asset('img/'.$logo->src)}}" alt="">
        </div>
    </div>
    <!-- carrousel -->
    <div id="hero-slider" class="owl-carousel">
        @foreach ($carrousels as $item)
        {{-- gros logo / text --}}
            <div class="item  hero-item" data-bg="{{asset('img/'.$item->src)}}"><p class="pCarrousel text-center">{{$item->paragraph}}</p></div>
        @endforeach
    </div>
</div>
<!-- Intro Section -->