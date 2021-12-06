@extends('layouts.frontend')
@section('title', 'Cleaning Service')
@section('content')
<!-- Main Area Start -->
<main role="main" class="middle-content-area">	

	<section class="SC-hero-bg py-5 text-center"  style="background: url('{{ asset('public/frontend/images/banner2.jpg') }}') no-repeat center center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 col-sm-12">
					<nav aria-label="breadcrumb" id="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Squeaky Cleaning</a></li>
							<li class="breadcrumb-item active">Service</li> 
						</ol>
					</nav>
					<h1>Service</h1>
				</div>
			</div>	
		</div>	
	</section>
	<section class="SC-fuss-about py-5"> 
		<div class="container">
			<div class="row mt-2">
				<div class="col-md-12">
					<h3>How much will your job cost?</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat orci non volutpat vulputate</p> 
				</div>
			</div>	
			<div class="row mt-4">
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img6.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content">
									<a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<h6>Car Service costs</h6>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img7.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content">
									<a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<h6>Tax Accountant costs</h6>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img8.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content">
									<a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<h6>Car Air Conditioner costs</h6>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img9.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content">
									<a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<h6>Car Window Tinting costs</h6>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img6.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content">
									<a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<h6>Car Service costs</h6>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img7.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content">
									<a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<h6>Tax Accountant costs</h6>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img8.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content">
									<a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<h6>Car Air Conditioner costs</h6>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img9.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content">
									<a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<h6>Car Window Tinting costs</h6>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
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
