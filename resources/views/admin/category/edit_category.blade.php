@extends('admin/layouts.backend')
@section('title', 'Edit Category')
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
									<li class="breadcrumb-item active"><a href="{{ asset('admin/category') }}" data-abc="true">Edit Category</a>
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
								<h3 class="box-title">Edit Category</h3>
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
							<form role="form" action="{{ asset('admin/category/edit_category_action') }}" method="POST" enctype='multipart/form-data'>
							    @CSRF
								<input type="hidden" name="category_id" value="{{ $categoryInfo->id }}" required>
								<div class="box-body"> 
								    <div class="form-group">
										<label for="exampleInputEmail1">Name <span style="color:red;">*</span></label>
										<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Name" value="{{ $categoryInfo->name }}" required>
										@error('name')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">{{ __('Image') }} <span style="color:red;">*</span></label>
										<input id="files" type="file" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="image">
										@error('image')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										<br/>
										<img src="{{ asset('public/uploads/category/') }}/{{ $categoryInfo->image }}" height="70">
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Description <span style="color:red;">*</span></label>
										<textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror" id="exampleInputEmail1" placeholder="Description" required>{{ $categoryInfo->description }}</textarea>
										@error('description')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									 <div class="form-group">
										<label for="exampleInputEmail1">Status <span style="color:red;">*</span></label>
										<select name="status" class="form-control" required>
										    <option value="1" @if($categoryInfo->status==1) selected @endif>Enable</option>
										    <option value="0" @if($categoryInfo->status==0) selected @endif>Disable</option>
										</select>
										@error('status')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
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