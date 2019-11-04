@extends('layouts.app')

@section('content')
	<div class="page">
		<div class="page-inner">
			<header class="page-title-bar">

				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Vendor</a>
						</li>
					</ol>
				</nav>

				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto">Project: {{ $project->wbs_id }}</h1>
					<div class="btn-toolbar">
					</div>
				</div>
			</header>

			<div class="page-section">

				<div class="row">
					<div class="col-md-3">
						@include('vendor.cme.foundation._form_list', array('project_id' => $project->id))
					</div>
					<div class="col-md-9">
						<div class="card card-fluid">
							<div class="card-header">
								<ul class="nav nav-tabs card-header-tabs">
									<li class="nav-item">
										<a href="#" class="nav-link active">
											Ready Mix
										</a>
									</li>
								</ul>

							</div>
							<div class="card-body">
								<div class="">
									<div>
										{!! form_open() !!}

										<div class="form-row">
											<div class="col-md-12">
												<div><b>1. Bore pile</b></div>
											</div>

											<div class="col-md-8">
												<div>Diameter</div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="bore_preparation_diameter"
														   class="form-control" id="bore_preparation_diameter">
													<div class="text-right">mm</div>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div>Depth (as planned)</div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="bore_preparation_depth"
														   class="form-control" id="bore_preparation_depth">
													<div class="text-right">mm</div>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div>Quantity</div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="bore_preparation_quantity"
														   class="form-control" id="bore_preparation_quantity">
													<div class="text-right">points</div>
												</div>
											</div>
										</div>

										<div class="row my-4">
											<div class="col-md-12">
												<b>2. Equipment</b>
											</div>
											<div class="col-md-12">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
														<tr>
															<th>Equipment name</th>
															<th>Quantity</th>
															<th>Remarks</th>
															<th></th>
														</tr>
														</thead>

														<tr id="parent-node">
															<td><input type="text" name="equipment_name[]" id="description" class="form-control"/></td>
															<td><input type="text" name="quantity[]" id="description" class="form-control"/></td>
															<td><input type="text" name="remarks[]" id="description" class="form-control"/></td>
															<td>
																<div id="dynamic-action"></div>
															</td>
														</tr>

														<tbody id="child-node"></tbody>
													</table>
													<div class="form-group">
														<span class="btn btn-subtle-primary" id="dynamic-add-button">Add Row</span>
													</div>
												</div>
											</div>

										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>3. Manpower</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="bore_preparation_manpower"
														   class="form-control" id="bore_preparation_manpower">
													<div class="text-right">people</div>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-12">
												<div><b>4. Casing</b></div>
											</div>

											<div class="col-md-8">
												<div>Diameter</div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="bore_preparation_casing_diameter"
														   class="form-control" id="bore_preparation_casing_diameter">
													<div class="text-right">mm</div>
												</div>
											</div>
										</div>

										<div class="form-row">

											<div class="col-md-8">
												<div>length</div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="bore_preparation_casing_length"
														   class="form-control" id="bore_preparation_casing_length">
													<div class="text-right">mm</div>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>3. Ground Water Level</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="bore_preparation_ground_water_level"
														   class="form-control" id="bore_preparation_ground_water_level">
													<div class="text-right">m</div>
												</div>
											</div>
										</div>



										<div class="form-group mt-4">
											<label for="bore_preparation_note">Notes</label>
											<textarea name="bore_preparation_note" id="bore_preparation_note"
													  class="form-control"
													  cols="30" rows="5"></textarea>
										</div>

										<button class="btn btn-primary">Save & Continue to Concrete Pouring</button>
										{!! form_close() !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
	<script src="{{ base_url('/assets/js/hdynamic/hdynamic.js') }}"></script>
@endpush

