@extends('layouts.frontend')
@section('title', 'Terms & Services')
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
							<li class="breadcrumb-item active">Terms & Services</li> 
						</ol>
					</nav>
					<h1>Terms & Services</h1>
				</div>
			</div>	
		</div>	
	</section>
	<section class="SC-terms-service py-5">  
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p><strong>Customers and Businesses</strong></p>
					<p> Cras id tortor non arcu pulvinar tincidunt sed in purus. Sed in molestie ipsum. Duis a ante rutrum libero facilisis fermentum at nec ante. Nullam mattis ipsum nec congue rhoncus. Nunc sagittis convallis quam nec semper. Nam pulvinar, elit id ornare finibus, sapien velit volutpat elit, id tincidunt diam mauris eget ex. Nam sit amet dignissim felis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque mollis dapibus orci, nec volutpat nibh dictum et. Mauris nulla nunc, lacinia quis ex nec, ultrices dignissim tellus. Sed eget consequat lacus, eu posuere dui. Sed vel posuere est, in porttitor purus. Nulla ipsum turpis, hendrerit tempor leo vel, blandit tincidunt lectus. Duis neque nulla, dapibus non blandit in, imperdiet quis ipsum.</p>
					<p><strong>Customers requesting a service</strong></p>
					<p>Etiam dapibus blandit accumsan. Mauris blandit quam sed ipsum blandit lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras cursus libero at eros porta, vel rutrum massa blandit. Nunc sit amet arcu aliquet, ultricies tellus id, scelerisque odio. Duis lacinia, risus vitae commodo tristique, odio dolor aliquet orci, auctor varius diam felis in erat. Proin non posuere felis. Aliquam tincidunt tortor sit amet risus euismod elementum. Aenean tincidunt aliquam quam, eget tempus ex sollicitudin eget. Nullam vel eleifend ligula. Ut libero odio, molestie ut augue bibendum, consectetur facilisis augue. </p>
					<p><strong>Businesses</strong></p>
					<p>Etiam dapibus blandit accumsan. Mauris blandit quam sed ipsum blandit lobortis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras cursus libero at eros porta, vel rutrum massa blandit. Nunc sit amet arcu aliquet, ultricies tellus id, scelerisque odio. Duis lacinia, risus vitae commodo tristique, odio dolor aliquet orci, auctor varius diam felis in erat. Proin non posuere felis.</p>
					<h5>Code of Conduct</h5>
					<p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque mollis dapibus orci, nec volutpat nibh dictum et. Mauris nulla nunc, lacinia quis ex nec, ultrices dignissim tellus. Sed eget consequat lacus, eu posuere dui. Sed vel posuere est, in porttitor purus. Nulla ipsum turpis, hendrerit tempor leo vel, blandit tincidunt lectus. Duis neque nulla, dapibus non blandit in, imperdiet quis ipsum.</p>
					
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
