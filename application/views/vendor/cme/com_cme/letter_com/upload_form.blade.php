@extends('layouts.app')
@section('page_title', 'Upload KOM CME')

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
					<h1 class="page-title mr-sm-auto">Project: TBBB001</h1>
					<div class="btn-toolbar">
					</div>
				</div>
			</header>

			<div class="page-section">

				<div class="row">
					<div class="col-md-4">
						@include('layouts.components.cme_menu', array('project_id' => $project_id))
					</div>
					<div class="col-md-8">
						<div class="card card-fluid">
							<div class="card-header">
								@include('vendor.cme.com_cme.nav_menu', array('project_id' => $project_id))
							</div>
							<div class="card-body">
								<div class="mb-4">
									<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#uploadKomCme">
										<span class="ml-1">Upload KOM CME</span></button>
									<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#uploadSuratPernyataan">
										<span class="ml-1">Upload Surat Pernyataan KOM CME</span></button>
								</div>
								<h5 class="card-title"> LIST UPLOADED DOCUMENT KOM CME </h5>
								<div>
									<div class="list-group-item">
										<div class="list-group-item-figure">
											<a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
										</div>
										<div class="list-group-item-body">
											<h4 class="list-group-item-title">
												<a href="#">KOM CME</a>
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
												<a href="#">Surat Pernyataan KOM CME</a>
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

	@include('vendor.cme.com_cme.form.kom_cme')
	@include('vendor.cme.com_cme.form.surat_pernyataan_kom')
@endsection
