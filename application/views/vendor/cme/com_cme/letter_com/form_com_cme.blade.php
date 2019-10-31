@extends('layouts.app')

@section('content')
	<div class="page">
		<div class="page-inner">
			<header class="page-title-bar">

				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="{{ site_url('/vendor/comcme/letter/'. $project->id) }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>COM CME</a>
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

					<div class="col-md-12">
						<div class="card card-fluid">
							<div class="card-header">
								@include('vendor.cme.com_cme.nav_form', array('project_id' => $project->id))
							</div>
							<div class="card-body">
								<h5 class="card-title"> DOCUMENT KOM CME </h5>
								{!! form_open() !!}
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="contractor_name">Contractor Name</label>
											<input type="text" name="contractor_name" id="contractor_name" class="form-control"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="site_id">Site ID / Name</label>
											<input type="text" name="site_id" id="site_id" class="form-control"/>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="region">Region</label>
											<input type="text" name="region" id="region" class="form-control"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="date">Date</label>
											<input type="text" name="date" id="date" class="form-control"/>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="site_type">Site Type</label>
											<input type="text" name="site_type" id="site_type" class="form-control"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="tower_type">Tower Type</label>
											<input type="text" name="tower_type" id="tower_type" class="form-control"/>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="foundation_type">Foundation Type</label>
											<input type="text" name="foundation_type" id="foundation_type" class="form-control"/>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="duration">CME work ATP-1 (days) duration</label>
											<input type="text" name="duration" id="duration" class="form-control"/>
										</div>
									</div>
								</div>

								<h4 class="card-title">Details</h4>
								<table class="table table-bordered">
									<thead>
									<tr>
										<th rowspan="2" style="vertical-align:middle" class="text-center">Description</th>
										<th rowspan="2" style="vertical-align:middle" class="text-center">Duration</th>
										<th rowspan="2" style="vertical-align:middle" class="text-center">SLA</th>
										<th colspan="2" class="text-center">Plan</th>
										<th colspan="2" class="text-center">Actual</th>
										<th colspan="2" class="text-center"></th>
									</tr>
									<tr>
										<th>Start</th>
										<th>Finished</th>
										<th>Start</th>
										<th>Finished</th>
										<th></th>
									</tr>
									</thead>

									<tr id="parent-node">
										<td>
											<input type="text" name="description[]" id="description" class="form-control"/>
										</td>
										<td>
											<input type="text" name="detail_duration[]" id="detail_duration" class="form-control"/>
										</td>
										<td>
											<input type="text" name="sla[]" id="sla" class="form-control"/>
										</td>
										<td>
											<input type="text" name="plan_start[]" id="plan_start" class="form-control"/>
										</td>
										<td>
											<input type="text" name="plan_finished[]" id="plan_finished" class="form-control"/>
										</td>
										<td>
											<input type="text" name="actual_start[]" id="actual_start" class="form-control"/>
										</td>
										<td>
											<input type="text" name="actual_finished[]" id="actual_finished" class="form-control"/>
										</td>
										<td>
											<div id="dynamic-action"></div>
										</td>
									</tr>
									<tbody id="child-node"></tbody>
								</table>
								<div class="form-group">
									<span class="btn btn-subtle-primary" id="dynamic-add-button">Add Row</span>
								</div>

								<button class="btn btn-primary">Save</button>
								{!! form_close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
	<script src="{{ base_url('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
	<script src="{{ base_url('assets/vendor/flatpickr/plugins/monthSelect/index.js') }}"></script>
@endpush

@push('js')
	<script src="{{ base_url('/assets/js/hdynamic/hdynamic.js') }}"></script>
@endpush
