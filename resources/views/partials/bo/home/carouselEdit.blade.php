<div style="margin-top: 5%;" class="container">
    <h1 style="margin: 1% 0 1% 0;">Edit a slide</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin: 3% 0 3% 0;" action="/carousel/{{$carrousel->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Paragraph</label>
        <input class="form-control" type="text" name="paragraph" value="{{old('paragraph') ?  old('paragraph') : $carrousel->paragraph}}">
        <br>
        <label for="">Picture</label>
        <input class="form-control" type="file" name="src">
        <small>Choisissez une image en haute définition pour éviter toute déformation.</small>
        <br>
        <button class="btn btn-info" type="submit">Edit</button>
    </form>
</div>