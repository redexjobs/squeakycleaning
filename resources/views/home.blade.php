@extends('layouts.frontend')
@section('title', 'Home | Squeaky Cleaning : Cleaning Service')
@section('content')
<div class="modal fade modal-center bd-example-modal-xl" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header d-block d-md-block d-sm-block d-lg-none d-xl-none">
				<div class="row">
					<div class="col-9">
						<ul>
							<li><a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/logo.png') }}" alt="" class="img-fluid"></a></li>
							<li><a href="{{ url('/') }}">Help</a></li>
						</ul>	
					</div>
					<div class="col-3">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span></button>
					</div>
				</div>		
			</div>	
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-8 col-xl-8">	 
						<form id="msform">
							<!-- progressbar -->
							<ul id="progressbar" class="text-center">
								<li class="active" id="step1"></li>
								<li id="step2"></li>
								<li id="step3"></li>
								<li id="step4"></li>
								<li id="step5"></li>
								<li id="step6"></li>
								<li id="step7"></li>
								<li id="step8"></li>
								<li id="step9"></li>
								<li id="step10"></li>
								<li id="step11"></li>
							</ul>
							<div class="SC-request__question">
								<!-- fieldsets -->
								<fieldset>
									<div class="SC-request-steps">
										<h5>Is this a residential or commercial plumbing job?</h5>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio1" name="example1" value="customEx">
											<label class="custom-control-label" for="customRadio1">Residential</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio2" name="example2" value="customEx">
											<label class="custom-control-label" for="customRadio2">Commercial</label>
										</div>
									</div>	
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>Which service do you need?</h5>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio3" name="example3" value="customEx">
											<label class="custom-control-label" for="customRadio3">Installation</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio4" name="example4" value="customEx">
											<label class="custom-control-label" for="customRadio4">Replacement</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio5" name="example5" value="customEx">
											<label class="custom-control-label" for="customRadio5">Repair and Maintenance</label>
										</div>
									</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>What do you need installed?</h5>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio6" name="example6" value="customEx">
											<label class="custom-control-label" for="customRadio6">Pipelines</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio7" name="example7" value="customEx">
											<label class="custom-control-label" for="customRadio7">Gasline</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio8" name="example8" value="customEx">
											<label class="custom-control-label" for="customRadio8">Shower or bathtub</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio9" name="example9" value="customEx">
											<label class="custom-control-label" for="customRadio9">Toilet</label>
										</div>										
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio10" name="example10" value="customEx">
											<label class="custom-control-label" for="customRadio10">Sink and tap</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio11" name="example11" value="customEx">
											<label class="custom-control-label" for="customRadio11">Drain</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio12" name="example12" value="customEx">
											<label class="custom-control-label" for="customRadio12">Water heater</label>
										</div>
									</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>Do you need your raintank above or below ground?</h5>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio13" name="example13" value="customEx">
											<label class="custom-control-label" for="customRadio13">Above ground</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio14" name="example14" value="customEx">
											<label class="custom-control-label" for="customRadio7">Below ground</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio15" name="example15" value="customEx">
											<label class="custom-control-label" for="customRadio8">As recommended by professional</label>
										</div>
										</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>What is your preference of material for the raintank?</h5>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio6" name="example6" value="customEx">
											<label class="custom-control-label" for="customRadio6">Plastic</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio7" name="example7" value="customEx">
											<label class="custom-control-label" for="customRadio7">Metal tanks</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio8" name="example8" value="customEx">
											<label class="custom-control-label" for="customRadio8">Fibreglass</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio9" name="example9" value="customEx">
											<label class="custom-control-label" for="customRadio9">Concrete</label>
										</div>										
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio10" name="example10" value="customEx">
											<label class="custom-control-label" for="customRadio10">Other (Please specify)</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio11" name="example11" value="customEx">
											<label class="custom-control-label" for="customRadio11">As recommended by professional</label>
										</div>
									</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>What size tank do you need?</h5>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio6" name="example6" value="customEx">
											<label class="custom-control-label" for="customRadio6">Less than 1,000L</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio7" name="example7" value="customEx">
											<label class="custom-control-label" for="customRadio7">1,000L to 5,000L</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio8" name="example8" value="customEx">
											<label class="custom-control-label" for="customRadio8">5,000L to 10,000L</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio9" name="example9" value="customEx">
											<label class="custom-control-label" for="customRadio9">More than 10,000L</label>
										</div>										
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio10" name="example10" value="customEx">
											<label class="custom-control-label" for="customRadio10">As recommended by professional</label>
										</div>
									</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>What type of property is this?</h5>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio6" name="example6" value="customEx">
											<label class="custom-control-label" for="customRadio6"> House</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio7" name="example7" value="customEx">
											<label class="custom-control-label" for="customRadio7">Apartment</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio8" name="example8" value="customEx">
											<label class="custom-control-label" for="customRadio8">Apartment block</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio9" name="example9" value="customEx">
											<label class="custom-control-label" for="customRadio9">Townhouse</label>
										</div>										
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio10" name="example10" value="customEx">
											<label class="custom-control-label" for="customRadio10">Terrace</label>
										</div>
									</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>When do you need this done?</h5>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio6" name="example6" value="customEx">
											<label class="custom-control-label" for="customRadio6">As soon as possible</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio7" name="example7" value="customEx">
											<label class="custom-control-label" for="customRadio7">Any time that works</label>
										</div>
										<div class="custom-control custom-radio">
											<input type="radio" class="custom-control-input" id="customRadio8" name="example8" value="customEx">
											<label class="custom-control-label" for="customRadio8">Specific date</label>
										</div>
										<div class="form-group">
										  <input type="date" class="form-control" id="date" >
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" value="">I'm flexible.
											</label>
										</div>
									</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>Any further details?</h5>
										<div class="form-group">
											<textarea class="form-control" rows="5" id="comment" placeholder="Add more information to increase the accuracy of your quotes."></textarea>
										</div> 
										<div class="file btn btn-lg btn-primary">
											Add Photos <input type="file" name="file"/>
										</div>
									</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<p>Keep an eye on your email for quotes that we send you from relevant businesses. </p>
										<h5>Which email should we send your quotes to?</h5>
										<div class="form-group">
											<input type="email" class="form-control" name="email" placeholder="e.g.example@gmail.com">
										</div> 
										<p>We will notify you here when your quotes come in. By providing your email you agree to Squeaky Cleanung <a href="">Privacy Policy.</a></p>
									</div>	
									<input type="button" name="previous" class="previous action-button-previous" value="Back" />
									<input type="button" name="next" class="next action-button" value="Next" />
								</fieldset>
								<fieldset>
									<div class="SC-request-steps">
										<h5>Enter your code</h5>
										<div class="SC-request__mobile-verification-input">
											<input id="token" type="number" class="form-control" name="number">
											<input id="token" type="number" class="form-control" name="number">
											<input id="token" type="number" class="form-control" name="number">
											<input id="token" type="number" class="form-control" name="number">
											<input id="token" type="number" class="form-control" name="number">
											<input id="token" type="number" class="form-control" name="number">
										</div> 
										<p class="verification-txt">Enter the 6-digit code sent to *******852 to complete your job request. </p>
										<a href="">Resend code</a>
										<p class="SC-request-text-divider"><span class="SC-request-text-divider-text">or</span></p>
										<div class="SC-request-alternate-login-btns">
											<a href="#" class="btn-email-btn">Email me a link to log in</a>
											<a href="#" class="btn-password-btn">Log in with password</a>
										</div>
									</div>	
									<input type="button" name="make_payment" class="next action-button" value="Request quotes" />
								</fieldset>
							</div>	
						</form>
					</div>
					<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 text-center d-block d-md-none d-sm-none d-lg-block d-xl-block">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span></button>
						<div class="SC-request__aside p-5">
							<h5>What to expect?</h5>
							<p>Up to 3 free quotes within 24 hours from qualified businesses</p>
							<img src="images/img17.jpg" alt="" class="img-fluid mx-auto d-block">
							<h4>14,053</h4>
							<p>others like you have posted a job this week</p>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ./ End of Form -->

