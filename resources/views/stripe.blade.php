@extends('layouts.frontend')
@section('title', 'Stripe Payment')
@section('content')
    <!-- Breadcrumb-bar Start -->
	<section class="breadcrumb-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-12">
					<nav aria-label="breadcrumb" class="page-breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Stripe Payment</li>
						</ol>
					</nav>
					<h2 class="breadcrumb-title">Stripe Payment</h2>
				</div>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container">
			<div class="row">
			<div class="form-group new-player-form col-sm-12 col-md-6"><br/>
			@if (Session::has('success'))
				<div class="alert alert-success text-center">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
					<p>{{ Session::get('success') }}</p>
				</div>
			@endif
			<form action="{{ url('/stripe_action') }}" method="post" id="payment-form">
				@CSRF
				<input type="hidden" name="strip_payment" value="1" />
				<div class="form-group">
					<label for="card-amt"  style="color:#8e8e93;">
						<b>Payable Amount: ${{ $subscriptionInfo->price }}</b>
					</label>
					<input type="hidden" name="amount" id="card-amt" value="{{ $subscriptionInfo->price }}">
					<input type="hidden" name="plan_id" id="plan_id" value="{{ $subscriptionInfo->id }}">
					<input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
				</div>
				<div class="form-group">
					<label for="card-element" style="color:#8e8e93;">
					Credit or debit card
					</label>
					<div id="card-element">
					</div>
					<div id="card-errors" role="alert" style="color:#cc4c4c;"></div>
				</div>
				<div class="submit-section">
				   <button type="submit" class="text-center ad-player-button btn btn-primary submit-btn">Pay Now</button>
				</div>
			</form>
	<script src="https://js.stripe.com/v3/"></script>
	<script>

	var stripe = Stripe('pk_test_t3CeyaO5qYos9xOJl5Cvka9o');
	var elements = stripe.elements();
	var style = {
		base: {
			color: '#32325d',
			fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
			fontSmoothing: 'antialiased',
			fontSize: '16px',
			'::placeholder': {
				color: '#aab7c4'
			}
		},
		invalid: {
			color: '#fa755a',
			iconColor: '#fa755a'
		}
	};
	var card = elements.create('card', {style: style,hidePostalCode: true});
	card.mount('#card-element');
	card.addEventListener('change', function(event) {
		var displayError = document.getElementById('card-errors');
		if (event.error) {
			displayError.textContent = event.error.message;
		} else {
			displayError.textContent = '';
		}
	});
	var form = document.getElementById('payment-form');
	form.addEventListener('submit', function(event) {
		event.preventDefault();
	 
		stripe
		  .createPaymentMethod({
			type: 'card',
			card: card,
			billing_details: {
			  
			},
		  })
		  .then(function(result) {
				console.log(result.paymentMethod.id);
				var form = document.getElementById('payment-form');
				var hiddenInput = document.createElement('input');
				hiddenInput.setAttribute('type', 'hidden');
				hiddenInput.setAttribute('name', 'paymentMethod');
				hiddenInput.setAttribute('value', result.paymentMethod.id);
				form.appendChild(hiddenInput);
				
				 stripe.createToken(card).then(function(result) {
				if (result.error) {
					var errorElement = document.getElementById('card-errors');
					errorElement.textContent = result.error.message;
				} else {
					stripeTokenHandler(result.token);
				}
				}); 
		  });
		 
	});
	 
	function stripeTokenHandler(token) {
		var form = document.getElementById('payment-form');
		var hiddenInput = document.createElement('input');
		hiddenInput.setAttribute('type', 'hidden');
		hiddenInput.setAttribute('name', 'stripeToken');
		hiddenInput.setAttribute('value', token.id);
		form.appendChild(hiddenInput);
	    form.submit();
	}
	</script>

	<style>	
	.StripeElement {
		box-sizing: border-box;
	   
		height: 40px;
	   
		padding: 10px 12px;
	   
		border: 1px solid transparent;
		border-radius: 4px;
		background-color: white;
	   
		box-shadow: 0 1px 3px 0 #e6ebf1;
		-webkit-transition: box-shadow 150ms ease;
		transition: box-shadow 150ms ease;
	}
	 
	.StripeElement--focus {
		box-shadow: 0 1px 3px 0 #cfd7df;
	}
	 
	.StripeElement--invalid {
		border-color: #fa755a;
	}
	 
	.StripeElement--webkit-autofill {
		background-color: #fefde5 !important;
	}
	</style>
	</div>
	</div>
	</div>
	</section>
@endsection