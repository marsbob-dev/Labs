<div class="jumbotron">
    <div class="row">
        <div class="col-6">
            <h1 class="display-4">{{$show->surname}} {{$show->name}}</h1>
            <p class="lead">E-mail : {{$show->email}}</p>
            <p class="lead">Job : {{$show->jobs->name}}</p>
            <p class="lead">Role : {{$show->roles->name}}</p>
            <p class="lead">Description : {{$show->description}}</p>
        </div>
        <div class="col-6 text-center">
            <img height="450" class="rounded shadow-lg" src="{{asset('img/team/'.$show->photos->src)}}" alt="">
        </div>
        <a class="btn btn-success btn-lg" href="/users/{{$show->id}}/edit" role="button">Edit</a>
        <form action="/users/{{$show->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-lg ml-3" type="submit">Delete</button>
        </form>
    </div>
</div>