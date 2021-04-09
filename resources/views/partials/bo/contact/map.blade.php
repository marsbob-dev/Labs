<div style="margin-top: 2%;" class="container">
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
  <h1 style="margin-bottom: 1%;">Change the linked address</h1>
  <form style="margin-bottom: 50px;" action="/map/{{$map->id}}" method="POST">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" name="address" value="{{old('address') ? old('address') : $map->address}}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>