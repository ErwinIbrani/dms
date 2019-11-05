@extends('layouts.app')
@section('page_title', 'User Internal')

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
					<h1 class="page-title mr-sm-auto"> User </h1><!-- .btn-toolbar -->
					<div class="btn-toolbar">
						<a href="{{ site_url('/admin/userManagement/createUserInternal') }}" class="btn btn-outline-primary">
							<span class="ml-1">Add New User</span></a>
					</div>
				</div><!-- /title and toolbar -->
			</header>

			<div class="page-section">
				<div class="card card-fluid">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="{{ site_url('admin/user-management/internal') }}">Internal User</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="{{ site_url('admin/user-management/vendor') }}">Vendor Users</a>
							</li>
						</ul>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<!-- .table -->
                            {!! $data['grid_html'] !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
