@extends('admin/layouts.backend')
@section('title', 'Add Subscription')
@section('content')
	<section id="content-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-header">
					<div class="row">
						<div class="col-md-6">
							<h2 class="content-title">Dashboard</h2>
						</div>
						<div class="col-md-6">	
							<div class="page-header-breadcrumb">
								<ul class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="{{ asset('admin/dashboard') }}" data-abc="true">
											<i class="fas fa-tachometer-alt"></i> Home
										</a>
									</li>
									<li class="breadcrumb-item active"><a href="{{ asset('admin/add-new-service') }}" data-abc="true">Add Subscription</a>
									</li>
								</ul>
							</div>
						</div>
					</div>			
				</div>
				<div class="row mt-3">
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Add Subscription</h3>
							</div>
							<!-- /.box-header -->
							<!-- form start -->
							@if(session()->has('success'))
								<div class="alert alert-success">
								  <strong>Success!</strong> {{ session()->get('success') }}
								</div>
							@endif
							@if(session()->has('error'))
								<div class="alert alert-danger">
									<strong>Warning!</strong> {{ session()->get('error') }}
								</div>
							@endif
							<form name="add-new-subscription" method="post" action="{{ url('/admin/add_new_subscription_action') }}" enctype='multipart/form-data'>
								@CSRF
								<div class="form-group">
									<label>Subscription Name</label>
									<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Subscription Name.." required>
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Subscription Type</label>
									<input type="text" name="type" class="form-control @error('type') is-invalid @enderror" placeholder="Subscription Type.." required>
									@error('type')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Price</label>
									<input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Subscription Price.." required>
									@error('price')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea name="description" class="form-control @error('description') is-invalid @enderror"  placeholder="Description.." required></textarea>
									@error('description')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Total days</label>
									<input type="text" name="total_days" class="form-control @error('total_days') is-invalid @enderror" placeholder="Total days.." required>
									@error('description')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>								
								<div class="submit-section">
									<button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
								</div>
							</form>
						</div>
						<!-- /.box -->
					</div>
				</div>
					
			</div>
		</div>
	</section>
@endsection 
