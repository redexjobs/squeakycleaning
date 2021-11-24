@extends('layouts.app')
@section('title', 'Login')
@section('content')
	<div class="logpad">
	   <div class="logo">
			<a href="{{ url('/') }}"><img src="{{ asset('public/image/logo.png')}}" alt="" class="img-fluid mx-auto" /></a>
		</div>
		<div>
			<span>Login</span>
		</div>
		<form method="POST" action="{{ route('login') }}">
		    @csrf
			<div class="logbox">
				<label>Username</label>
				 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				
				<label>Password</label>
				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				
				
			</div>
			<button type="submit">Login</button>
			 @if (Route::has('password.request'))
				<!--<a class="btn btn-link" href="{{ route('password.request') }}" style="color:white;">
					{{ __('Forgot Your Password?') }}
				</a>-->
			@endif
		</form>
	
	</div>
@endsection
