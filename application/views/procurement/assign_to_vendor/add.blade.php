@extends('layouts.app')
@section('page_title', 'Assignment Project to Vendor')

@section('content')
	<div class="page">
		<div class="page-inner">
			@include('procurement.assign_to_vendor._header')
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
						{!! form_open('/procurement/assigntovendor/store', array('id' => 'add-form')) !!}
						<div class="form-group">
							<label for="vendor">Vendor</label>
							<select name="vendor" id="vendor" class="form-control">
								<option value="">Select...</option>
								@foreach($vendors as $vendor)
									<option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
								@endforeach
							</select>

							<p class="form-text text-muted small">
								Before make assigment vendor to project, make sure that vendor has registered in this application.
							</p>
						</div>

						<div class="form-group">
							<label>Add projects to this vendor</label>
						</div>

						<div id="dynamic-form">
							<div class="form-row" id="parent-node">
								<div class="col-md-4">
									<div class="form-group">
										<label for="assign_wbs">Project (WBS ID)</label>
										<select name="assign_wbs" id="assign_wbs[]" class="form-control">
											<option>Select...</option>
											@foreach($projects as $project)
												<option value="{{ $project->id }}">{{$project->wbs_id}} - (IRO: {{ $project->iro_number }})</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="assign_type">Assign Type</label>
										<select name="assign_type[]" id="assign_type" class="form-control">
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
							<span class="btn btn-subtle-primary" id="dynamic-add-button">Add Project</span>
						</div>
						{!! form_close() !!}
					</div>
					<div class="card-footer">
						<div class="card-footer-content">
							<button class="btn btn-primary float-right" onclick="document.getElementById('add-form').submit()">Submit</button>
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
