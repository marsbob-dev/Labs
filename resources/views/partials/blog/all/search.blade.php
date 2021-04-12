<!-- Single widget -->
{{-- Search bar --}}
<div class="widget-item">
    <form action="/search" class="search-form" method="GET">
        @csrf
        <input type="text" placeholder="{{$searches->placeholder}}" name="search">
        <button type="submit" class="search-btn"><i class="{{$searches->icon}}"></i></button>
    </form>
</div>