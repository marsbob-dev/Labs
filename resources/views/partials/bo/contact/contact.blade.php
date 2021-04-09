<div style="margin: 0; padding: 0;" class="row">
    <div style="margin: 0;" class="col-sm-6">
        <h1 class="text-center">Email Subjects</h1>
        <h3 style="margin: 1% 0 1% 0;">Create a new subject</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form style="margin: 3% 0 3% 0;" action="/subjects" method="POST">
            @csrf
            <label for="">New Email Subject</label>
            <input class="form-control" type="text" name="subject" value="{{old('subject')}}">
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
              @foreach ($emailSubjects as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->subject}}</td>
                    <td>
                        <a class="btn btn-success" href="/subjects/{{$item->id}}/edit">Edit</a>
                    </td>
                    <td>
                        <form action="/subjects/{{$item->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
    <div style="margin: 0%;" class="col-sm-6">
        <h1 class="text-center">Contact</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form style="margin: 3% 0 3% 0;" action="/contact/{{$contacts->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="">Description Edit</label>
            <input class="form-control" type="text" name="paragraph" value="{{old('paragraph') ? old('paragraph') : $contacts->paragraph}}">
            <br>
        <h3 style="margin: 1% 0 1% 0;">Address</h3>
            <label for="">Address</label>
            <input class="form-control" type="text" name="address1" value="{{old('address1') ? old('address1') : $contacts->address1}}">
            <input class="form-control" type="text" name="address2" value="{{old('address2') ? old('address2') : $contacts->address2}}">
            <label for="">Phone</label>
            <input class="form-control" type="text" name="phone" value="{{old('phone') ? old('phone') : $contacts->phone}}">
            <label for="">Email</label>
            <input class="form-control" type="text" name="email" value="{{old('email') ? old('email') : $contacts->email}}">
            <br>
            <button class="btn btn-success" type="submit">Edit</button>
        </form>
    </div>
</div>