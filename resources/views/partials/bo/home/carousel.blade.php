<div class="container">
    <h1 style="margin: 1% 0 1% 0;">Create a new slide</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin: 3% 0 3% 0;" action="/carousel" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">New Paragraph</label>
        <input class="form-control" type="text" name="paragraph" value="{{old('paragraph')}}">
        <br>
        <label for="">New Picture</label>
        <input class="form-control" type="file" name="src">
        <small>Choose a picture with a big size and resolution if you don't want the carousel to shrink</small>
        <br>
        <button class="btn btn-info" type="submit">Create</button>
    </form>
    <h1>Edit your slides</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Picture</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($carrousels as $item)
            <tr>
                <td><img height="100" src="{{asset('img/'.$item->src)}}" alt=""></td>
                <td>
                    <a class="btn btn-success" href="/carousel/{{$item->id}}/edit">Edit</a>
                </td>
                <td>
                    <form action="/carousel/{{$item->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="/carouselMain/{{$item->id}}" method="POST">
                        @csrf
                        <button class="btn btn-warning" type="submit">Main img</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>