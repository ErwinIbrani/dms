@extends('layouts.app')
@section('page_title', 'Add APD Site')

@section('content')
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
				<h1 class="page-title mr-sm-auto"> APD Site </h1><!-- .btn-toolbar -->
			</div><!-- /title and toolbar -->
		</header>

		<div class="card card-fluid">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs">
					<li class="nav-item">
						<a class="nav-link active"
						   href="#">APD Document</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="card card-fluid">
					<h6 class="card-header"> APD Document </h6><!-- .nav -->

					<ul class="nav nav-tabs flex-column border-0">
						<li class="nav-item">
							<a class="nav-link"
							   href="{{ site_url('/project/apd/addlist/'.$project->id) }}">
								APD List</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active"
							   href="{{ site_url('/project/apd/addsite/'.$project->id) }}">
								APD Site</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card card-fluid">
					<div class="card-header">
						APD Site
					</div>
					<div class="card-body">
						{!! form_open_multipart(site_url('/project/apd/uploadsite/'. $project->id)) !!}


						<div class="form-group">
							<label for="add_site">Upload APD Site Document </label>

							<div class="custom-file">
								<input type="file" class="custom-file-input" id="apd_site"
									   name="apd_site">
								<label class="custom-file-label" for="apd_site">Choose
									files</label>
							</div>
						</div>


						<p class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						</p>

						<button class="btn btn-primary btn-md" type="submit">Submit</button>

						{!! form_close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
