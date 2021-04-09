<h5 style="margin: 1% 0.5% 1% 0.5%;">Pendings comments</h5>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">User</th>
        <th scope="col">Email</th>
        <th scope="col">Post Name</th>
        <th scope="col">Content</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($comments->where('approuved', 0) as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->posts->title}}</td>
            <td>{{$item->content}}</td>
            <td>
              <form action="/commentsValidate/{{$item->id}}" method="POST">
                @csrf
                <button class="btn btn-success" type="submit">Validate</button>
              </form>
            </td>
            <td>
              <form action="/comments/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
        </tr>
      @endforeach
    </tbody>
</table>