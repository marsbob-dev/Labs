<!-- Promotion section -->
<div class="promotion-section" id="newsletterId">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h2>{{$stands->title}}</h2>
                <p>{{$stands->paragraph}}</p>
            </div>
            <div class="col-md-5">
                <div class="promo-btn-area">
                    @if ($errors->newsletter->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->newsletter->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('successNewsletter'))
                        <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <h2 class="text-center">{{$newsletters->title}}</h2>
                    <!-- newsletter form -->
                    <form class="nl-form d-flex" action="/newsletter" method="POST">
                        @csrf
                        <input type="text" name="email" placeholder="{{$newsletters->placeholder}}">
                        <button type="submit" class="site-btn btn-2">{{$newsletters->btn}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Promotion section end-->