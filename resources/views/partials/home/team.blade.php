<!-- Team Section -->
<div class="team-section spad" id="teamSection">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! $titleTeam !!}</h2>
        </div>
        {{-- foreach members (random 2) --}}
        <div class="row">
            @foreach ($users->where('job_id', '!=', 1)->random(2) as $item)
                <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img height="400" width="90%" src="{{asset('img/team/'.$item->photos->src)}}" alt="">
                        <h2>{{$item->name}} {{$item->surname}}</h2>
                        <h3>{{$item->jobs->name}}</h3>
                    </div>
                </div>
                @if ($loop->iteration == 1)
                    <div class="col-sm-4">
                        <div class="member">
                            <img height="400" width="90%" src="{{asset('img/team/'.$users[0]->photos->src)}}" alt="">
                            <h2>{{$users[0]->name}} {{$users[0]->surname}}</h2>
                            <h3>{{$users[0]->jobs->name}}</h3>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
<!-- Team Section end-->