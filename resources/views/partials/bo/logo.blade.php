<div style="margin-top: 2%;">
    <h5>Change the logo</h5>
    <form style="margin-bottom: 50px;" action="/logo/{{$logo->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <input type="file" class="form-control" name="src">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>