<div style="margin-top: 10%;" class="container">
    <h1 style="margin-bottom: 1%;">Edit the resource</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin-bottom: 50px;" action="/resources/{{$resource->id}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" value="{{old('title') ? old('title') : $resource->title}}">
        <br>
        <label for="">Content</label>
        <textarea class="form-control" name="content" id="" cols="30" rows="5">{{old('content') ? old('content') : $resource->content}}</textarea>
        <br>
        <label for="">Icon</label>
        <select class="form-control" name="icon_id" id="">
            @foreach ($icons as $item)
                <option value="{{$item->id}}" {{$item->id == $resource->icon_id ? 'selected' : ''}}>{{$item->name}}</option>
            @endforeach
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>