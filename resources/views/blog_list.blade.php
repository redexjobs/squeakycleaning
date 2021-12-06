@extends('layouts.frontend')
@section('title', 'Blogs')
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
							<li class="breadcrumb-item active">Blog</li> 
						</ol>
					</nav>
					<h1>Blog</h1>
				</div>
			</div>	
		</div>	
	</section>
	<section class="SM-blog py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-lg-4 col-xl-4 col-12">
					<div class="blog grid-blog">
						<div class="blog-image">
							<a href="#">
								<img class="img-fluid d-block w-100 mx-auto" src="https://rightmen.com.au/public/frontend/images/img3.jpg" alt="" />
							</a>
						</div>
						<div class="blog-content">
							<ul class="entry-meta meta-item">
								<li><i class="far fa-clock"></i> 02 Dec 2021</li>
							</ul>
							<h3 class="blog-title"><a href="">Squeaky Cleaning Blog 1</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 col-lg-4 col-xl-4 col-12">
					<div class="blog grid-blog">
						<div class="blog-image">
							<a href="#">
								<img class="img-fluid d-block w-100 mx-auto" src="https://rightmen.com.au/public/frontend/images/img4.jpg" alt="" />
							</a>
						</div>
						<div class="blog-content">
							<ul class="entry-meta meta-item">
								<li><i class="far fa-clock"></i> 02 Dec 2021</li>
							</ul>
							<h3 class="blog-title"><a href="">Squeaky Cleaning Blog 2</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 col-lg-4 col-xl-4 col-12">
					<div class="blog grid-blog">
						<div class="blog-image">
							<a href="#">
								<img class="img-fluid d-block w-100 mx-auto" src="https://rightmen.com.au/public/frontend/images/img5.jpg" alt="" />
							</a>
						</div>
						<div class="blog-content">
							<ul class="entry-meta meta-item">
								<li><i class="far fa-clock"></i> 02 Dec 2021</li>
							</ul>
							<h3 class="blog-title"><a href="">Squeaky Cleaning Blog 3</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 col-lg-4 col-xl-4 col-12">
					<div class="blog grid-blog">
						<div class="blog-image">
							<a href="#">
								<img class="img-fluid d-block w-100 mx-auto" src="https://rightmen.com.au/public/frontend/images/img3.jpg" alt="" />
							</a>
						</div>
						<div class="blog-content">
							<ul class="entry-meta meta-item">
								<li><i class="far fa-clock"></i> 02 Dec 2021</li>
							</ul>
							<h3 class="blog-title"><a href="">Squeaky Cleaning Blog 4</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 col-lg-4 col-xl-4 col-12">
					<div class="blog grid-blog">
						<div class="blog-image">
							<a href="#">
								<img class="img-fluid d-block w-100 mx-auto" src="https://rightmen.com.au/public/frontend/images/img4.jpg" alt="" />
							</a>
						</div>
						<div class="blog-content">
							<ul class="entry-meta meta-item">
								<li><i class="far fa-clock"></i> 02 Dec 2021</li>
							</ul>
							<h3 class="blog-title"><a href="">Squeaky Cleaning Blog 5</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
						</div>
					</div>
				</div>	
				<div class="col-md-6 col-sm-6 col-lg-4 col-xl-4 col-12">
					<div class="blog grid-blog">
						<div class="blog-image">
							<a href="#">
								<img class="img-fluid d-block w-100 mx-auto" src="https://rightmen.com.au/public/frontend/images/img5.jpg" alt="" />
							</a>
						</div>
						<div class="blog-content">
							<ul class="entry-meta meta-item">
								<li><i class="far fa-clock"></i> 02 Dec 2021</li>
							</ul>
							<h3 class="blog-title"><a href="">Squeaky Cleaning Blog 6</a></h3>
							<p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
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
