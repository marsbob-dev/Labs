<!-- Post Author -->
<div class="author" id="authorId">
    <div class="avatar">
        <img height="150" src="{{asset('img/team/'.$post->authors->photos->src)}}" alt="">
    </div>
    <div class="author-info">
        <h2>{{$post->authors->name}} {{$post->authors->surname}}, <span>{{$post->authors->jobs->name}}</span></h2>
        <p>{{$post->authors->description}}</p>
    </div>
</div>