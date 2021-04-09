<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Job</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $item)
      <tr>
        <th scope="row"><img height="50" src="{{asset('img/team/'.$item->photos->src)}}" alt=""></th>
        <td>{{$item->surname}} {{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->roles->name}}</td>
        <td>{{$item->jobs->name}}</td>
        @if ($item->approuved == false)
          <td>
            <form action="/usersPending/{{$item->id}}" method="POST">
              @csrf
              <button class="btn btn-success" type="submit">Validate</button>
            </form>
          </td>
        @else
          <td>
            <a class="btn btn-info" href="/users/{{$item->id}}">Details</a>
          </td>
          <td>
            <form action="/users/{{$item->id}}" method="POST">
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