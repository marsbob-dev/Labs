<!-- Post Comments -->
<div class="comments" id="commentId">
    {{-- comment number --}}
    <h2>Comments ({{$nbrComment}})</h2>
    <ul class="comment-list">
        {{-- foreach comment --}}
        @foreach ($comments as $item)
            <li>
                <div class="avatar">
                    @if ($item->picture_id == 1)
                        <img height="90" width="80" src="{{asset('img/'.$item->photos->src)}}" alt="">
                    @else
                        <img height="90" width="80" src="{{asset('img/team/'.$item->photos->src)}}" alt="">
                    @endif
                    
                </div>
                <div class="commetn-text">
                    @if ($item->created_at == NULL)
                        <h3>{{$item->name}} | 03 nov, 2017</h3>
                    @else
                        <h3>{{$item->name}} | {{$item->created_at->format('d M, Y')}}</h3>
                    @endif
                    <p>{{$item->content}}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>