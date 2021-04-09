<h4>Number of subscribers : {{count($subscribers)}}</h4>
<table class="table mb-0">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($subscribers as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->email}}</td>
            <td>
              <form action="/subscribers/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>