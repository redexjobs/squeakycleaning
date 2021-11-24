@extends('admin/layouts.backend')
@section('title', 'Subscription')
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
									<li class="breadcrumb-item active"><a href="{{ asset('admin/subscription') }}" data-abc="true">Subscription</a>
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
									<th>Name</th>
									<th>Type</th>
									<th>Price</th>
									<th>Description</th>
									<th>Total days</th>
									<th>Status</th>
									<th>Created At</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							   @if(isset($subscriptionInfo))
								    @foreach($subscriptionInfo as $subscriptionList)
										<tr> 
											<td>{{ $subscriptionList->name }}</td>
											<td>{{ $subscriptionList->type }}</td>
											<td>{{ $subscriptionList->price }}</td>
											<td>{{ $subscriptionList->description }}</td>
											<td>{{ $subscriptionList->total_days }}</td>
											@if($subscriptionList->status==1)
												<td>Enable</td>
											@else
											    <td>Disable</td>
										    @endif
											<td>{{ $subscriptionList->created_at }}</td>
											<td><a href="{{ url('/admin/edit-subscription') }}/{{ $subscriptionList->id }}"><button type="button" class="btn btn-success">Edit</button></a> <a href="{{ url('/admin/delete-subscription') }}/{{ $subscriptionList->id }}" onclick="return validateDelete(this);"><button type="button" class="btn btn-danger">Delete</button></a></td>
										</tr>
									@endforeach
								@endif
								
							</tbody>
							<tfoot>
								<tr>
									<th>Name</th>
									<th>Type</th>
									<th>Price</th>
									<th>Description</th>
									<th>Total days</th>
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
