<div style="margin-top: 5%" class="container">
    <h1 class="text-center">Edit Stand Out</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin: 3% 0 3% 0;" action="/standOut/{{$stands->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{old('title') ? old('title') : $stands->title}}">
        <br>
        <label for="">Paragraph</label>
        <input class="form-control" type="text" name="paragraph" value="{{old('paragraph') ? old('paragraph') : $stands->paragraph}}">
        <br>
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>