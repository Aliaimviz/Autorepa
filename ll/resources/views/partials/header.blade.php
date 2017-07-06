<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Auto Repa</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <meta name="_token" content="{{ Session::token() }}"/>		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    	<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
	</head>
	<body>
	<header id="header">
		<div id="container">
		<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-3 col-lg-3 float-left">
					<div class="logo">
					<a href="{{route('home')}}"><img src="{{ asset('img/auto-repa-logo.png') }}" alt="logo"></a></div>
				</div>
				<div class="main_menu col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
					<ul class="main-nav">
						<li><a href="{{route('home')}}">Home</a></li>
						<li><a href="{{ route('about_us') }}">About us</a></li>
						<li><a href="{{route('concept') }}">Concept</a></li>
						@if(Auth::check())
						<li><a href="{{ route('garage_profile') }}">Profile</a></li>
						@endif
					</ul>
				</div>
				<div class="main_menu col-xs-12 col-sm-12 col-md-3 col-lg-3 float-left">
					<div class="lang">
						<ul>
							<li><a href="#">FR</a></li>
							<li><a href="#">DE</a></li>
							<li><a href="http://110.37.221.34:7777/auto/">EN</a></li>
						</ul>
					</div>
					<div class="login">
					<!-- 	<a href="#"><i class="fa fa-lock"></i>  Login  <i class="fa fa-caret-down"></i></a> -->
						<div class="dropdown">
						 @if(Auth::check())
						    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ Auth::user()->username }}
						   </button>
						 @else
						    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="fa fa-lock"></span> Login 
						   </button>						 
						 @endif	


						    <ul class="dropdown-menu">
						     @if(Auth::check())
						      <li><a href="{{ route('logout') }}">Logout</a></li>
						     @else
						      <li><a href="{{ route('signup_view') }}">Sign up</a></li>
						      <li><a href="{{ route('login_view') }}">Login</a></li>						      
						      @endif  
						    </ul>
						</div>
					</div>
				</div>
		</div>		
		</div>
	</header>