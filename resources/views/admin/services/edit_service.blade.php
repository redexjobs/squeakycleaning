@extends('admin/layouts.backend')
@section('title', 'Edit Services')
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
									<li class="breadcrumb-item active"><a href="{{ asset('admin/service') }}" data-abc="true">Edit Services</a>
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
								<h3 class="box-title">Edit Services</h3>
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
							<form name="add-new-service" method="post" action="{{ url('/admin/edit_service_action') }}" enctype='multipart/form-data'>
								@CSRF
								<input type="hidden" name="service_id" value="{{ $serviceInfo->id }}" required>
								<div class="form-group">
									<label>Service Name</label>
									<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Service Name.." value="{{ $serviceInfo->name }}" required>
									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div> 
								<div class="form-group">
									<label>Category</label>
									<select name="category_id" class="form-control @error('category_id') is-invalid @enderror" required>
									    <option value="">-Select-</option>
										@if(isset($categoryList))
											@foreach($categoryList as $category)
										        @if($serviceInfo->category_id==$category->id)
													<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
												@else
									                <option value="{{ $category->id }}">{{ $category->name }}</option>
												@endif
											@endforeach
										@endif
									</select>
									@error('category_id')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Short Description</label>
									<textarea name="short_description" class="form-control @error('short_description') is-invalid @enderror"  placeholder="Short Description.." required>{{ $serviceInfo->short_description }}</textarea>
									@error('short_description')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Description</label>
									<textarea name="description" class="form-control @error('description') is-invalid @enderror"  placeholder="Description.." required>{{ $serviceInfo->description }}</textarea>
									@error('description')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="form-group">
									<label>Image</label>
									<input type="file" name="service_image" class="form-control @error('service_image') is-invalid @enderror" placeholder="Service Image..">
									@error('service_image')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror<br/>
									<img src="{{ asset('public/uploads/service/')}}/{{ $serviceInfo->image }}" style="width:100px;">
								</div>	
								<div class="form-group">
									<label>Status</label>
									<select name="status" class="form-control @error('status') is-invalid @enderror" required>
										<option value="1" @if($serviceInfo->status=='1') selected @endif>Enable</option>
									    <option value="0" @if($serviceInfo->status=='0') selected @endif>Disable</option>
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
