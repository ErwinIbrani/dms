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
											Concrete Propposal
										</a>
									</li>
								</ul>

							</div>
							<div class="card-body">
								<div class="">
									<div>
										{!! form_open() !!}

										<div class="row my-4">
											<div class="col-md-12">
												<table class="table table-bordered">
													<thead>
													<tr>
														<th width="10%" rowspan="2" style="vertical-align: middle">
															TRUCK OR MIX No
														</th>
														<th colspan="2" style="vertical-align: middle" class="text-center">DELIVERY</th>
														<th  rowspan="2" style="vertical-align: middle">SLUMP (cm)</th>
														<th width="20%" rowspan="2" style="vertical-align: middle">OK / NOT OK</th>
														<th rowspan="2" style="vertical-align: middle"></th>
													</tr>
													<tr>
														<th>Departure</th>
														<th>Pouring</th>
													</tr>
													</thead>

													<tr id="parent-node">
														<td><input type="text" name="truck[]" id="description" class="form-control"/></td>
														<td><input type="text" name="departure[]" id="description" class="form-control"/></td>
														<td><input type="text" name="pouring[]" id="description" class="form-control"/></td>
														<td><input type="text" name="slump[]" id="description" class="form-control"/></td>
														<td>
															<select name="status[]" id="status" class="form-control">
																<option value="OK">OK</option>
																<option value="NOT OK">NOT OK</option>
															</select>
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
											</div>

										</div>




										<div class="form-group mt-4">
											<label for="ready_mix_note">Notes</label>
											<textarea name="ready_mix_note" id="ready_mix_note"
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

