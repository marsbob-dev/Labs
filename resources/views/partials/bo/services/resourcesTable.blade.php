<div class="container">
    <h1 style="margin: 1% 0 1% 0;">Create a new service</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin: 3% 0 3% 0;" action="/resources" method="POST">
        @csrf
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{old('title')}}">
        <br>
        <label for="">Content</label>
        <textarea class="form-control" name="content" id="" cols="30" rows="5">{{old('content')}}</textarea>
        <br>
        <label for="">Icon</label>
        <select class="form-control" name="icon_id" id="">
            @foreach ($icons as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
        <br>
        <button class="btn btn-info" type="submit">Create</button>
    </form>
    <h1 style="margin: 1% 0 1% 0;">Lists of the services</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($resourcesAll as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>
            <a class="btn btn-success" href="/resources/{{$item->id}}/edit">Edit</a>
            </td>
            <td>
            <form action="/resources/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>