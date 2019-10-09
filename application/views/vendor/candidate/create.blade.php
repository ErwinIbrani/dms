@extends('layouts.app')
@section('page_title', 'Candidate')

@section('content')
	<div class="page">
		<div class="page-inner">
			<header class="page-title-bar">
				<!-- .breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Project</a>
						</li>
					</ol>
				</nav><!-- /.breadcrumb -->

				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto">Candidate</h1><!-- .btn-toolbar -->
					<div class="btn-toolbar">
					</div>
				</div><!-- /title and toolbar -->
			</header>

			<div class="card card-fluid">
				<div class="card-header">Add Candidate</div>
				<div class="card-body">
					@if(!empty(validation_errors()))
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-danger alert-dismissible fade show">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong><?php echo validation_errors(); ?></strong>
								</div>
							</div>
						</div>
					@endif

					{!! form_open(site_url('vendor/candidates/store/' . $project->id. '/' . $vendor_id)) !!}
					<input type="hidden" class="form-control" name="project_id" value="{{ $project->id }}">
					<input type="hidden" class="form-control" name="vendor_id" value="{{ $vendor_id }}">


					<div class="text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Candidate Information</span>
						</div>
					</div>
					<div class="form-group">
						<label for="name">Candidate Name</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Candidate name">
					</div>
					<div class="form-row mb-3">
						<div class="col-md-4">
							<div class="form-group">
								<label for="long">Long</label>
								<input type="text" class="form-control" name="long" id="long" placeholder="Long">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="lat">Lat</label>
								<input type="text" class="form-control" name="lat" id="lat" placeholder="Lat">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="lat">City/Province</label>
								<input type="text" class="form-control" name="city" id="city">
							</div>
						</div>

						
					</div>
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" class="form-control" name="address" id="address"
							   placeholder="Address">
					</div>

					<div class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Owner Information</span>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="owner_name">Owner Name</label>
								<input type="text" class="form-control" id="owner_name" name="owner_name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="id_card">No. KTP Owner</label>
								<input type="text" class="form-control" id="id_card"
									   name="id_card">
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="phone_number">Phone Number</label>
								<input type="text" class="form-control" id="phone_number" name="phone_number">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="fax">Fax Number (optional)</label>
								<input type="text" class="form-control" id="fax" name="fax">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="owner-address">Owner Address</label>
						<input type="text" class="form-control" id="owner-address" name="owner_address">
					</div>

					<button type="submit" class="btn btn-primary">Add Candidate</button>
					{!! form_close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
