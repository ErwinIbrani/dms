@extends('layouts.app')
@section('page_title', 'Candidate')

@section('content')
	<div class="page">
		<div class="page-inner">
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
					{!! form_open(site_url('vendor/candidates/store/' . $project->id)) !!}
						<input type="hidden" class="form-control" name="project_id" value="{{ $project->id }}">
						<input type="hidden" class="form-control" name="vendor_id" value="{{ $project->vendor_id }}">
					<div class="form-group">
						<div class="form-label-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="Candidate name">
							<label for="name">Candidate Name</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<div class="form-label-group">
									<input type="text" class="form-control" name="long" id="long" placeholder="Long">
									<label for="long">Long</label>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="form-label-group">
									<input type="text" class="form-control" name="lat" id="lat" placeholder="Lat">
									<label for="lat">Lat</label>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input type="text" class="form-control" name="address" id="address" placeholder="Address">
							<label for="address">Address</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Add Candidate</button>
					{!! form_close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
