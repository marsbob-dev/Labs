<div style="margin-top: 2%;" class="container">
    <h1 style="margin-bottom: 1%;">Edit the role</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin-bottom: 50px;" action="/roles/{{$role->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" name="name" value="{{old('name') ? old('name') : $role->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>