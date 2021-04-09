<!-- Commert Form -->
<div class="row">
    <div class="col-md-9 comment-from">
        <h2>Leave a comment</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-class" action="/comments", method="POST">
            @csrf
            <div class="row">
                @if (!Auth::check())
                    <div class="col-sm-6">
                        <input type="text" name="name" placeholder="{{$placeholders->name}}" value="{{old('name')}}">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="email" placeholder="{{$placeholders->email}}" value="{{old('email')}}">
                    </div>
                @endif
                <div class="col-sm-12">
                    <textarea name="content" placeholder="{{$placeholders->message}}">{{old('content')}}</textarea>
                    <button type="submit" class="site-btn">{{$placeholders->btn}}</button>
                </div>
            </div>
        </form>
    </div>
</div>