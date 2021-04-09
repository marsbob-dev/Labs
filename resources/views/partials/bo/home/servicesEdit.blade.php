<div style="margin-top: 2%;" class="container">
    <h1 style="margin: 1% 0 1% 0;">Edit title & button from Services</h1>
    @if ($errors->services->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->services->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin: 3% 0 3% 0;" action="/services/{{$services->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{old('title') ? old('title') : $services->title}}">
        <small>Put between paranthesis the part of the title you want in green</small>
        <br>
        <label for="">Button</label>
        <input class="form-control" type="text" name="btn" value="{{old('btn') ? old('btn') : $services->btn}}">
        <br>
        <button class="btn btn-info" type="submit">Edit</button>
    </form>
    <h1 style="margin: 1% 0 1% 0;">Edit title from Phone</h1>
    @if ($errors->phone->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->phone->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin: 3% 0 3% 0;" action="/phones/{{$services->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{old('title') ? old('title') : $phones->title}}">
        <small>Put between paranthesis the part of the title you want in green</small>
        <br>
        <button class="btn btn-info" type="submit">Edit</button>
    </form>
</div>