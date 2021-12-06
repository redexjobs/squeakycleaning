@extends('layouts.frontend')
@section('title', 'Cleaners')
@section('content')
<!-- Main Area Start -->
<main role="main" class="middle-content-area">	
	<section class="SC-hero-bg py-5 text-center"  style="background: url('{{ asset('public/frontend/images/banner2.jpg') }}') no-repeat center center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 col-sm-12">
					<h1>Best cleaners near you</h1>
					<div class="white-bg">
						<h3 class="mb-4">Where do you need a cleaner?</h3>
						<form action="">
							<div class="row">
								<div class="col-md-9">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="e.g. Sydney, 2000" required="">
									</div>
								</div>	
								<div class="col-md-3">
									<button type="submit" class="btn btn-primary">Go</button>
								</div>	
							</div>		
						
						</form> 
					</div>
				</div>
			</div>	
		</div>	
	</section>
	<section class="SC-MainCitiesStyled py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li><a href="{{ url('/') }}">Sydney</a></li>
						<li><a href="{{ url('/') }}">Newcastle</a></li>
						<li><a href="{{ url('/') }}">Melbourne</a></li>
						<li><a href="{{ url('/') }}">Brisbane</a></li>
						<li><a href="{{ url('/') }}">Cairns</a></li>
						<li><a href="{{ url('/') }}">Adelaide</a></li>
						<li><a href="{{ url('/') }}">Perth</a></li>
						<li><a href="{{ url('/') }}">Hobart</a></li>
						<li><a href="{{ url('/') }}">Canberra</a></li>
					</ul>
				</div>
			</div>	
		</div>	
	</section>	
	<section class="SC-cleaner-area common-code py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" id="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Squeaky Cleaning</a></li>
							<li class="breadcrumb-item active">Cleaner</li>
						</ol>
					</nav>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Top cleaners near you</h3>
					<p>Browse top Cleaner experts with top ratings and reviews</p>
					<a href="{{ url('/') }}" class="red-btn">Get Quotes</a>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="card">
						<div class="row justify-content-left d-flex">
							<div class="col-md-3 d-flex flex-column">
								<div class="rating-box">
									<h1 class="pt-4">4.0</h1>
									<p class="">out of 5</p>
								</div>
								<div> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-active mx-1"></span> <span class="fa fa-star star-inactive mx-1"></span> </div>
							</div>
							<div class="col-md-9">
								<div class="rating-bar0 justify-content-center">
									<table class="text-left mx-auto">
										<tr>
											<td class="rating-label">Excellent</td>
											<td class="rating-bar">
												<div class="bar-container">
													<div class="bar-5"></div>
												</div>
											</td>
											<td class="text-right">123</td>
										</tr>
										<tr>
											<td class="rating-label">Good</td>
											<td class="rating-bar">
												<div class="bar-container">
													<div class="bar-4"></div>
												</div>
											</td>
											<td class="text-right">23</td>
										</tr>
										<tr>
											<td class="rating-label">Average</td>
											<td class="rating-bar">
												<div class="bar-container">
													<div class="bar-3"></div>
												</div>
											</td>
											<td class="text-right">10</td>
										</tr>
										<tr>
											<td class="rating-label">Poor</td>
											<td class="rating-bar">
												<div class="bar-container">
													<div class="bar-2"></div>
												</div>
											</td>
											<td class="text-right">3</td>
										</tr>
										<tr>
											<td class="rating-label">Terrible</td>
											<td class="rating-bar">
												<div class="bar-container">
													<div class="bar-1"></div>
												</div>
											</td>
											<td class="text-right">0</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="card mb-4">
						<div class="row d-flex">
							<div class=""> <img class="profile-pic" src="{{ asset('public/frontend/images/img9.png') }}" alt="" /> </div>
							<div class="d-flex flex-column">
								<h5 class="mt-2 mb-0">John Doe</h5>
								<div>
									<p class="text-left"><span class="text-muted">4.0</span> <span class="fa fa-star star-active ml-3"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-inactive"></span></p>
								</div>
							</div>
							<div class="ml-auto">
								<p class="text-muted pt-5 pt-sm-3"><a href="" class="red-btn">Request quotes</a></p>
							</div>
						</div>
						<div class="row text-left">
							<h6 class="blue-text mt-3">"An awesome activity to experience"</h6>
							<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis eget nibh nec vestibulum. Maecenas in imperdiet ligula. Integer ultricies vulputate pharetra. Nunc dui diam, semper ut eleifend sit amet, commodo eu lectus. Fusce placerat in mi vitae posuere. </p>
						</div>	
					</div>
					<div class="card mb-4">
						<div class="row d-flex">
							<div class=""> <img class="profile-pic" src="{{ asset('public/frontend/images/img9.png') }}" alt="" /> </div>
							<div class="d-flex flex-column">
								<h5 class="mt-2 mb-0">John Doe</h5>
								<div>
									<p class="text-left"><span class="text-muted">4.0</span> <span class="fa fa-star star-active ml-3"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-inactive"></span></p>
								</div>
							</div>
							<div class="ml-auto">
								<p class="text-muted pt-5 pt-sm-3"><a href="" class="red-btn">Request quotes</a></p>
							</div>
						</div>
						<div class="row text-left">
							<h6 class="blue-text mt-3">"An awesome activity to experience"</h6>
							<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis eget nibh nec vestibulum. Maecenas in imperdiet ligula. Integer ultricies vulputate pharetra. Nunc dui diam, semper ut eleifend sit amet, commodo eu lectus. Fusce placerat in mi vitae posuere. </p>
						</div>	
					</div>
					<div class="card mb-4">
						<div class="row d-flex">
							<div class=""> <img class="profile-pic" src="{{ asset('public/frontend/images/img9.png') }}" alt="" /> </div>
							<div class="d-flex flex-column">
								<h5 class="mt-2 mb-0">John Doe</h5>
								<div>
									<p class="text-left"><span class="text-muted">4.0</span> <span class="fa fa-star star-active ml-3"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-inactive"></span></p>
								</div>
							</div>
							<div class="ml-auto">
								<p class="text-muted pt-5 pt-sm-3"><a href="" class="red-btn">Request quotes</a></p>
							</div>
						</div>
						<div class="row text-left">
							<h6 class="blue-text mt-3">"An awesome activity to experience"</h6>
							<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis eget nibh nec vestibulum. Maecenas in imperdiet ligula. Integer ultricies vulputate pharetra. Nunc dui diam, semper ut eleifend sit amet, commodo eu lectus. Fusce placerat in mi vitae posuere. </p>
						</div>	
					</div>
					<div class="card mb-4">
						<div class="row d-flex">
							<div class=""> <img class="profile-pic" src="{{ asset('public/frontend/images/img9.png') }}" alt="" /> </div>
							<div class="d-flex flex-column">
								<h5 class="mt-2 mb-0">John Doe</h5>
								<div>
									<p class="text-left"><span class="text-muted">4.0</span> <span class="fa fa-star star-active ml-3"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-active"></span> <span class="fa fa-star star-inactive"></span></p>
								</div>
							</div>
							<div class="ml-auto">
								<p class="text-muted pt-5 pt-sm-3"><a href="" class="red-btn">Request quotes</a></p>
							</div>
						</div>
						<div class="row text-left">
							<h6 class="blue-text mt-3">"An awesome activity to experience"</h6>
							<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis eget nibh nec vestibulum. Maecenas in imperdiet ligula. Integer ultricies vulputate pharetra. Nunc dui diam, semper ut eleifend sit amet, commodo eu lectus. Fusce placerat in mi vitae posuere. </p>
						</div>	
					</div>
				</div>
			</div>	
		</div>	
	</section>	
	<section class="SC-get-your-job py-5 gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Get the right price for your job</h2>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-4 mb-3">
					<div class="SC-fuss-aboutBox">
						<a href="{{ url('/')}}">
							<img src="{{ asset('public/frontend/images/img6.jpg') }}" alt="" class="img-fluid mx-auto d-block w-100" />
							<h6>Car Service costs</h6>
						</a>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>				
				</div>
				<div class="col-md-4">
					<div class="SC-fuss-aboutBox">
						<a href="{{ url('/')}}">
							<img src="{{ asset('public/frontend/images/img7.jpg') }}" alt="" class="img-fluid mx-auto d-block w-100" />
							<h6>Tax Accountant costs</h6>
						</a>		
						<div class="rating">
							<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="SC-fuss-aboutBox">
						<a href="{{ url('/')}}">
							<img src="{{ asset('public/frontend/images/img8.jpg') }}" alt="" class="img-fluid mx-auto d-block w-100" />
							<h6>Car Air Conditioner costs</h6>
						</a>		
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
					<a href="" class="white-btn">Get free quotes</a>
				</div>
			</div>	
		</div>
	</section>		
</main>	
<!-- ./  End of Main Area -->	
<!-- ./  End of Main Area -->
@endsection
