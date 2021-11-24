@extends('admin/layouts.backend')
@section('title', 'Setting')
@section('content')
	<section id="content-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<div class="content-header">
					<div class="row">
						<div class="col-md-6">
							<h2 class="content-title">Dashboard <small class="gray-txt">Control panel</small></h2>
						</div>
						<div class="col-md-6">	
							<div class="page-header-breadcrumb">
								<ul class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="{{ asset('admin/dashboard') }}" data-abc="true">
											<i class="fas fa-tachometer-alt"></i> Home
										</a>
									</li>
									<li class="breadcrumb-item active"><a href="{{ asset('admin/setting') }}" data-abc="true">Setting</a>
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
								<h3 class="box-title">Setting</h3>
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
							<form role="form" action="{{ asset('admin/global_setting_action') }}" method="POST"  enctype='multipart/form-data'>
							    @CSRF
								@if(isset($settingInfo->id))
								   <input type="hidden" name="setting_id" value="{{ $settingInfo->id }}" required>
								@endif
								<div class="box-body">
								    <div class="form-group">
										<label for="exampleInputEmail1">Email</label>
										@if(isset($settingInfo->admin_email))
										   <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email.." value="{{ $settingInfo->admin_email }}">
									    @else
											<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email..">
										@endif
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">{{ __('Header Logo') }}</label>
										<input id="files" type="file" class="form-control @error('header_logo') is-invalid @enderror" name="header_logo" placeholder="Header Logo..">
										@error('header_logo')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										<br/>
										@if(isset($settingInfo->header_logo))
										   <img src="{{ asset('public/uploads/setting/') }}/{{ $settingInfo->header_logo }}" height="70">
										@endif
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Header Contact Details</label>
										@if(isset($settingInfo->header_contact_details))
										    <textarea name="header_contact_details" rows="5" class="form-control @error('header_contact_details') is-invalid @enderror" id="exampleInputEmail1" placeholder="Header contact Details..">{{ $settingInfo->header_contact_details }}</textarea>
										@else
											<textarea name="header_contact_details" rows="5" class="form-control @error('header_contact_details') is-invalid @enderror" id="exampleInputEmail1" placeholder="Header contact Details.."></textarea>
										@endif
										@error('header_contact_details')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">{{ __('Footer Logo') }}</label>
										<input id="files" type="file" class="form-control @error('footer_logo') is-invalid @enderror" name="footer_logo" placeholder="Footer Logo..">
										@error('footer_logo')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										<br/>
										@if(isset($settingInfo->footer_logo))
										   <img src="{{ asset('public/uploads/setting/') }}/{{ $settingInfo->footer_logo }}" height="70" style="background: currentColor;">
										@endif
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Footer Description</label>
										@if(isset($settingInfo->footer_description))
										    <textarea name="footer_description" rows="5" class="form-control @error('footer_description') is-invalid @enderror" id="exampleInputEmail1" placeholder="Footer description..">{{ $settingInfo->footer_description }}</textarea>
										@else
											<textarea name="footer_description" rows="5" class="form-control @error('footer_description') is-invalid @enderror" id="exampleInputEmail1" placeholder="Footer description...."></textarea>
										@endif
										@error('footer_description')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Footer Social Media</label>
										@if(isset($settingInfo->footer_social_media))
										    <textarea name="footer_social_media" rows="5" class="form-control @error('footer_social_media') is-invalid @enderror" id="exampleInputEmail1" placeholder="Footer Social media here....">{{ $settingInfo->footer_social_media }}</textarea>
										@else
											<textarea name="footer_social_media" rows="5" class="form-control @error('footer_social_media') is-invalid @enderror" id="exampleInputEmail1" placeholder="Footer Social media here...."></textarea>
										@endif
										@error('footer_social_media')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Footer Copy Right Content</label>
										@if(isset($settingInfo->footer_copyright))
										    <textarea name="footer_copyright" rows="5" class="form-control @error('footer_copyright') is-invalid @enderror" id="exampleInputEmail1" placeholder="Footer Social media here....">{{ $settingInfo->footer_copyright }}</textarea>
										@else
											<textarea name="footer_copyright" rows="5" class="form-control @error('footer_copyright') is-invalid @enderror" id="exampleInputEmail1" placeholder="Footer Copy Right Content.."></textarea>
										@endif
										@error('footer_copyright')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Footer Contact Details</label>
										@if(isset($settingInfo->footer_contact_details))
										    <textarea name="footer_contact_details" rows="5" class="form-control @error('footer_contact_details') is-invalid @enderror" id="exampleInputEmail1" placeholder="Footer Contact Details..">{{ $settingInfo->footer_contact_details }}</textarea>
										@else
											<textarea name="footer_contact_details" rows="5" class="form-control @error('footer_contact_details') is-invalid @enderror" id="exampleInputEmail1" placeholder="Footer Contact Details.."></textarea>
										@endif
										@error('footer_contact_details')
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
