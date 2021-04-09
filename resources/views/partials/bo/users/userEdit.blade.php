<div style="margin-top: 2%;" class="container">
    <h1 style="margin-bottom: 1%;">Edit the user</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form style="margin-bottom: 50px;" action="/users/{{$user->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="{{old('name') ? old('name') : $user->name}}">
        </div>
        <div class="form-group">
            <label>Surname</label>
            <input type="text" class="form-control" name="surname" value="{{old('surname') ? old('surname') : $user->surname}}">
        </div>
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" class="form-control" name="email" value="{{old('email') ? old('email') : $user->email}}">
        </div>
        <div class="form-group">
            <label>Job</label>
            <select class="form-control" name="job_id" id="">
                @foreach ($jobs as $item)
                    <option value="{{$item->id}}" {{$item->id == $user->job_id ? 'selected' : ''}}>{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Picture</label>
            <input type="file" class="form-control" name="src">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="{{old('description') ? old('description') : $user->description}}">
        </div>
        {{-- If admin show these inputs --}}
        @if (Auth::user()->role_id == 1)
            <div class="form-group">
                <label>Role</label>
                <select class="form-control" name="role_id" id="">
                    @foreach ($roles as $item)
                        <option value="{{$item->id}}" {{$item->id == $user->role_id ? 'selected' : ''}}>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password">
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>