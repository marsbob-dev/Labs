<div class="mt-3 pb-3">
  <h3>Posts List</h3>
  <table class="table mb-0 border">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $item)
          <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->title}}</td>
              <td>{{$item->authors->name}} {{$item->authors->surname}}</td>
              <td>
                <a class="btn btn-info" href="/post/{{$item->id}}/edit">Details</a>
              </td>
              @can('editPost', $item)
                <td>
                  <form action="/post/{{$item->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
              @else
                <td></td>
              @endcan
          </tr>
        @endforeach
      </tbody>
  </table>
</div>