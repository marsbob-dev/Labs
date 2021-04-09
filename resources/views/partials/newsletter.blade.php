<!-- newsletter section -->
<div class="newsletter-section spad" id="newsletterId">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2>{{$newsletters->title}}</h2>
            </div>
            <div class="col-md-9">
                <!-- newsletter form -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form class="nl-form" action="/newsletter" method="POST">
                    @csrf
                    <input type="text" name="email" placeholder="{{$newsletters->placeholder}}">
                    <button class="site-btn btn-2">{{$newsletters->btn}}</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- newsletter section end-->