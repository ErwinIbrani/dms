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
											Bore Pile Activity
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
												<div><b>1. Bars Reinforcement</b></div>
											</div>

											<div class="col-md-6">
												<div>Main</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<input type="text" name="bore_pile_activity_main"
														   class="form-control" id="bore_pile_activity_main">
													<div class="text-right">format must: ... mm - ... pcs:</div>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div>Stirrups</div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="bore_pile_activity_stirrups"
														   class="form-control" id="bore_pile_activity_stirrups">
													<div class="text-right">format must: ... mm - ... mm:</div>
												</div>
											</div>
										</div>

										<div class="row my-4">
											<div class="col-md-12">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
														<tr>
															<th rowspan="2">Point</th>
															<th colspan="2">Depth</th>
															<th rowspan="2">Length of Rebar (m) </th>
															<th rowspan="2">Pile Top Elevation (m) </th>
															<th rowspan="2">Concrete Volume (m<sup>3</sup>)</th>
															<th rowspan="2">Remarks</th>
															<th rowspan="2"></th>
														</tr>
														<tr>
															<th>Before (m)</th>
															<th>After (m)</th>
														</tr>
														</thead>

														<tr id="parent-node">
															<td><input type="text" name="point[]" id="description" class="form-control"/></td>
															<td><input type="text" name="before[]" id="description" class="form-control"/></td>
															<td><input type="text" name="after[]" id="description" class="form-control"/></td>
															<td><input type="text" name="length_rebar[]" id="description" class="form-control"/></td>
															<td><input type="text" name="pile_elevation[]" id="description" class="form-control"/></td>
															<td><input type="text" name="concrete_volume[]" id="description" class="form-control"/></td>
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

										<div class="form-group mt-4">
											<label for="bore_activity_note">Notes</label>
											<textarea name="bore_activity_note" id="bore_activity_note"
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

