@extends('layouts.app')

@section('content')
	<div class="col-lg-12 grid-margin p-4 stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<h4 class="card-title">Services</h4>
					
					<div class="col-auto ms-auto">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#businessModal"><span class="fa fa-plus fe-16 me-3"></span>Create Business</button>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#servicesModal"><span class="fa fa-plus fe-16 mr-3"></span>Create Service</button>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th> Title </th>
								<th> Price </th>
								<th> Duration </th>
								<th> Owner </th>
								<th> </th>
							</tr>
						</thead>
						<tbody>
								@foreach ($services as $service)
									<tr>
										<td> {{ $service->name }} </td>
										<td> $ 77.99 </td>
										<td> 1 hour</td>
										<td class="py-1">
											<img src="{{ asset('images/faces/face1.jpg') }}" alt="image" />
										</td>
										<td>
											<div class="justify-content-end d-flex">
												<a href="" class="mr-10"><i class="fa fa-edit f-2 text-success"></i></a>
												<a href="" class=""><i class="fa fa-trash f-4 text-danger"></i></a>
											</div>
										</td>
									</tr>
								@endforeach
						</tbody>
					</table>

					
				</div>
			</div>
		</div>
	</div>

	<!-- new services modal -->
	<div class="modal fade" id="servicesModal" tabindex="-1" role="dialog" aria-labelledby="servicesModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="{{ route('create-service') }}">
					@csrf
					<div class="modal-header">
						<h5 class="modal-title" id="varyModalLabel">New services</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-4">
						<div class="form-group">
							<label for="servicesTitle" class="col-form-label">Name</label>
							<input type="text" class="form-control" id="servicesTitle" name="name" placeholder="Add services title">
						</div>
						<div class="form-group">
							<label for="servicesTitle" class="col-form-label">Price</label>
							<input type="text" class="form-control" id="servicesTitle" name="price" placeholder="Add services price">
						</div>
						<div class="form-group">
							<label for="servicesNote" class="col-form-label">Description</label>
							<textarea class="form-control" id="servicesNote" name="description" placeholder="Add some note for your services"></textarea>
						</div>
					</div>
					<div class="modal-footer d-flex justify-content-between">
						<button type="submit" class="btn mb-2 btn-primary">Create service</button>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- new services modal -->

	<!-- new business modal -->
	<div class="modal fade" id="businessModal" tabindex="-1" role="dialog" aria-labelledby="servicesModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form method="POST" action="{{ route('create-business') }}">
					@csrf
					<div class="modal-header">
						<h5 class="modal-title" id="varyModalLabel">New business</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-4">
							<div class="form-group">
								<label for="servicesTitle" class="col-form-label">Name</label>
								<input type="text" class="form-control" id="servicesTitle" name="name" placeholder="Enter business name">
							</div>
							<div class="form-group">
								<label for="servicesTitle" class="col-form-label">Phone</label>
								<input type="text" class="form-control" id="servicesTitle" name="phone" placeholder="Add business phone number">
							</div>
							<div class="form-group">
								<label for="servicesTitle" class="col-form-label">Email</label>
								<input type="text" class="form-control" id="servicesTitle" name="email" placeholder="Enter business email">
							</div>
							<div class="form-group">
								<label for="servicesNote" class="col-form-label">Description</label>
								<textarea class="form-control" id="servicesNote" name="description" placeholder="Enter business description"></textarea>
							</div>
							<div class="form-group">
								<label for="servicesNote" class="col-form-label">Address</label>
								<textarea class="form-control" id="servicesNote" name="address" placeholder="Enter business address"></textarea>
							</div>
							<input type="hidden" name="owner_id" >
					</div>
					<div class="modal-footer d-flex justify-content-between">
						<button type="submit" class="btn mb-2 btn-primary">Save services</button>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- new services modal -->
@endsection       