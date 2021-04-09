<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Labs - Design Studio</title>
    
    <!-- Favicon -->
	<link href="{{asset('img/favicon.ico')}}" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}"/>
	<link rel="stylesheet" href="{{asset('css/style.css')}}"/>

</head>
<body>
    <!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>

    <!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img height="32" src="{{asset('img/'.$logo->src)}}" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				@foreach ($navs as $item)
					@if ($item->link === "home")
						<li class=""><a class="text-capitalize" href="/">{{$item->link}}</a></li>
					@elseif($item->link === "blog")
						<li class="active"><a class="text-capitalize" href="/{{$item->link}}">{{$item->link}}</a></li>
					@else
						<li class=""><a class="text-capitalize" href="/{{$item->link}}">{{$item->link}}</a></li>
					@endif
				@endforeach
				@if (Auth::check())
                <li><a class="text-capitalize" href="/home">Back Office</a></li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btnLogOut" style="background: none;" type="submit">Log Out</button>
                    </form>
                </li>
            @endif
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	@if (Route::getCurrentRoute()->uri() != '/')
		<!-- Page header -->
		<div class="page-top-section">
			<div class="overlay"></div>
			<div class="container text-right">
				<div class="page-info">
					<h2 class="text-capitalize">{{Route::getCurrentRoute()->uri() == 'post/{post}' || 'postsFilter/{id}' ? 'Blog' : Route::getCurrentRoute()->uri()}}</h2>
					<div class="page-links">
						<a href="/">Home</a>
						<span class="text-capitalize">{{Route::getCurrentRoute()->uri() == 'post/{post}' || 'postsFilter/{id}' ? 'Blog' : Route::getCurrentRoute()->uri()}}</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Page header end-->
	@endif

    <!-- Page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					@yield('content')
				</div>

				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					@include('partials.blog.all.search')
					@include('partials.blog.all.categories')
					@include('partials.blog.all.tags')
				</div>
			</div>
		</div>
	</div>
	<!-- Page section end-->
    
    @include('partials.newsletter')

	@include('partials.footer')

    <!--====== Javascripts & Jquery ======-->
	<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('js/circle-progress.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>