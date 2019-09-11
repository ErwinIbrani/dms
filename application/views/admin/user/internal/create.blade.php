@extends('layouts.app')
@section('page_title', 'Add Internal User')

@section('content')
	<div class="page">
		<!-- .page-inner -->
		<div class="page-inner">
			<header class="page-title-bar">
				<!-- .breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>User</a>
						</li>
					</ol>
				</nav><!-- /.breadcrumb -->

				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto"> Add Internal User </h1><!-- .btn-toolbar -->
					<div class="btn-toolbar">
						<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#userGroupFrom">
							<span class="ml-1">Submit</span>
						</button>
						<a href="{{ site_url('/admin/user-management/internal') }}" class="btn btn-subtle-danger">
							<span class="ml-1">Cancel</span>
						</a>
					</div>
				</div><!-- /title and toolbar -->
			</header>

			<div class="page-section">
				{!! form_open() !!}
				<div class="row">
					<div class="col-md-4">
						<div class="card card-fluid">
							<div class="card-header">
								Account Role
							</div>
							<div class="card-body">
								<p class="text-muted"><small>Please select a role to this account.</small></p>
								<div>
									<div class="custom-control custom-control-inline custom-checkbox mt-1">
										<input type="checkbox" class="custom-control-input" id="ckb1">
										<label class="custom-control-label" for="ckb1">Supervisor</label>
									</div>
									<div class="custom-control custom-control-inline custom-checkbox mt-1">
										<input type="checkbox" class="custom-control-input" id="ckb2">
										<label class="custom-control-label" for="ckb2">Manager</label>
									</div>
									<div class="custom-control custom-control-inline custom-checkbox mt-1">
										<input type="checkbox" class="custom-control-input" id="ckb3">
										<label class="custom-control-label" for="ckb3">Surveyor</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="card card-fluid">
							<div class="card-header">
								Account Detail
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" placeholder="eg. jhon.doe@ibstower.com" required="">
								</div>
								<div class="form-group">
									<label for="username">Name</label>
									<input type="text" class="form-control" id="username" placeholder="e.g Jhone Doe" required="">
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" class="form-control" id="password" placeholder="Password for user" required="">
								</div>
								<div class="form-group">
									<label for="vendor">Vendor</label>
									<select name="vendor" id="vendor" class="form-control">
										<option value="supervisor">Supervisor</option>
										<option value="manager">Manager</option>
									</select>
								</div>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="type">Type</label>
										<input type="text" class="form-control" id="type" value="Vendor" disabled>
									</div><!-- form column -->
									<!-- /form column -->
									<!-- form column -->
									<div class="col-md-6 mb-3">
										<label for="level">Type</label>
										<select name="level" id="level" class="form-control">
											<option value="supervisor">Supervisor</option>
											<option value="manager">Manager</option>
										</select>
									</div><!-- /form column -->
								</div>
							</div>
						</div>
					</div>
				</div>
				{!! form_close() !!}
			</div>
		</div>
	</div>
@endsection