<!-- Main Area Start -->
	<main role="main" class="middle-content-area" id="home-page">	
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
		<section class="SC-rightman-works py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>How Squeaky Cleaning works</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat orci non volutpat vulputate</p>
					</div>
				</div>	
				<div class="row mt-5">
					<div class="col-md-4">
						<div class="SC-infoBox gray-bg p-4 text-center mb-4">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img11.png') }}" alt="" class="img-fluid mx-auto d-block w-75" />
								<h4>Lorem Ipsum</h4>
								<p>Ut sit amet nibh hendrerit, elementum mi sed, lacinia nisl iaculis lacus non ex varius.</p>
							</a>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="SC-infoBox gray-bg p-4 text-center mb-4">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img11.png') }}" alt="" class="img-fluid mx-auto d-block w-75" />
								<h4>Lorem Ipsum</h4>
								<p>Ut sit amet nibh hendrerit, elementum mi sed, lacinia nisl iaculis lacus non ex varius.</p>
							</a>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="SC-infoBox gray-bg p-4 text-center mb-4">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img11.png') }}" alt="" class="img-fluid mx-auto d-block w-75" />
								<h4>Lorem Ipsum</h4>
								<p>Ut sit amet nibh hendrerit, elementum mi sed, lacinia nisl iaculis lacus non ex varius.</p>
							</a>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="" class="red-btn">Post a job</a>
					</div>
				</div>		
			</div>
		</section>	
		<section class="SC-rightman-business py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Squeaky Cleaning for Business</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat orci non volutpat vulputate</p>
					</div>
				</div>	
				<div class="row mt-5">
					<div class="col-md-4">
						<div class="SC-infoBox gray-bg p-4 text-center mb-4">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img11.png') }}" alt="" class="img-fluid mx-auto d-block w-75" />
								<h4>Lorem Ipsum</h4>
								<p>Ut sit amet nibh hendrerit, elementum mi sed, lacinia nisl iaculis lacus non ex varius.</p>
							</a>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="SC-infoBox gray-bg p-4 text-center mb-4">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img11.png') }}" alt="" class="img-fluid mx-auto d-block w-75" />
								<h4>Lorem Ipsum</h4>
								<p>Ut sit amet nibh hendrerit, elementum mi sed, lacinia nisl iaculis lacus non ex varius.</p>
							</a>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="SC-infoBox gray-bg p-4 text-center mb-4">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img11.png') }}" alt="" class="img-fluid mx-auto d-block w-75" />
								<h4>Lorem Ipsum</h4>
								<p>Ut sit amet nibh hendrerit, elementum mi sed, lacinia nisl iaculis lacus non ex varius.</p>
							</a>
						</div>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="" class="red-btn">Register Business</a>
					</div>
				</div>		
			</div>
		</section>
		<section class="SC-manage-your-leads py-5 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-lg-7 col-xl-7 py-5">
						<h2>Manage your leads on the go</h2>
						<h4>Instanly get notified of new job requests and be the first one to quote.</h4>
						<div class="online-payment-img">	
							<a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/app-store.png') }}" alt="" class="img-fluid d-block w-25" /></a>
							<a href="{{ url('/') }}"><img src="{{ asset('public/frontend/images/google-pay.png') }}" alt="" class="img-fluid d-block w-25" /></a>
						</div>	
					</div>
					<div class="col-md-12 col-sm-12 col-lg-5 col-xl-5">
						<img src="{{ asset('public/frontend/images/img10.png') }}" alt="" class="img-fluid mx-auto d-block w-75" />
					</div>
				</div>	
			</div>
		</section>
		
		
		<section class="SC-browse-popular-categories py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Browse popular categories</h2>
					<ul class="nav nav-tabs mt-4" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">All</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Sydney</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Melbourne</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Brisbane</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-5" role="tab">Canberra</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Perth</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Adelaide</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-8" role="tab">Central Coast</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-9" role="tab">Gold Coast</a>
						</li>
					</ul><!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active my-5" id="tabs-1" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane my-5" id="tabs-2" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner Sydney</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>									
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist Sydney</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>	
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant Sydney</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber Sydney</h6>		
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane my-5" id="tabs-3" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner Melbourne</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>									
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist Melbourne</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>	
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant Melbourne</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber Melbourne</h6>		
									</div>
								</div>
							</div>	
						</div>
							
						<div class="tab-pane my-5" id="tabs-4" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner Brisbane</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>									
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist Brisbane</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>	
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant Brisbane</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber Brisbane</h6>		
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane my-5" id="tabs-5" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner Canberra</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>									
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist Canberra</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>	
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant Canberra</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber Canberra</h6>		
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane my-5" id="tabs-6" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner Perth</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>									
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist Perth</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>	
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant Perth</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber Perth</h6>		
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane my-5" id="tabs-7" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner Adelaide</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>									
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist Adelaide</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>	
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant Adelaide</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber Adelaide</h6>		
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane my-3" id="tabs-8" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner Central Coast</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>									
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist Central Coast</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>	
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant Central Coast</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber Central Coast</h6>	
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>		
									</div>
								</div>
							</div>	
						</div>
						<div class="tab-pane my-3" id="tabs-9" role="tabpanel">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Cleaner Gold Coast</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>									
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Removalist Gold Coast</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>	
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Tax Accountant Gold Coast</h6>		
										<div class="rating">
											<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
									<div class="SC-browse-popular-categoriesBox">
										<div class="SC-infoBox2">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
												<div class="box-content">
													<a href="{{ url('/') }}" class="read-more">Read More</a>
												</div>
											</a>	
										</div>
										<h6>Plumber Gold Coast</h6>		
									</div>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="col-md-12">
					<a href="" class="red-btn">See more categories</a>
				</div>
			</div>	
		</div>
	</section>	
		
		<section class="SC-see-whatslive pb-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>See what's live</h2>	
					</div>
				</div>	
				<div class="row mt-5">
					<div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
						<div class="SC-see-whatsliveBox">
							<h6 class="text-uppercase">Garage door repair</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="alphabet-Txt yellow-bg">
										K
									</div>
								</div>
								<div class="col-md-9">
									<div class="content">
										<h5>Koeno</h5>
										<p>Moonee Ponds, VIC</p>
									</div>	
								</div>
							</div>	
							<div class="description">
								<p>can't reprogram remote</p>
							</div>	
							<div class="post-date">
								<span>Posted 3 days ago</span>
							</div>
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
						<div class="SC-see-whatsliveBox">
							<h6 class="text-uppercase">Tiler</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="alphabet-Txt dark-blue-bg">
										GG
									</div>
								</div>
								<div class="col-md-9">
									<div class="content">
										<h5>Gunneet G</h5>
										<p>blackburn, VIC</p>
									</div>	
								</div>
							</div>	
							<div class="description">
								<p>Replacement of shower area as a leak noticed underneath the...</p>	
							</div>	
							<div class="post-date">
								<span>Posted 2 days ago</span>
							</div>
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
						<div class="SC-see-whatsliveBox">
							<h6 class="text-uppercase">Removalist</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="alphabet-Txt purple-bg">
										VS
									</div>
								</div>
								<div class="col-md-9">
									<div class="content">
										<h5>Vicki S</h5>
										<p>North Melbourne, VIC</p>
									</div>	
								</div>
							</div>	
							<div class="description">
								<p>I aslo have a Peloton that needs to be moved with special care</p>	
							</div>	
							<div class="post-date">
								<span>Posted 5 days ago</span>
							</div>
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
						<div class="SC-see-whatsliveBox">
							<h6 class="text-uppercase">Photographer</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="alphabet-Txt maroon-bg">
										MM
									</div>
								</div>
								<div class="col-md-9">
									<div class="content">
										<h5>Mark M</h5>
										<p>Baulkham Hills, VIC</p>
									</div>	
								</div>
							</div>	
							<div class="description">
								<p>I am talking to an online dating experts, he gave me a guide on...</p>	
							</div>	
							<div class="post-date">
								<span>Posted 9 days ago</span>
							</div>
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
						<div class="SC-see-whatsliveBox">
							<h6 class="text-uppercase">Garage door repair</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="alphabet-Txt yellow-bg">
										K
									</div>
								</div>
								<div class="col-md-9">
									<div class="content">
										<h5>Koeno</h5>
										<p>Moonee Ponds, VIC</p>
									</div>	
								</div>
							</div>	
							<div class="description">
								<p>can't reprogram remote</p>
							</div>	
							<div class="post-date">
								<span>Posted 3 days ago</span>
							</div>
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
						<div class="SC-see-whatsliveBox">
							<h6 class="text-uppercase">Tiler</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="alphabet-Txt dark-blue-bg">
										GG
									</div>
								</div>
								<div class="col-md-9">
									<div class="content">
										<h5>Gunneet G</h5>
										<p>blackburn, VIC</p>
									</div>	
								</div>
							</div>	
							<div class="description">
								<p>Replacement of shower area as a leak noticed underneath the...</p>	
							</div>	
							<div class="post-date">
								<span>Posted 2 days ago</span>
							</div>
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
						<div class="SC-see-whatsliveBox">
							<h6 class="text-uppercase">Removalist</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="alphabet-Txt purple-bg">
										VS
									</div>
								</div>
								<div class="col-md-9">
									<div class="content">
										<h5>Vicki S</h5>
										<p>North Melbourne, VIC</p>
									</div>	
								</div>
							</div>	
							<div class="description">
								<p>I aslo have a Peloton that needs to be moved with special care</p>	
							</div>	
							<div class="post-date">
								<span>Posted 5 days ago</span>
							</div>
						</div>	
					</div>
					<div class="col-md-6 col-sm-6 col-lg-4 col-xl-3">
						<div class="SC-see-whatsliveBox">
							<h6 class="text-uppercase">Photographer</h6>
							<div class="row">
								<div class="col-md-3">
									<div class="alphabet-Txt maroon-bg">
										MM
									</div>
								</div>
								<div class="col-md-9">
									<div class="content">
										<h5>Mark M</h5>
										<p>Baulkham Hills, VIC</p>
									</div>	
								</div>
							</div>	
							<div class="description">
								<p>I am talking to an online dating experts, he gave me a guide on...</p>	
							</div>	
							<div class="post-date">
								<span>Posted 9 days ago</span>
							</div>
						</div>	
					</div>
				</div>	
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
				<div class="row mt-2">
				
				
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
				<div class="row">
					<div class="col-md-12">
						<a href="{{ url('/') }}" class="red-btn">See more guides</a>
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
@endsection
