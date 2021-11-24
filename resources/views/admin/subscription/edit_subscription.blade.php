@extends('admin/layouts.backend')
@section('title', 'Edit Subscription')
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
									<li class="breadcrumb-item active"><a href="{{ asset('admin/subscription') }}" data-abc="true">Edit Subscription</a>
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
								<h3 class="box-title">Edit subscription</h3>
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
							<form name="add-new-subscription" method="post" action="{{ url('/admin/edit_subscription_action') }}" enctype='multipart/form-data'>
								@CSRF
								<input type="hidden" name="subscription_id" value="{{ $subscriptionInfo->id }}" required>
								<div class="form-group">
									<label>Subscription Name</label>
									<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Subscription Name.." value="{{ $subscriptionInfo->name }}" required>
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Subscription Type</label>
									<input type="text" name="type" class="form-control @error('type') is-invalid @enderror" placeholder="Subscription Type.." value="{{ $subscriptionInfo->type }}" required>
									@error('type')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Price</label>
									<input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Subscription Price.." value="{{ $subscriptionInfo->price }}" required>
									@error('price')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea name="description" class="form-control @error('description') is-invalid @enderror"  placeholder="Description.." required>{{ $subscriptionInfo->description }}</textarea>
									@error('description')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Total days</label>
									<input type="text" name="total_days" class="form-control @error('total_days') is-invalid @enderror" placeholder="Total days.." value="{{ $subscriptionInfo->total_days }}" required>
									@error('total_days')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control @error('status') is-invalid @enderror" required>
										<option value="1" @if($subscriptionInfo->status=='1') selected @endif>Enable</option>
									    <option value="0" @if($subscriptionInfo->status=='0') selected @endif>Disable</option>
									</select>
									@error('status')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="submit-section">
									<button type="submit"  class="btn btn-primary submit-btn">Save Changes</button>
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
