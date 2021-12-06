@extends('layouts.frontend')
@section('title', 'About Us')
@section('content')
<!-- Main Area Start -->
<main role="main" class="middle-content-area">	

	<section class="SC-hero-bg py-5 text-center"  style="background: url('{{ asset('public/frontend/images/banner2.jpg') }}') no-repeat center center">
		<div class="container">
			<div class="row py-5">
				<div class="col-md-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 col-sm-12">
					<!--<nav aria-label="breadcrumb" id="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Squeaky Cleaning</a></li>
							<li class="breadcrumb-item active">About Us</li> 
						</ol>
					</nav>-->
					<h1>Squeaky Cleaning exists to connect quality businesses with the right customers</h1> 
				</div>
			</div>	
		</div>	
	</section>
	<section class="SC-partner-logo py-4">
		<div class="container">
			<div class="row">
				<div class="col">
					<a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/img1.jpg') }}" alt="" class="img-fluid mx-auto d-block" /></a>
				</div>
				<div class="col">
					<a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/img1.jpg') }}" alt="" class="img-fluid mx-auto d-block" /></a>
				</div>
				<div class="col">
					<a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/img1.jpg') }}" alt="" class="img-fluid mx-auto d-block" /></a>
				</div>
				<div class="col">
					<a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/img1.jpg') }}" alt="" class="img-fluid mx-auto d-block" /></a>
				</div>
				<div class="col">
					<a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/img1.jpg') }}" alt="" class="img-fluid mx-auto d-block" /></a>
				</div>
			</div>
		</div>
	</section>
	<section class="SC-about-us pt-5"> 
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 text-center">
					<h2 class="mb-4">About us</h2>
					<p>Donec elit ante, commodo sit amet nibh quis, consectetur placerat metus. Nunc eget nisi eget ante hendrerit aliquet ac sed augue. Ut vitae sagittis quam. Fusce mollis massa tellus, tincidunt rutrum diam euismod quis. Etiam eget vestibulum est. Aenean maximus augue ut vestibulum sodales. Quisque sed felis sollicitudin, vestibulum augue et, porttitor elit. Donec vel velit nulla. Mauris a ligula a massa varius rutrum vitae id felis. Curabitur euismod velit eu tincidunt dignissim. Etiam lectus lorem, tempor tincidunt lectus nec, viverra varius est. Aliquam aliquet lectus et mattis feugiat. Nunc fringilla elementum convallis. Sed pharetra auctor risus vel molestie. Aliquam iaculis ipsum erat, sit amet laoreet quam tempor sit amet. </p>
					<p>Donec vel velit nulla. Mauris a ligula a massa varius rutrum vitae id felis. Curabitur euismod velit eu tincidunt dignissim. Etiam lectus lorem, tempor tincidunt lectus nec, viverra varius est. Aliquam aliquet lectus et mattis feugiat. Nunc fringilla elementum convallis. Sed pharetra auctor risus vel molestie. Aliquam iaculis ipsum erat, sit amet laoreet quam tempor sit amet. </p>
				</div>
			</div>	
			<hr>	
		</div>	
	</section>	
	<section class="SC-what-we-do pb-5 pt-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-8 col-xl-8">
					<h2>What we do</h2>
					<p> Fusce mollis massa tellus, tincidunt rutrum diam euismod quis. Etiam eget vestibulum est. Aenean maximus augue ut vestibulum sodales. Quisque sed felis sollicitudin, vestibulum augue et, porttitor elit.</p>
					<p>Mauris a ligula a massa varius rutrum vitae id felis. Curabitur euismod velit eu tincidunt dignissim. Etiam lectus lorem, tempor tincidunt lectus nec, viverra varius est. Aliquam aliquet lectus et mattis feugiat. Nunc fringilla elementum convallis. Sed pharetra auctor risus vel molestie.</p>
					<img src="{{ asset('public/frontend/images/image4.jpg') }}" alt="" class="img-fluid mx-auto d-block w-100" />
				</div>
				<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
					<h4>Fast facts</h4>
					<ul class="fast-facts-lits">
						<li>
							<div class="icon">
								<i class="far fa-comment-alt"></i>
							</div>	
							<div class="fast-content">
								<h6>10K+</h6>
								<span>Average number of jobs posted per week</span>
							</div>	
						</li>
						<li>
							<div class="icon">
								<i class="far fa-user"></i>
							</div>	
							<div class="fast-content">
								<h6>1.8M+</h6>
								<span>Matches made between businesses and customers</span>
							</div>	
						</li>
						<li>
							<div class="icon">
								<i class="fas fa-mobile-alt"></i>
							</div>	
							<div class="fast-content">
								<h6>3M+</h6>
								<span>Visitors to example@gmail.com per month</span>
							</div>	
						</li>
						<li>
							<div class="icon">
								<i class="far fa-smile"></i>
							</div>	
							<div class="fast-content">
								<h6>55+</h6>
								<span>Passionate employees based in Sydney, Australia</span>
							</div>	
						</li>
					</ul>
				</div>
			</div>	
			<hr>		
		</div>	
	</section>	
	<section class="SC-fuss-about pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-lg-7 col-xl-8">
					<h2>What's all the fuss about?</h2>	
					<h4>Every day, thousands of Australians come to Squeaky Cleaning to make connections with the right experts.</h4>
				</div>
				<div class="col-md-5 col-sm-5 col-lg-5 col-xl-4">
					<div class="row">
						<div class="col-6 border-right">
							<div class="google-rating">
								<h6>Avg Rating</h6>
								<h3>4 <sup><i class="fas fa-star"></i></sup></h3>
								<p>based from <br><span>465 reviews</span> on</p>
								<img src="{{ asset('public/frontend/images/img13.png') }}" alt="" class="img-fluid d-block w-50" />
							</div>
						</div>
						<div class="col-6 pl-5">
							<div class="google-rating">
								<h6>Avg Rating</h6>
								<h3>4.6 <sup><i class="fas fa-star"></i></sup></h3>
								<p>based from <br><span>5405 reviews</span> on</p>
								<img src="images/img12.jpg" alt="" class="img-fluid d-block" />
							</div>
						</div>
					</div>		
				</div>
			</div>	
			<div class="row mt-5">
				<div class="col-md-12">
					<img src="{{ asset('public/frontend/images/google-review.jpg') }}" alt="" class="img-fluid mx-auto d-block w-100" />
				</div>
			</div>	
		</div>
	</section>		
	<section class="SC-get-free-quote py-5 red-bg">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="text-white">Have sometingto do? Get in done today</h2>
					<a href="{{ url('/') }}" class="white-btn">Get free quotes</a>
				</div>
			</div>	
		</div>
	</section>	
</main>	
<!-- ./  End of Main Area -->
@endsection
