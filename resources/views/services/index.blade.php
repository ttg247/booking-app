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
							<tr>
								<td> Hair dressing </td>
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
			<div class="modal-header">
				<h5 class="modal-title" id="varyModalLabel">New services</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-4">
				<form>
				<div class="form-group">
					<label for="servicesTitle" class="col-form-label">Title</label>
					<input type="text" class="form-control" id="servicesTitle" placeholder="Add services title">
				</div>
				<div class="form-group">
					<label for="servicesNote" class="col-form-label">Note</label>
					<textarea class="form-control" id="servicesNote" placeholder="Add some note for your services"></textarea>
				</div>
				<div class="form-row">
					<div class="form-group col-md-8">
					<label for="servicesType">services type</label>
					<select id="servicesType" class="form-control select2">
						<option value="work">Work</option>
						<option value="home">Home</option>
					</select>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="date-input1">Start Date</label>
					<div class="input-group">
						<div class="input-group-prepend">
						<div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
						</div>
						<input type="text" class="form-control drgpicker" id="drgpicker-start" value="04/24/2020">
					</div>
					</div>
					<div class="form-group col-md-6">
					<label for="startDate">Start Time</label>
					<div class="input-group">
						<div class="input-group-prepend">
						<div class="input-group-text" id="button-addon-time"><span class="fe fe-clock fe-16"></span></div>
						</div>
						<input type="text" class="form-control time-input" id="start-time" placeholder="10:00 AM">
					</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="date-input1">End Date</label>
					<div class="input-group">
						<div class="input-group-prepend">
						<div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
						</div>
						<input type="text" class="form-control drgpicker" id="drgpicker-end" value="04/24/2020">
					</div>
					</div>
					<div class="form-group col-md-6">
					<label for="startDate">End Time</label>
					<div class="input-group">
						<div class="input-group-prepend">
						<div class="input-group-text" id="button-addon-time"><span class="fe fe-clock fe-16"></span></div>
						</div>
						<input type="text" class="form-control time-input" id="end-time" placeholder="11:00 AM">
					</div>
					</div>
				</div>
				</form>
			</div>
			<div class="modal-footer d-flex justify-content-between">
				<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="RepeatSwitch" checked>
				<label class="custom-control-label" for="RepeatSwitch">All day</label>
				</div>
				<button type="button" class="btn mb-2 btn-primary">Save services</button>
			</div>
			</div>
		</div>
	</div> <!-- new services modal -->

	<!-- new services modal -->
	<div class="modal fade" id="businessModal" tabindex="-1" role="dialog" aria-labelledby="servicesModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="varyModalLabel">New business</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body p-4">
				<form method="POST" action="">
					@csrf
					<div class="form-group">
						<label for="servicesTitle" class="col-form-label">Name</label>
						<input type="text" class="form-control" id="servicesTitle" placeholder="Add services title">
					</div>
					<div class="form-group">
						<label for="servicesTitle" class="col-form-label">Phone</label>
						<input type="text" class="form-control" id="servicesTitle" placeholder="Add services title">
					</div>
					<div class="form-group">
						<label for="servicesTitle" class="col-form-label">Email</label>
						<input type="text" class="form-control" id="servicesTitle" placeholder="Add services title">
					</div>
					<div class="form-group">
						<label for="servicesNote" class="col-form-label">Description</label>
						<textarea class="form-control" id="servicesNote" placeholder="Add some note for your services"></textarea>
					</div>
					<div class="form-group">
						<label for="servicesNote" class="col-form-label">Description</label>
						<textarea class="form-control" id="servicesNote" placeholder="Add some note for your services"></textarea>
					</div>
					<div class="form-row">
						<div class="form-group col-md-8">
						<label for="servicesType">services type</label>
						<select id="servicesType" class="form-control select2">
							<option value="work">Work</option>
							<option value="home">Home</option>
						</select>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer d-flex justify-content-between">
				<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="RepeatSwitch" checked>
				<label class="custom-control-label" for="RepeatSwitch">All day</label>
				</div>
				<button type="button" class="btn mb-2 btn-primary">Save services</button>
			</div>
			</div>
		</div>
	</div> <!-- new services modal -->
@endsection       