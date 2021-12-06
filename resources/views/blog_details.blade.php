@extends('layouts.frontend')
@section('title', 'Blog Details')
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
							<li class="breadcrumb-item active">Blog Details</li> 
						</ol>
					</nav>
					<h1>Blog Details</h1> 
				</div>
			</div>	
		</div>	
	</section>
	<section class="SM-blog-details py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-8 col-xl-8 col-12">
					<div class="blog grid-blog">
						<div class="blog-image">
							<a href="#">
								<img class="img-fluid d-block w-100 mx-auto" src="https://rightmen.com.au/public/frontend/images/img3.jpg" alt="" />
							</a>
						</div>
						<h3 class="blog-title"><a href="">Squeaky Cleaning Blog 1</a></h3>
						<div class="blog-info">
							<div class="post-left">
								<ul>
									<li><i class="far fa-calendar"></i> 02 Dec 2021</li>
									<li><i class="fa fa-tags"></i>John Doe</li>
								</ul>
							</div>
						</div>	
						<div class="blog-content">
							<p>Donec mi libero, pellentesque et justo vitae, tempus finibus tortor. Ut lacinia tempor mi id dictum. Integer et ante vitae sem efficitur congue. Proin commodo condimentum orci ut maximus. Pellentesque eget malesuada erat, id placerat sapien. Donec fermentum ac libero nec interdum. Pellentesque eu tempus nulla, vitae malesuada ipsum. Sed aliquet blandit lorem, id finibus lectus. Mauris aliquet erat massa, a interdum dui viverra eget. Nunc ac ipsum eget felis aliquam placerat. Vivamus at purus eleifend, gravida magna ut, faucibus turpis. Cras aliquam ac risus pulvinar fringilla. Aenean congue arcu a mauris sodales fermentum. In sed condimentum est. Sed in condimentum sapien, id luctus quam. </p>
						</div>
					</div>
					<div class="card blog-comments clearfix">
						<div class="card-header">
							<h4 class="card-title">Comments (12)</h4>
						</div>
						<div class="card-body pb-0">
							<ul class="comments-list">
								<li>
									<div class="comment">
										<div class="comment-author">
											<img class="avatar" alt="" src="https://rightmen.com.au/public/frontend/images/img9.png" />
										</div>
										<div class="comment-block"><span class="comment-by"><span class="blog-author-name">Agripina Butcher</span>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<p class="blog-date">Dec 02, 2021</p>
											<a class="comment-btn" href="#"><i class="fas fa-reply"></i> Reply</a>
										</div>
									</div>
									<ul class="comments-list reply">
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="" src="https://rightmen.com.au/public/frontend/images/img9.png" />
												</div>
												<div class="comment-block"><span class="comment-by"><span class="blog-author-name">Rima Sisson</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
													<p class="blog-date">Dec 02, 2021</p>
													<a class="comment-btn" href="#"><i class="fas fa-reply"></i> Reply</a>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="" src="https://rightmen.com.au/public/frontend/images/img9.png" />
												</div>
												<div class="comment-block"><span class="comment-by"><span class="blog-author-name">Benigno Bingham</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
													<p class="blog-date">Dec 02, 2021</p>
													<a class="comment-btn" href="#"><i class="fas fa-reply"></i> Reply</a>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li>
									<div class="comment">
										<div class="comment-author">
											<img class="avatar" alt="" src="https://rightmen.com.au/public/frontend/images/img9.png" />
										</div>
										<div class="comment-block"><span class="comment-by"><span class="blog-author-name">Reina Shumate</span>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<p class="blog-date">Dec 02, 2021</p>
										</div>
									</div>
								</li>
								<li>
									<div class="comment">
										<div class="comment-author">
											<img class="avatar" alt="" src="https://rightmen.com.au/public/frontend/images/img9.png" />
										</div>
										<div class="comment-block"><span class="comment-by"><span class="blog-author-name">Mariloly Alicea</span>
											</span>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
											<p class="blog-date">Dec 02, 2021</p>
											<a class="comment-btn" href="#"><i class="fas fa-reply"></i> Reply</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="card new-comment clearfix">
						<div class="card-header">
							<h4 class="card-title">Ask questions</h4>
						</div>
						<div class="card-body">
							<form>
								<div class="form-group">
									<label>Name <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Your Email Address <span class="text-danger">*</span></label>
									<input type="email" class="form-control">
								</div>
								<div class="form-group">
									<label>Question</label>
									<textarea rows="4" class="form-control"></textarea>
								</div>
								<div class="submit-section">
									<button class="btn btn-primary red-btn" type="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>	
				<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4 col-12">
					<div class="card search-widget">
						<div class="card-body">
							<form class="search-form" method="GET" action="">
								<div class="input-group">
									<input type="text" name="search" placeholder="Search..." class="form-control">
									<div class="input-group-append">
										<button type="submit" class="btn btn-primary red-btn"><i class="fa fa-search"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="card post-widget">
						<div class="card-header">
							<h4 class="card-title">Recent Posts</h4>
						</div>
						<div class="card-body">
							<ul class="latest-posts">
								<li>
									<div class="post-thumb">
										<a href="">
											<img class="img-fluid" src="https://rightmen.com.au/public/frontend/images/img4.jpg" alt="">
										</a>
									</div>
									<div class="post-info">
										<h4><a href="">Blog Post 1</a></h4>
										<p>02 Dec 2021</p>
									</div>
								</li>
								<li>
									<div class="post-thumb">
										<a href="">
											<img class="img-fluid" src="https://rightmen.com.au/public/frontend/images/img4.jpg" alt="">
										</a>
									</div>
									<div class="post-info">
										<h4><a href="">Blog Post 2</a></h4>
										<p>02 Dec 2021</p>
									</div>
								</li>
								<li>
									<div class="post-thumb">
										<a href="">
											<img class="img-fluid" src="https://rightmen.com.au/public/frontend/images/img4.jpg" alt="">
										</a>
									</div>
									<div class="post-info">
										<h4><a href="">Blog Post 3</a></h4>
										<p>02 Dec 2021</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="card category-widget">
						<div class="card-header">
							<h4 class="card-title">Blog Categories</h4>
						</div>
						<div class="card-body">
							<ul class="categories">
								<li><a href="">Categories 1 <span>( 7 )</span></a></li>
								<li><a href="">Categories 2 <span>( 3 )</span></a></li>
								<li><a href="">Categories 3 <span>( 0 )</span></a></li>
								<li><a href="">Categories 4 <span>( 0 )</span></a></li>
								<li><a href="">Categories 5 <span>( 0 )</span></a></li>
							</ul>
						</div>
					</div>
					<div class="card tags-widget">
						<div class="card-header">
							<h4 class="card-title">Tags</h4>
						</div>
						<div class="card-body">
							<ul class="tags">
								<li><a class="tag" href="">Test</a></li>
								<li><a class="tag" href="">Music tags</a></li>
							</ul>
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
