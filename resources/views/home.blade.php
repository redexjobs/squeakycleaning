@extends('layouts.frontend')
@section('title', 'Home | Squeaky Cleaning : Cleaning Service')
@section('content')
<!-- Main Area Start -->
	<main role="main" class="middle-content-area">	
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
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
												<h6>Cleaner</h6>
											</a>		
											<div class="rating">
												<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
										<div class="SC-browse-popular-categoriesBox">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
												<h6>Removalist</h6>
											</a>		
											<div class="rating">
												<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
										<div class="SC-browse-popular-categoriesBox">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
												<h6>Tax Accountant</h6>
											</a>		
											<div class="rating">
												<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
										<div class="SC-browse-popular-categoriesBox">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
												<h6>Plumber</h6>
											</a>		
											<div class="rating">
												<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
										<div class="SC-browse-popular-categoriesBox">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img2.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
												<h6>Cleaner</h6>
											</a>		
											<div class="rating">
												<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
										<div class="SC-browse-popular-categoriesBox">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img3.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
												<h6>Removalist</h6>
											</a>		
											<div class="rating">
												<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
										<div class="SC-browse-popular-categoriesBox">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img4.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
												<h6>Tax Accountant</h6>
											</a>		
											<div class="rating">
												<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
										<div class="SC-browse-popular-categoriesBox">
											<a href="{{ url('/') }}">
												<img src="{{ asset('public/frontend/images/img5.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
												<h6>Plumber</h6>
											</a>		
											<div class="rating">
												<p>4.5 <i class="fas fa-star"></i> <small>(4,158 reviews)</small></p>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<a href="{{ url('/') }}" class="red-btn">See more categories</a>
									</div>
								</div>	
							</div>
							<div class="tab-pane my-3" id="tabs-2" role="tabpanel">
								<p>Sydney</p>
							</div>
							<div class="tab-pane my-3" id="tabs-3" role="tabpanel">
								<p>Melbourne</p>
							</div>
							<div class="tab-pane my-3" id="tabs-4" role="tabpanel">
								<p>Brisbane</p>
							</div>
							<div class="tab-pane my-3" id="tabs-5" role="tabpanel">
								<p>Canberra</p>
							</div>
							<div class="tab-pane my-3" id="tabs-6" role="tabpanel">
								<p>Perth</p>
							</div>
							<div class="tab-pane my-3" id="tabs-7" role="tabpanel">
								<p>Adelaide</p>
							</div>
							<div class="tab-pane my-3" id="tabs-8" role="tabpanel">
								<p>Central Coast</p>
							</div>
							<div class="tab-pane my-3" id="tabs-9" role="tabpanel">
								<p>Gold Coast</p>
							</div>
						</div>
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
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img6.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
								<h6>Car Service costs</h6>
							</a>		
							<div class="rating">
								<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
						<div class="SC-fuss-aboutBox">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img7.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
								<h6>Tax Accountant costs</h6>
							</a>		
							<div class="rating">
								<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
						<div class="SC-fuss-aboutBox">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img8.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
								<h6>Car Air Conditioner costs</h6>
							</a>		
							<div class="rating">
								<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
						<div class="SC-fuss-aboutBox">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img9.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
								<h6>Car Window Tinting costs</h6>
							</a>		
							<div class="rating">
								<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
						<div class="SC-fuss-aboutBox">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img6.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
								<h6>Car Service costs</h6>
							</a>		
							<div class="rating">
								<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
						<div class="SC-fuss-aboutBox">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img7.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
								<h6>Tax Accountant costs</h6>
							</a>		
							<div class="rating">
								<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
						<div class="SC-fuss-aboutBox">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img8.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
								<h6>Car Air Conditioner costs</h6>
							</a>		
							<div class="rating">
								<p><i class="fas fa-dollar-sign"></i> Average price $150 - $150</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
						<div class="SC-fuss-aboutBox">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img9.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
								<h6>Car Window Tinting costs</h6>
							</a>		
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
