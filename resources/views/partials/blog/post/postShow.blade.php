<div class="post-thumbnail">
    <img height="300" width="750" src="{{asset('img/blog/'.$post->src)}}" alt="">
    <div class="post-date">
        @if ($post->created_at == NULL)
            <h2>03</h2>
            <h3>Nov 2017</h3>
        @else
            <h2>{{$post->created_at->format('d')}}</h2>
            <h3>{{$post->created_at->format('M Y')}}</h3> 
        @endif
    </div>
</div>
<div class="post-content">
    <h2 class="post-title">{{$post->title}}</h2>
    <div class="post-meta">
        <a href="#authorId">{{$post->authors->name}} {{$post->authors->surname}}</a>
            @foreach ($post->tags as $item)
                @if ($loop->iteration == 1)
                    <a class="text-capitalize" href="/tagsFilter/{{$item->id}}">{{$item->name}}</a>
                @else
                    <a class="a_tag_style" href="/tagsFilter/{{$item->id}}">, {{$item->name}}</a>
                @endif
            @endforeach
        <a href="#commentId">{{$nbrComment}} Comments</a>
    </div>
    @foreach ($paragraphs as $item)
        <p>{{$item}}</p>
    @endforeach
</div>