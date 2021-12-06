@extends('layouts.frontend')
@section('title', 'Register')
@section('content')
<!-- Main Area Start -->
<main role="main" class="middle-content-area">
	<section class="SC-BusinessRegistration py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-8 col-xl-8">
					<h5 class="text-center"><a href="{{ url('/') }}">Call us for help registering your business <span>123 456 7890</span></a></h5>
					<div class="BusinessRegistrationForm gray-bg p-4">
						<form>
							<h6>Personal details</h6>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="name">Your name</label>
										<input type="text" class="form-control" placeholder="Jon Snow" id="name" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" placeholder="example@gmail.com" id="email" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Your mobile number</label>
										<input type="number" class="form-control" placeholder="123 456 7890" id="phone" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" class="form-control" placeholder="" id="password" required="">
									</div>
								</div>
							</div>
							
							<h6>Business details</h6>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="business-name">Business name</label>
										<input type="text" class="form-control" placeholder="" id="business-name" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="primary-profession">What is your primary profession?</label>
										<input type="text" class="form-control" placeholder="e.g. Electrician, Plumber, Mechanic" id="primary-profession" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="where-based">Where are you based?</label>
										<input type="text" class="form-control" placeholder="e.g. Parramatta" id="where-based" required="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="business-ABN">Business ABN</label>
										<input type="text" class="form-control" placeholder="" id="business-ABN" required="">
										<small>Don't have it on hand? <a href="">Lookup my ABN</a></small>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button type="submit" class="btn btn-primary w-100">Register now</button>
								</div>
							</div>	
						</form>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
					<h2>Register your business</h2>
					<ul class="RegistrationPoints-list">
						<li><i class="far fa-check-circle"></i> <span>12,000+ jobs each week</span></li>
						<li><i class="far fa-check-circle"></i> <span>Pick jobs that suit your schedule</span></li>
						<li><i class="far fa-check-circle"></i> <span>Squeaky Cleaning customers are verified via phone and email</span></li>
					</ul>
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
