@extends('layouts.frontend')
@section('title', 'Contact Us')
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
							<li class="breadcrumb-item active">Contact Us</li> 
						</ol>
					</nav>
					<h1>Contact Us</h1>
				</div>
			</div>	
		</div>	
	</section>
	<section class="SC-contact py-5"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="shadow gray-bg">
						<div class="row">
							<div class="col-md-6 align-self-center px-5">
								<h2>Squeaky Cleaning</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porta luctus est interdum pretium. Fusce id tortor fringilla, suscipit turpis ac, varius ex.</p>
								<ul class="contact-txt">
									<li><i class="fas fa-map-marker-alt"></i> <span>Address Here</span></li>
									<li><i class="far fa-envelope-open"></i> <span><a href="mailto:example@gmail.com">example@gmail.com</a></span></li>
									<li><i class="fas fa-phone"></i> <span><a href="tel:1234567890">123-456-7890</a></span></li>
								</ul>
								<ul class="social-icon">
									<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
									<li><a href=""><i class="fab fa-twitter"></i></a></li>
									<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								</ul>
							</div>
							<div class="col-md-6 white-bg p-4">
								<h2>We’re here to help</h2>
								<p>Have an enquiry for us? Fill out the form below to contact our team.</p>
								<form>
									<div class="form-group">
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
											<label class="form-check-label" for="inlineRadio1">I’m a customer</label>
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
											<label class="form-check-label" for="inlineRadio2">I’m a business</label>
										</div>
									</div>	
									<div class="form-group">
										<label for="sel1">How can we help you?</label>
										<select class="form-control" id="sel1">
											<option>Select an option...</option>
											<option>My jobs</option>
											<option>Reviews</option>
											<option>My account</option>
											<option>Other</option>
										</select>
									</div>
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" placeholder="Jon Snow" required>
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" placeholder="example@gmail.com" required>
									</div>
									<div class="form-group">
										<label for="enquiry">Enquiry</label>
										<textarea class="form-control" rows="5" id="enquiry" placeholder="How can we help you?" required></textarea>
									</div>
									<button type="submit" class="btn btn-primary">Send Enquiry</button>
								</form>	
							</div>
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
