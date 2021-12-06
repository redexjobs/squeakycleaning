@extends('layouts.frontend')
@section('title', 'Car Services Cost')
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
							<li class="breadcrumb-item"><a href="{{ url('/') }}">Cost Guides</a></li>
							<li class="breadcrumb-item active">Mechanic</li>
						</ol>
					</nav>
					<h1>How much does a Car Service cost?</h1>
					<h2>$150 - $550</h2>
					<div class="white-bg">
						<h3 class="mb-4">Where do you need a mechanic?</h3>
						<form action="">
							<div class="row">
								<div class="col-md-9">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="e.g. Sydney, 2000" required="">
									</div>
								</div>	
								<div class="col-md-3">
									<button type="submit" class="btn btn-primary">Go</button>
								</div>	
							</div>	
						</form> 
					</div>
				</div>
			</div>	
		</div>	
	</section>	
	<section class="SC-car-service-costs-details py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h4>What's on this page</h4>
					<ul class="QuestionsSummary">
						<li><a href="#ans1">How Much Does a Car Service Cost? <i class="fas fa-angle-right"></i></a></li>
						<li><a href="#ans2">Car Service Costs around Australia <i class="fas fa-angle-right"></i></a></li>
						<li><a href="#ans3">Influence of Car Models on Service Costs <i class="fas fa-angle-right"></i></a></li>
						<li><a href="#ans4">Factors that Affect Car Servicing Costs <i class="fas fa-angle-right"></i></a></li>
					</ul>
				</div>
				<div class="col-md-8">
					<div class="QuestionsAndAnswers">
						<div id="ans1">
							<h4>How Much Does a Car Service Cost?</h4>
							<p> Mauris pharetra pretium sem, sit amet volutpat tellus auctor sit amet. Quisque leo enim, consectetur in eros sed, dictum egestas velit. Nulla at lorem sit amet eros gravida ullamcorper nec vel tellus. Duis cursus vehicula leo. Etiam auctor sem non eros ornare, sit amet convallis libero mattis. Nulla varius sed dolor in porttitor. Suspendisse suscipit purus efficitur mauris mattis tincidunt.</p>
							<p>Fusce porta arcu massa, ut lobortis arcu ultricies nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id eros dictum, congue nulla at, bibendum turpis. Maecenas ut auctor orci. Ut purus dolor, fermentum eu lobortis at, posuere id massa. Aliquam erat volutpat. Suspendisse potenti. Vestibulum ac mi quis lectus porttitor porta. Nullam sollicitudin elit eu venenatis finibus. Praesent ut sapien consequat, vestibulum mi vel, lobortis lorem.</p>
							<p>Aenean venenatis, velit id pulvinar tempus, libero dui viverra augue, at bibendum orci mi vitae ipsum. Suspendisse sit amet finibus massa. Pellentesque eu molestie mi. Morbi rhoncus rutrum nisl. Phasellus molestie, diam vitae consequat consectetur, magna est interdum lectus, facilisis varius turpis est quis elit. Sed tempus egestas neque ac auctor. Sed mi lacus, aliquet vitae blandit in, posuere nec tellus. Nullam vulputate sed velit non elementum. </p>
						</div>
						<div id="ans2">
							<h4>Car Service Costs around Australia</h4>
							<p> Mauris pharetra pretium sem, sit amet volutpat tellus auctor sit amet. Quisque leo enim, consectetur in eros sed, dictum egestas velit. Nulla at lorem sit amet eros gravida ullamcorper nec vel tellus. Duis cursus vehicula leo. Etiam auctor sem non eros ornare, sit amet convallis libero mattis. Nulla varius sed dolor in porttitor. Suspendisse suscipit purus efficitur mauris mattis tincidunt.</p>
							<p>Fusce porta arcu massa, ut lobortis arcu ultricies nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id eros dictum, congue nulla at, bibendum turpis. Maecenas ut auctor orci. Ut purus dolor, fermentum eu lobortis at, posuere id massa. Aliquam erat volutpat. Suspendisse potenti. Vestibulum ac mi quis lectus porttitor porta. Nullam sollicitudin elit eu venenatis finibus. Praesent ut sapien consequat, vestibulum mi vel, lobortis lorem.</p>
							<p>Aenean venenatis, velit id pulvinar tempus, libero dui viverra augue, at bibendum orci mi vitae ipsum. Suspendisse sit amet finibus massa. Pellentesque eu molestie mi. Morbi rhoncus rutrum nisl. Phasellus molestie, diam vitae consequat consectetur, magna est interdum lectus, facilisis varius turpis est quis elit. Sed tempus egestas neque ac auctor. Sed mi lacus, aliquet vitae blandit in, posuere nec tellus. Nullam vulputate sed velit non elementum. </p>
						</div>
						<div id="ans3">
							<h4>Influence of Car Models on Service Costs</h4>
							<p> Mauris pharetra pretium sem, sit amet volutpat tellus auctor sit amet. Quisque leo enim, consectetur in eros sed, dictum egestas velit. Nulla at lorem sit amet eros gravida ullamcorper nec vel tellus. Duis cursus vehicula leo. Etiam auctor sem non eros ornare, sit amet convallis libero mattis. Nulla varius sed dolor in porttitor. Suspendisse suscipit purus efficitur mauris mattis tincidunt.</p>
							<p>Fusce porta arcu massa, ut lobortis arcu ultricies nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id eros dictum, congue nulla at, bibendum turpis. Maecenas ut auctor orci. Ut purus dolor, fermentum eu lobortis at, posuere id massa. Aliquam erat volutpat. Suspendisse potenti. Vestibulum ac mi quis lectus porttitor porta. Nullam sollicitudin elit eu venenatis finibus. Praesent ut sapien consequat, vestibulum mi vel, lobortis lorem.</p>
							<p>Aenean venenatis, velit id pulvinar tempus, libero dui viverra augue, at bibendum orci mi vitae ipsum. Suspendisse sit amet finibus massa. Pellentesque eu molestie mi. Morbi rhoncus rutrum nisl. Phasellus molestie, diam vitae consequat consectetur, magna est interdum lectus, facilisis varius turpis est quis elit. Sed tempus egestas neque ac auctor. Sed mi lacus, aliquet vitae blandit in, posuere nec tellus. Nullam vulputate sed velit non elementum. </p>
						</div>
						<div id="ans4">
							<h4>Factors that Affect Car Servicing Costs</h4>
							<p> Mauris pharetra pretium sem, sit amet volutpat tellus auctor sit amet. Quisque leo enim, consectetur in eros sed, dictum egestas velit. Nulla at lorem sit amet eros gravida ullamcorper nec vel tellus. Duis cursus vehicula leo. Etiam auctor sem non eros ornare, sit amet convallis libero mattis. Nulla varius sed dolor in porttitor. Suspendisse suscipit purus efficitur mauris mattis tincidunt.</p>
							<p>Fusce porta arcu massa, ut lobortis arcu ultricies nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent id eros dictum, congue nulla at, bibendum turpis. Maecenas ut auctor orci. Ut purus dolor, fermentum eu lobortis at, posuere id massa. Aliquam erat volutpat. Suspendisse potenti. Vestibulum ac mi quis lectus porttitor porta. Nullam sollicitudin elit eu venenatis finibus. Praesent ut sapien consequat, vestibulum mi vel, lobortis lorem.</p>
							<p>Aenean venenatis, velit id pulvinar tempus, libero dui viverra augue, at bibendum orci mi vitae ipsum. Suspendisse sit amet finibus massa. Pellentesque eu molestie mi. Morbi rhoncus rutrum nisl. Phasellus molestie, diam vitae consequat consectetur, magna est interdum lectus, facilisis varius turpis est quis elit. Sed tempus egestas neque ac auctor. Sed mi lacus, aliquet vitae blandit in, posuere nec tellus. Nullam vulputate sed velit non elementum. </p>
						</div>
					</div>
				</div>
			</div>	
		</div>	
	</section>	
	<section class="SC-realted-car-service-cost-guides py-5 gray-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Related Car Service Cost Guides</h2>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-4 mb-3">
					<a href="{{ url('/') }}">
						<img src="{{ asset('public/frontend/images/img14.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
						<h6>Car Engine Cost Guide</h6>
					</a>					
				</div>
				<div class="col-md-4 mb-3">
					<a href="{{ url('/') }}">
						<img src="{{ asset('public/frontend/images/img15.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
						<h6>Wheel Alignment Cost Guide</h6>
					</a>					
				</div>
				<div class="col-md-4 mb-3">
					<a href="{{ url('/') }}">
						<img src="{{ asset('public/frontend/images/img16.jpg') }}" alt="" class="img-fluid mx-auto d-block" />
						<h6>Car Air Conditioner Cost Guide</h6>
					</a>					
				</div>
			</div>
		</div>
	</section>	
	<section class="SC-get-free-quote py-5 red-bg">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="text-white">Have sometingto do? Get in done today</h2>
					<a href="" class="white-btn">Get free quotes</a>
				</div>
			</div>	
		</div>
	</section>		
</main>	
<!-- ./  End of Main Area -->
@endsection
