@extends('layouts.frontend')
@section('title', 'Register')
@section('content')
<!-- Content Start -->
		<section class="content">
			<div class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<div class="account-content">
							<div class="row align-items-center justify-content-center">
								<div class="col-md-7 col-lg-6 login-left">
									<img src="{{asset('public/frontend/img/login-banner.png') }}" class="img-fluid" alt="Docucare Register">
								</div>
								<div class="col-md-12 col-lg-6 login-right">
									<div class="login-header">
										<h3>Registration</h3>
									</div>
									<form method="POST" action="{{ route('register') }}">
										@csrf
										<div class="form-group form-focus">
											<input id="name" type="text" class="form-control floating @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
											@error('name')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label class="focus-label">Name</label>
										</div>
										<div class="form-group form-focus">
											<input id="email" type="email" class="form-control floating @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label class="focus-label">Email</label>
										</div>
										<div class="form-group form-focus">
											<input id="number" type="number" class="form-control floating @error('mobile_no') is-invalid @enderror" name="mobile_no" required autocomplete="mobile no">
											@error('mobile_no')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label class="focus-label">Mobile Number</label>
										</div>
										<div class="form-group form-focus">
											<input id="password" type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
											@error('password')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label class="focus-label">Create Password</label>
										</div>
										
										<div class="form-group form-focus">
											<input id="password-confirm" type="password" class="form-control floating @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
											<label class="focus-label">Confirm Password</label>
										</div>
										
										<div class="form-group form-focus">
										    <select id="role" name="role" class="form-control floating" required="">
												<option value="patient">Patient</option>
												<option value="doctor">Doctor</option>
												<option value="trainer">Trainer</option>
											</select>
											@error('role')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											<label class="focus-label">Role</label>
										</div>
										
										<div class="text-right"><a class="forgot-link" href="{{ url('/login') }}">Already have an account?</a>
										</div>
										<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>
										<!--<div class="login-or"><span class="or-line"></span>
											<span class="span-or">or</span>
										</div>
										<div class="row form-row social-login">
											<div class="col-6"><a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
											</div>
											<div class="col-6"><a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
											</div>
										</div>-->
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ./ End of Content -->
@endsection
