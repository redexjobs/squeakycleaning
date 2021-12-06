@extends('layouts.frontend')
@section('title', 'Professional Services')
@section('content')
<!-- Main Area Start -->
<main role="main" class="middle-content-area">
	<section class="SC-NavigationStyled py-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li><a href="{{ url('/inspiration') }}">Inspiration</a></li>
						<li><a href="{{ url('/indoor-projects') }}">Indoor projects</a></li>
						<li><a href="{{ url('/outdoor-projects') }}">Outdoor projects</a></li>
						<li><a href="{{ url('/lifestyle') }}">Lifestyle</a></li>
						<li class="active"><a href="{{ url('/professional-services') }}">Professional services</a></li>
						<li><a href="{{ url('/weddings') }}">Weddings</a></li>
						<!--<li><a href="{{ url('/Outdoor projects') }}"><i class="fas fa-search"></i></a></li>-->
					</ul>
				</div>
			</div>	
		</div>			
	</section>
	<section class="SC-hero-bg py-5 text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-xl-2 col-lg-8 offset-lg-2 col-md-12 col-sm-12">
					<nav aria-label="breadcrumb" id="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Squeaky Cleaning</a></li>
							<li class="breadcrumb-item"><a href="{{ url('/inspiration') }}">Inspiration</a></li>
							<li class="breadcrumb-item active">Professional Services</li>
						</ol>
					</nav>
					<h1>Professional Services</h1>
				</div>
			</div>	
		</div>	
	</section>
	<section class="SC-ArticleListSectionStyled py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-8">
					<div class="row">
						<div class="col-md-12">
							<h3><a href="{{ url('/') }}">Professional Services</a></h3>
						</div>
					</div>
				</div>	
				<div class="col-md-3 col-4">
					<div class="row">
						<div class="col-md-12">
							<a href="{{ url('/') }}" class="see-all">See all <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>	
			<div class="row mt-4">
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>How to wallpaper</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>How to organise your wardrobe and shoes</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>Interior design tips for autumn</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>Wall lighting ideas for your living room</h6>		
					</div>
				</div>
			</div>	
		</div>			
	</section>
	<section class="SC-ArticleListSectionStyled pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-8">
					<div class="row">
						<div class="col-md-12">
							<h3><a href="{{ url('/') }}">Outdoor projects</a></h3>
						</div>
					</div>
				</div>	
				<div class="col-md-3 col-4">
					<div class="row">
						<div class="col-md-12">
							<a href="{{ url('/') }}" class="see-all">See all <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>	
			<div class="row mt-4">
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>How to make the most out of a small garden</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>8 plants that thrive in warmer weather</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>10 quick ways to add kerb appeal to your home</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>How to clean concrete</h6>		
					</div>
				</div>
			</div>	
		</div>			
	</section>
	<section class="SC-ArticleListSectionStyled pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-8">
					<div class="row">
						<div class="col-md-12">
							<h3><a href="{{ url('/') }}">Lifestyle</a></h3>
						</div>
					</div>
				</div>	
				<div class="col-md-3 col-4">
					<div class="row">
						<div class="col-md-12">
							<a href="{{ url('/') }}" class="see-all">See all <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>	
			<div class="row mt-4">
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>How to make the most out of a small garden</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>8 plants that thrive in warmer weather</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>10 quick ways to add kerb appeal to your home</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>How to clean concrete</h6>		
					</div>
				</div>
			</div>	
		</div>			
	</section>
	<section class="SC-ArticleListSectionStyled pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-8">
					<div class="row">
						<div class="col-md-12">
							<h3><a href="{{ url('/') }}">Lifestyle</a></h3>
						</div>
					</div>
				</div>	
				<div class="col-md-3 col-4">
					<div class="row">
						<div class="col-md-12">
							<a href="{{ url('/') }}" class="see-all">See all <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>	
			<div class="row mt-4">
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>How to make the most out of a small garden</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>8 plants that thrive in warmer weather</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>10 quick ways to add kerb appeal to your home</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>How to clean concrete</h6>		
					</div>
				</div>
			</div>	
		</div>			
	</section>
	<section class="SC-ArticleListSectionStyled pb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-8">
					<div class="row">
						<div class="col-md-12">
							<h3><a href="{{ url('/') }}">Weddings</a></h3>
						</div>
					</div>
				</div>	
				<div class="col-md-3 col-4">
					<div class="row">
						<div class="col-md-12">
							<a href="{{ url('/') }}" class="see-all">See all <i class="fas fa-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>	
			<div class="row mt-4">
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img3.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>The ultimate wedding checklist</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img2.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>The most unique wedding venues in Australia</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img5.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>The ultimate wedding planning guide</h6>		
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-browse-popular-categoriesBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img4.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
								</div>
							</a>	
						</div>
						<p class="m-0">5 months ago</p>
						<h6>What does a wedding planner do?</h6>		
					</div>
				</div>
			</div>	
		</div>			
	</section>
	<section class="SC-get-free-quote py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>How much will your job cost?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis consequat orci non volutpat vulputate</p>
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-6 col-sm-6 col-lg-3 col-xl-3">
					<div class="SC-fuss-aboutBox">
						<div class="SC-infoBox2">
							<a href="{{ url('/') }}">
								<img src="{{ asset('public/frontend/images/img6.jpg') }}" class="img-fluid d-block mx-auto" alt="">
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
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
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
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
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
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
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
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
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
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
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
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
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
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
								<div class="box-content"><a href="{{ url('/') }}" class="read-more">Read More</a>
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
					<a href="" class="red-btn">See more cost guides</a>
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
