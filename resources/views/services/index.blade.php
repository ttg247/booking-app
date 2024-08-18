@extends('layouts.app')

@section('content')
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="d-flex justify-content-between">
					<h4 class="card-title">Services</h4>
					<p class="card-description"> <button class="badge badge-primary">Create new service</button></p>
				</div>
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th> Title </th>
								<th> Price </th>
								<th> Duration </th>
								<th> Owner </th>
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
										<button class="badge badge-success mr-10">Edit</button>
										<button class="badge badge-danger">Delete</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>

					
				</div>
			</div>
		</div>
	</div>
@endsection       