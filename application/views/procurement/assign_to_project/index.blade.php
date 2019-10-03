@extends('layouts.app')
@section('page_title', 'Assignment Vendor to Project')

@section('content')
	<div class="page">
		<div class="page-inner">
			@include('procurement.assign_to_project._header')
			<div class="page-section">
				<div class="card card-fluid">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#">Assigment</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="project">WBS_ID (Project)</label>
							<select name="project" id="project" class="form-control">
								<option>Select...</option>
								<option value="1">WBS_001</option>
								<option value="2">WBS_002</option>
							</select>

							<p class="form-text text-muted small">
								Before make assigment project (wbs_id) to vendor, make sure that project (wbs_id) has
								registered in this application.
							</p>
						</div>

						<div class="form-group">
							<label>Add vendor to this project</label>
						</div>

						<div id="dynamic-form">
							<div class="form-row" id="parent-node">
								<div class="col-md-4">
									<div class="form-group">
										<label for="assign_vendor">Vendor</label>
										<select name="assign_vendor" id="assign_vendor" class="form-control">
											<option>Select...</option>
											<option value="VENDOR_001">VENDOR_001</option>
											<option value="VENDOR_002">VENDOR_002</option>
											<option value="VENDOR_003">VENDOR_003</option>
											<option value="VENDOR_004">VENDOR_004</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="">Assign Type</label>
										<select name="assign_type" class="form-control">
											<option>Select...</option>
											<option value="SITAC">SITAC</option>
											<option value="IMB">IMB</option>
											<option value="CME">CME</option>
											<option value="PLN">PLN</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<label></label>
									<div id="dynamic-action"></div>
								</div>
							</div>
						</div>
						<div id="child-node"></div>

						<div class="form-group">
							<button class="btn btn-subtle-primary" id="dynamic-add-button">Add Vendor</button>
						</div>

					</div>
					<div class="card-footer">
						<div class="card-footer-content">
							<button class="btn btn-primary float-right">Submit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
	<script src="{{ base_url('assets/js/hdynamic/hdynamic.js') }}"></script>
@endpush
