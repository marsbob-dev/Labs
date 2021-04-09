<div style="margin-top: 11%" class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 class="text-center">Edit introduction</h1>
    <form style="margin: 3% 0 3% 0;" action="/introduction/{{$introductions->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{old('title') ? old('title') : $introductions->title}}">
        <small>Mettez entre parenthèses la partie du titre que vous désirez surligner en vert.</small>
        <br> <br>
        <label for="">Paragraphs</label>
        <textarea class="form-control" name="p1" id="" cols="30" rows="5">{{old('p1') ? old('p1') : $introductions->p1}}</textarea>
        <textarea class="form-control" name="p2" id="" cols="30" rows="5">{{old('p2') ? old('p2') : $introductions->p2}}</textarea>
        <br>
        <label for="">Video url</label>
        <input class="form-control" type="text" name="url" value="{{old('url') ? old('url') : $introductions->url}}">
        <br>
        <button class="btn btn-success" type="submit">Edit</button>
    </form>
</div>