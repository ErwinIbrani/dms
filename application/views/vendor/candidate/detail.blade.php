@extends('layouts.app')
@section('page_title', 'Candidate Document')

@section('content')
<div class="page">
	<div class="page-inner">
		<header class="page-title-bar">
			<!-- .breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active">
						<a href="#">Project: {{ $project->wbs_id }}</a>
					</li>
				</ol>
			</nav><!-- /.breadcrumb -->

			<!-- title and toolbar -->
			<div class="d-md-flex align-items-md-start">
				<h1 class="page-title mr-sm-auto">Candidate: {{ $candidate->name }} - {{ $candidate->has_selected }}</h1><!-- .btn-toolbar -->
				<div class="btn-toolbar">
				</div>
			</div><!-- /title and toolbar -->
		</header>

		<div class="page-section">
			<div class="card card-fluid">
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs">
						<li class="nav-item">
							<a class="nav-link show active" data-toggle="tab" href="#card-sitac">SITAC</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#card-iw">IMB</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#card-legal">LEGAL</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#card-cme">CME</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#card-cme">PLN</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div id="myTabCard" class="tab-content">
						<div class="tab-pane show active" id="card-sitac">
							<h5 class="card-title"> DOCUMENT SITAC </h5>

							<div class="list-group-item">
								<div class="list-group-item-figure">
									<a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
								</div>
								<div class="list-group-item-body">
									<h4 class="list-group-item-title">
										<a href="#">TSSR</a>
									</h4>
									<p class="list-group-item-text"> Jan 28, 2018 </p>
								</div>
								<div class="list-group-item-figure">
									<button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
								</div>
							</div>

							<div class="list-group-item">
								<div class="list-group-item-figure">
									<a href="#" class="tile tile-circle bg-info"><span class="fa fa-file-image"></span></a>
								</div>
								<div class="list-group-item-body">
									<h4 class="list-group-item-title">
										<a href="#">BAP</a>
									</h4>
									<p class="list-group-item-text"> Jan 12, 2018 </p>
								</div>
								<div class="list-group-item-figure">
									<button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
								</div>
							</div>

							<p class="card-text mt-3"> The document above is a list of sitac documents, if not complete click the button below to upload or generate documents. </p><a href="#" class="btn btn-danger">Go somewhere</a>

						</div>
						<div class="tab-pane fade" id="card-iw">
							<h5 class="card-title"> DOCUMENT IMB </h5>
							<div class="list-group-item">
								<div class="list-group-item-figure">
									<a href="#" class="tile tile-circle bg-info"><span class="fa fa-file-image"></span></a>
								</div>
								<div class="list-group-item-body">
									<h4 class="list-group-item-title">
										<a href="#">Surat ijin kecamatan</a>
									</h4>
									<p class="list-group-item-text"> Jan 12, 2018 </p>
								</div>
								<div class="list-group-item-figure">
									<button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
								</div>
							</div>

							<p class="card-text mt-3"> The document above is a list of IMB documents, </p>
						</div>
						<div class="tab-pane fade" id="card-legal">
							<h5 class="card-title"> DOCUMENT IMB </h5>
							<div class="list-group-item">
								<div class="list-group-item-figure">
									<a href="#" class="tile tile-circle bg-info"><span class="fa fa-file-image"></span></a>
								</div>
								<div class="list-group-item-body">
									<h4 class="list-group-item-title">
										<a href="#">Surat ijin kecamatan</a>
									</h4>
									<p class="list-group-item-text"> Jan 12, 2018 </p>
								</div>
								<div class="list-group-item-figure">
									<button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
								</div>
							</div>

							<p class="card-text mt-3"> The document above is a list of legal documents, </p>
						</div>
						<div class="tab-pane fade" id="card-cme">
							<h5 class="card-title"> DOCUMENT CME </h5>
							<p class="card-text"> With supporting text below as a natural lead-in to additional content. </p><a href="#" class="btn btn-danger">Go somewhere</a>
						</div>
						<div class="tab-pane fade" id="card-pln">
							<h5 class="card-title"> DOCUMENT PLN </h5>
							<p class="card-text"> With supporting text below as a natural lead-in to additional content. </p><a href="#" class="btn btn-danger">Go somewhere</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
