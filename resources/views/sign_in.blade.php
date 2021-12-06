@extends('layouts.frontend')
@section('title', 'Sign In')
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
							<li class="breadcrumb-item active">Sign In</li> 
						</ol>
					</nav>
					<h1>Sign In</h1> 
				</div>
			</div>	
		</div>	
	</section>
	<section class="SC-sign-in py-5"> 
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
					<h2 class="text-center">Sign In Form</h2>
					<div class="shadow mt-4 gray-bg">
						<div class="row">
							<div class="col-md-7 align-self-center white-bg">
								<div class="p-5">
									<h5 class="text-center">Hello !</h5>
									<p class="text-center">Sign into your account</p>
									<form>
										<div class="form-group">
											<input type="email" class="form-control" placeholder="example@gmail.com" id="email" required="">
										</div>	
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Password" id="password" required="">
										</div>
										<div class="row">
											<div class="col-6">
												<a href="" class="remember-me-txt"><i class="far fa-check-circle"></i> Remember me</a>
											</div>
											<div class="col-6">
												<a href="" class="forgot-txt">Forgot password?</a>
											</div>
										</div>	
										<button type="submit" class="btn btn-primary red-btn">Sign in</button>	
										<p class="text-center">Don't have an account? <a href="">Create</a></p>
									</form>
								</div>	
							</div>
							<div class="col-md-5 align-self-center">
								<div class="p-4">
									<h5 class="text-center">Squeaky Cleaning</h5>
									<p class="text-center">Nam ac scelerisque neque. In hac habitasse platea dictumst. Etiam quam diam, molestie at est in, tincidunt scelerisque sapien. Nunc a tempor est.</p>
								</div>	
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
