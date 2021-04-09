<div style="margin-top: 2%;" class="container shadow p-3">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 style="margin-bottom: 1%;">New post</h1>
    <form style="margin-bottom: 50px;" action="/post" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select class="form-control" name="category_id" id="">
                @foreach ($categories as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tags</label> <br>
            @foreach ($tags as $item)
                <input type="checkbox" name="tag[]" value="{{$item->id}}">
                <label class="text-capitalize" for="">{{$item->name}}</label> <br>
            @endforeach
        </div>
        <div class="form-group">
            <label>Content</label>
            <textarea class="form-control" name="content" id="" cols="30" rows="10">{{old('content')}}</textarea>
            <small>If you wish to split your text in paragraph just put a "/" between them</small>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="src">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>