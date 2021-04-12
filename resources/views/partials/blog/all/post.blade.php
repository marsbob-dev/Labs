{{-- if no post --}}
@if (count($posts) == 0)
    <h1 class="text-left">No Results</h1>
@else
    {{-- foreach post --}}
    @foreach ($posts as $item)
    <!-- Post item -->
    <div class="post-item">
        <div class="post-thumbnail">
            {{-- post img --}}
            <img height="300" width="750" src="{{asset('img/blog/'.$item->src)}}" alt="">
            <div class="post-date">
                {{-- id created at = null --}}
                @if ($item->created_at == NULL)
                    <h2>03</h2>
                    <h3>Nov 2017</h3>
                    {{-- else D M Y --}}
                @else
                    <h2>{{$item->created_at->format('d')}}</h2>
                    <h3>{{$item->created_at->format('M Y')}}</h3> 
                @endif
            </div>
        </div>
        <div class="post-content">
            {{-- titre --}}
            <h2 class="post-title">{{$item->title}}</h2>
            <div class="post-meta">
                {{-- category name --}}
                <a href="/post/{{$item->id}}/#authorId">{{$item->category->name}}</a>
                {{-- foreach tags (2) --}}
                @foreach ($item->tags->take(2) as $tagss)
                    @if ($loop->iteration == 1)
                        <a class="text-capitalize" href="/tagsFilter/{{$tagss->id}}">{{$tagss->name}}</a>
                    @else
                        <a class="a_tag_style" href="/tagsFilter/{{$tagss->id}}">, {{$tagss->name}}</a>
                    @endif
                @endforeach
                {{-- comments --}}
                <a href="/post/{{$item->id}}/#commentId">{{count($comments->where('post_id', $item->id))}} Comments</a>
            </div>
            {{-- content --}}
            <p>{{Str::limit($item->content, 300)}}...</p>
            {{-- btn --}}
            <a href="/post/{{$item->id}}" class="read-more">Read More</a>
        </div>
    </div>
    @endforeach
    <!-- Pagination -->
    @if (Route::getCurrentRoute()->uri() != 'tagsFilter/{id}')
    <div>
        {{$posts->fragment('service')->links('vendor.pagination.bootstrap-4')}}
    </div>
    @endif
@endif