<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="description" content="">
<meta name="author" content="">
<title>@yield('title')</title>
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- Custom styles for this site -->
<link href="{{ asset('public/frontend/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('public/frontend/css/responsive.css') }}" rel="stylesheet">
</head>

<body class="home-page">
	<!-- Header Area Start -->
	<header class="headerSection">
		<!-- Navbar Area Start -->
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a href="{{ url('/') }}" class="logo-img"><img src="{{ asset('public/frontend/images/logo.png') }}" alt="" class="img-fluid" /></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Post a job</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Business directory</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Job cost guides</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inspiration</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Blog</a></li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Log in</a></li>
						<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Register Business</a></li>
					</ul>	
				</div>
			</div>
		</nav>	
		<!-- End of Navbar Area -->
		<div id="where-to-do-gets-done">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9 col-xl-6 col-lg-7">
						<div class="blue-bg">
							<h1 class="mb-4 text-white">Where to-do gets done</h1>
							<form action="#">
								<div class="row">
									<div class="col-md-9">
										<div class="form-group">
											<label for="service">What Service do you need</label>
											<input type="text" class="form-control" placeholder="type service here..." id="service" required>
										</div>
									</div>	
									<div class="col-md-3">
										<div class="form-group">	
											<label for="location">Location</label>
											<input type="password" class="form-control" placeholder="postecode" id="location" required>
										</div>
									</div>	
								</div>		
								<button type="submit" class="btn btn-primary">Get free quotes</button>
							</form> 
						</div>
					</div>	
				</div>		
			</div>	
		</div>	
	</header>	
	<!-- ./ End of Header Area -->
		@yield('content')
		<!-- Footer Area Start -->	
	<footer class="footer-widget">	
		<div class="RM-footer-bg py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-widget-title">
							<h5>Customer</h5>
						</div>
						<div class="footer-widget-list text-item1">
							<ul>
								<li><a href="{{ url('/') }}">Post a job</a></li>
								<li><a href="{{ url('/') }}">Business directory</a></li>
								<li><a href="{{ url('/') }}">Job cost guides</a></li>
								<li><a href="{{ url('/') }}">Inspiration</a></li>
								<li><a href="{{ url('/') }}">Oneflare blog</a></li>
								<li><a href="{{ url('/') }}">Help</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-widget-title">
									<h5>Business</h5>
								</div>
								<div class="footer-widget-list text-item2">
									<ul>
										<li><a href="{{ url('/') }}">Register my business</a></li>
										<li><a href="{{ url('/') }}">Awards</a></li>
										<li><a href="{{ url('/') }}">Business centre</a></li>
										<li><a href="{{ url('/') }}">Win work guide</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-widget-title">
									<h5>Cities</h5>
								</div>
								<div class="footer-widget-list text-item3">
									<ul>
										<li><a href="{{ url('/') }}">Sydney</a></li>
										<li><a href="{{ url('/') }}">Melbourne</a></li>
										<li><a href="{{ url('/') }}">Brisbane</a></li>
										<li><a href="{{ url('/') }}">Perth</a></li>
										<li><a href="{{ url('/') }}">Adelaide</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-widget-title">
									<h5>About Squeaky Cleaning</h5>
								</div>
								<div class="footer-widget-list text-item3">
									<ul>
										<li><a href="{{ url('/') }}">About us</a></li>
										<li><a href="{{ url('/') }}">Reviews</a></li>
										<li><a href="{{ url('/') }}">How it works</a></li>
										<li><a href="{{ url('/') }}">Our team</a></li>
										<li><a href="{{ url('/') }}">We're hiring</a></li>
										<li><a href="{{ url('/') }}">Contact us</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-widget-title">
									<h5>Download our apps</h5>
								</div>
								<div class="footer-widget-list text-item3 mt-5">
									<ul>
										<li><a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/app-store.png') }}" alt="" class="img-fluid d-block w-75"/></a></li>
										<li><a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/google-pay.png') }}" alt="" class="img-fluid d-block w-75" /></a></li>
									</ul>
								</div>
							</div>
						</div>	
					</div>		
				</div>
			</div>	
		</div>	
		<div class="copyright py-2">
			<div class="container">
				<hr>
				<div class="row">
					<div class="col-md-9"> 
						<p><strong>Squeaky Cleaning</strong> &copy; Squeaky Cleaning Pty Ltd. All Rights Reserved.</p>
					</div>
					<div class="col-md-3"> 
						<ul>
							<li><a href="{{ url('/') }}">Terms of use</a></li>
							<li><a href="{{ url('/') }}">Privacy policy</a></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>	
	</footer>
<!-- ./ End Of Footer Area -->	
<!-- Bootstrap core JavaScript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>