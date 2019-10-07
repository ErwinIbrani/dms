@extends('layouts.app')
@section('page_title', 'Assignment Project to Vendor')

@section('content')
	<div class="page">
		<div class="page-inner">
			<header class="page-title-bar">
				<!-- .breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Assigment</a>
						</li>
					</ol>
				</nav><!-- /.breadcrumb -->

				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto"> Vendor to project </h1><!-- .btn-toolbar -->
					<div class="btn-toolbar">

					</div>
				</div><!-- /title and toolbar -->
			</header>

			<div class="page-section">
				<div class="card card-fluid">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#">Assigment</a>
							</li>
						</ul>
					</div>
					{!! form_open('', array('id' => 'add-form', 'class' => 'needs-validation')) !!}
					<div class="card-body">
						<div id="alert-display"></div>
						<div class="form-group">
							<label for="vendor">Vendor</label>
							<select name="vendor" id="vendor" class="custom-select" required>
								<option value="">Select...</option>
								@foreach($vendors as $vendor)
									<option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
								@endforeach
							</select>

							<p class="form-text text-muted small">
								Before make assigment vendor to project, make sure that vendor has registered in this
								application.
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
										<select name="assign_wbs[]" id="assign_wbs" class="custom-select" required>
											<option value="">Select...</option>
											@foreach($projects as $project)
												<option value="{{ $project->id }}">{{$project->wbs_id}} -
													(IRO: {{ $project->iro_number }})
												</option>
											@endforeach
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="assign_type">Assign Type</label>
										<select name="assign_type[]" id="assign_type" class="custom-select" required>
											<option value="">Select...</option>
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
					</div>
					<div class="card-footer">
						<div class="card-footer-content">
							<button class="btn btn-primary float-right" id="submit-button">Submit</button>
						</div>
					</div>
					{!! form_close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
	<script src="{{ base_url('assets/js/hdynamic/hdynamic.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"
			type="text/javascript"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.min.js"
			type="text/javascript"></script>

	<script type="text/javascript">
        $(document).ready(function () {
            let resText = '';

            $("#add-form").validate({
                rules: {
                    vendor: "required",
                    "assign_wbs[]": "required",
                    "assign_type[]": "required"
                },
                messages: {
                    vendor: {
                        required: "Vendor is required",
                    },
                    "assign_wbs[]": {
                        required: "WBS ID is required",
                    },
                    "assign_type[]": {
                        required: "Assign Type is required",
                    }
                },
                submitHandler: function (from) {
                    $('#submit-button').html('Saving...');

                    $.ajax({
						url: "{{ base_url('/procurement/assigntovendor/store') }}",
						method: "POST",
						data: $('#add-form').serialize(),
						dataType: "json",
						success: function(response) {
                            $('#submit-button').html('Saved');
                            resText = response.data.success;
                            let alertSuccess = '<div class="alert alert-success">'+resText+'</div>';
                            $('#alert-display').append(alertSuccess);

                            setTimeout(function(){
                                $('#alert-display').empty();
                            },5000);
						},
						error: function(response) {
						    console.log(response)
						}
					})
                }
            });
        });
	</script>
@endpush
