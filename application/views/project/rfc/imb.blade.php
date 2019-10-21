@extends('layouts.app')
@section('page_title', 'RFC - IMB')

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
				<h1 class="page-title mr-sm-auto"> RFC: {{ $project->wbs_id }} </h1><!-- .btn-toolbar -->
			</div><!-- /title and toolbar -->
		</header>

		<div class="card card-fluid">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs">
					<li class="nav-item">
						<a class="nav-link active"
						   href="#">RFC</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="card card-fluid">
					<h6 class="card-header"> Ready For Construction </h6><!-- .nav -->

					<ul class="nav nav-tabs flex-column border-0">
						<li class="nav-item">
							<a class="nav-link active"
							   href="{{ site_url('/project/rfc/imb/'.$project->id) }}">
								IMB</a>
						</li>
						<li class="nav-item">
							<a class="nav-link "
							   href="{{ site_url('/project/rfc/legal/'.$project->id) }}">
								Legal</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-8">
				<div class="card card-fluid">
					<div class="card-header">
						Document IMB
					</div>

					<div class="card-body">
						@if(count($documents) !== 0)
							<p>This documents bellow is IMS Document for project with WBS ID {{$project->wbs_id}}</p>
						@endif
						@foreach($documents as $document)
							<div class="list-group-item">
								<div class="list-group-item-figure">
									<a href="#" class="tile tile-circle bg-apple"><span class="fa fa-file-pdf"></span></a>
								</div>
								<div class="list-group-item-body">
									<h4 class="list-group-item-title">
										<a href="#">{{$document->document_name}}</a>
									</h4>
									<p class="list-group-item-text">{{ date('d M Y', strtotime($document->created_at)) }} </p>
								</div>
								<div class="list-group-item-figure">
									<button class="btn btn-sm btn-icon btn-light"><i class="oi oi-data-transfer-download"></i></button>
								</div>
							</div>
						@endforeach
						@if(count($documents) === 0)
							<p class="text-center text-muted mt-5">No document found, or document not uploaded yet.</p>
							<p class="text-center text-muted mb-5"><small>Please complete document at SITAC2 App.</small></p>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
