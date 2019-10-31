@extends('layouts.app')
@section('page_title', 'Mechanical Electrical')
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
					<div class="col-md-4">
						@include('layouts.components.cme_menu', array('project_id' => $project->id))
					</div>
					<div class="col-md-8">
						<div class="card card-fluid">
							<div class="card-header">
								<ul class="nav nav-tabs card-header-tabs">
									<li class="nav-item">
										<a href="#" class="nav-link active">
											Document PLN
										</a>
									</li>
								</ul>

							</div>
							<div class="card-body">
								<div class="mb-4">
									<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#uploadDokumenPln">
										<span class="ml-1">Upload Document PLN</span></button>
									<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#uploadKartuGaransi">
										<span class="ml-1">Upload Kartu Garansi</span></button>
								</div>

								<div class="">
									<h5 class="card-title"> Document PLN </h5>
									<div>
										<div class="list-group-item">
											<div class="list-group-item-figure">
												<a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
											</div>
											<div class="list-group-item-body">
												<h4 class="list-group-item-title">
													<a href="#">Dokumen PLN</a>
												</h4>
												<p class="list-group-item-text"> {{ date('M d, Y') }}</p>
											</div>
											<div class="list-group-item-figure">
												<a href="#" target="_blank" class="btn btn-sm btn-icon btn-light">
													<i class="oi oi-data-transfer-download"></i>
												</a>
											</div>
										</div>
										<div class="list-group-item">
											<div class="list-group-item-figure">
												<a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
											</div>
											<div class="list-group-item-body">
												<h4 class="list-group-item-title">
													<a href="#">Kartu Garansi PLN</a>
												</h4>
												<p class="list-group-item-text"> {{ date('M d, Y') }}</p>
											</div>
											<div class="list-group-item-figure">
												<a href="#" target="_blank" class="btn btn-sm btn-icon btn-light">
													<i class="oi oi-data-transfer-download"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('vendor.cme.pln.form.dokumen_pln')
	@include('vendor.cme.pln.form.kartu_garansi')
@endsection
