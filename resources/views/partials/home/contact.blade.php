<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>{{$contacts->title}}</h2>
                </div>
                <p>{{$contacts->paragraph}}</p>
                <h3 class="mt60">{{$contacts->subtitle}}</h3>
                <p class="con-item">{{$contacts->address1}} <br> {{$contacts->address2}} </p>
                <p class="con-item">{{$contacts->phone}}</p>
                <p class="con-item">{{$contacts->email}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull" id="formQueries">
                @if ($errors->witness->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->witness->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- if error --}}
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                {{-- if success --}}
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form class="form-class" action="/witness" method="POST" id="con_form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="{{$placeholders->name}}">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="{{$placeholders->email}}">
                        </div>
                        <div class="col-sm-12">
                            <select name="subject_id" id="">
                                @foreach ($emailSubjects as $item)
                                    <option value="{{$item->id}}">{{$item->subject}}</option>
                                @endforeach
                            </select>
                            <textarea name="message" placeholder="{{$placeholders->message}}"></textarea>
                            <button type="submit" class="site-btn">{{$placeholders->btn}}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->