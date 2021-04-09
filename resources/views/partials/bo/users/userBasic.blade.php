<div class="jumbotron">
    <div class="row">
        <div class="col-6">
            <h1 class="display-4">{{$users[(Auth::id()-1)]->surname}} {{$users[(Auth::id()-1)]->name}}</h1>
            <p class="lead">E-mail : {{$users[(Auth::id()-1)]->email}}</p>
            <p class="lead">Job : {{$users[(Auth::id()-1)]->jobs->name}}</p>
            <p class="lead">Role : {{$users[(Auth::id()-1)]->roles->name}}</p>
            <p class="lead">Description : {{$users[(Auth::id()-1)]->description}}</p>
        </div>
        <div class="col-6 text-center">
            <img height="450" class="rounded shadow-lg" src="{{asset('img/team/'.$users[(Auth::id()-1)]->photos->src)}}" alt="">
        </div>
        <a class="btn btn-success btn-lg" href="/usersEditBasic/{{$users[(Auth::id()-1)]->id}}" role="button">Edit</a>
        <form action="/users/{{$users[(Auth::id()-1)]->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-lg ml-3" type="submit">Delete</button>
        </form>
    </div>
</div>