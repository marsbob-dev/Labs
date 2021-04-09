@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form style="margin: 3% 0 3% 0;" action="/jobs" method="POST">
  @csrf
  <label for="">New Job</label>
  <input class="form-control" type="text" name="name" value="{{old('name')}}">
  <br>
  <button class="btn btn-info" type="submit">Create</button>
</form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($jobs as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>
              <a class="btn btn-success" href="/jobs/{{$item->id}}/edit">Edit</a>
            </td>
            @if ($item->id == 1)
                <td></td>
            @else
              <td>
                <form action="/jobs/{{$item->id}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            @endif
        </tr>
      @endforeach
    </tbody>
</table>