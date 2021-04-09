<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin: 3% 0 3% 0;" action="/testimonials" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input class="form-control" type="text" name="name" value="{{old('name')}}">
        <br>
        <label for="">Surname</label>
        <input class="form-control" type="text" name="surname" value="{{old('surname')}}">
        <br>
        <label for="">Job</label>
        <input class="form-control" type="text" name="job" value="{{old('job')}}">
        <br>
        <label for="">Content</label>
        <textarea name="content" class="form-control" id="" cols="30" rows="10">{{old('content')}}</textarea>
        <br>
        <label for="">Avatar</label>
        <input type="file" class="form-control" name="src" id="">
        <br>
        <button class="btn btn-info" type="submit">Create</button>
    </form>
</div>