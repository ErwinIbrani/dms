@extends('layouts.app')

@section('page_title', 'Preview')

@section('content')
	<div class="page">
		<div class="page-inner">
			<header class="page-title-bar">
				<!-- .breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Candidate Document</a>
						</li>
					</ol>
				</nav><!-- /.breadcrumb -->

				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto">Preview:  {{ ucwords($candidate->name) }} </h1><!-- .btn-toolbar -->
				</div><!-- /title and toolbar -->
			</header>

			<div class="page-section">
				<div class="card card-fluid">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<span class="nav-link active">Document Preview</span>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="m-3 p-2 border">
							content here
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
