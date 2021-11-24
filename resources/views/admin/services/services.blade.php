@extends('admin/layouts.backend')
@section('title', 'Services')
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
									<li class="breadcrumb-item active"><a href="{{ asset('admin/service') }}" data-abc="true">Services</a>
									</li>
								</ul>
							</div>
						</div>
					</div>			
				</div>
				
				<div class="row mt-3">
					<div class="col-lg-12">
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
						<table id="example" class="table table-striped table-bordered" style="width:100%">
							<thead>
								<tr>
									<th>Title</th>
									<th>Category</th>
									<th>Image</th>
									<th>Short Description</th>
									<th>Status</th>
									<th>Created At</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							   @if(isset($serviceInfo))
								    @foreach($serviceInfo as $servicesList)
										<tr>
											<td>{{ $servicesList->name }}</td>
											<td>{{ $servicesList->category_name }}</td>
											@if(isset($servicesList->image))
											    <td><img src="{{ asset('public/uploads/service/') }}/{{ $servicesList->image }}" style="width:100px;"></td>
											@else
											    <td>No Image</td>
											@endif
											<td>{{ $servicesList->short_description }}</td>
											@if($servicesList->status==1)
												<td>Enable</td>
											@else
											    <td>Disable</td>
										    @endif
											<td>{{ $servicesList->created_at }}</td>
											<td><a href="{{ url('/admin/edit-service') }}/{{ $servicesList->id }}"><button type="button" class="btn btn-success">Edit</button></a> <a href="{{ url('/admin/delete-service') }}/{{ $servicesList->id }}" onclick="return validateDelete(this);"><button type="button" class="btn btn-danger">Delete</button></a></td>
										</tr>
									@endforeach
								@endif
								
							</tbody>
							<tfoot>
								<tr>
									<th>Title</th>
									<th>Category</th>
									<th>Image</th>
									<th>Short Description</th>
									<th>Status</th>
									<th>Created At</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
						<script>
						  function validateDelete(){ 
							var confirms = confirm('Do you want to delete ?.');
							if(confirms==false){
								return false;
							}
						  }
						</script>
					</div>		
				</div>
					
			</div>
		</div>
	</section>
@endsection
