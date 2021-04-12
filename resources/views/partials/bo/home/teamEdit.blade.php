<div style="margin-top: 5%;" class="container">
    <h1 style="margin: 1% 0 1% 0;">Edit title</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin: 3% 0 3% 0;" action="/team/{{$teams->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{old('title') ? old('title') : $teams->title}}">
        <small>Mettez entre parenthèses la partie du titre que vous désirez surligner en vert.</small>
        <br>
        <button class="btn btn-info" type="submit">Edit</button>
    </form>
</div>