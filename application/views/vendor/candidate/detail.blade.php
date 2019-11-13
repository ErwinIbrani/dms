<?php $CI = &get_instance(); ?>
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
							<a class="nav-link show active" data-toggle="tab" href="#card-survey">TSSR (Survey)</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " data-toggle="tab" href="#card-bap">BAP</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#card-bak">BAK</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#card-iw">IW</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div id="myTabCard" class="tab-content">
						<div class="tab-pane show active" id="card-survey">

							<h5 class="card-title"> DOCUMENT SURVEY </h5>
							@foreach($document_tssr as $tssr)
								<div class="list-group-item">
									<div class="list-group-item-figure">
										<a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
									</div>
									<div class="list-group-item-body">
										<h4 class="list-group-item-title">
											<a href="#">TSSR - {{ $tssr->name }}</a>
										</h4>
										<p class="list-group-item-text"> {{ date('M d, Y', strtotime($tssr->created_at)) }}</p>
									</div>
									<div class="list-group-item-figure">
										<a href="{{ site_url('uploads/surveysitac/'.$tssr->path) }}" target="_blank" class="btn btn-sm btn-icon btn-light">
											<i class="oi oi-data-transfer-download"></i>
										</a>
										<a href="{{ site_url('/vendor/candidate/document/survey/view/'.$tssr->id) }}" class="btn btn-sm btn-icon btn-light">
											<i class="fa fa-eye"></i>
										</a>
									</div>
								</div>
							@endforeach

							@if(count($document_tssr) === 0 || is_null($document_tssr))
								<p class="text-muted p-2">Document not found or not uploaded yet.</p>
                                <?php if($CI->ion_auth->in_group('PIC Vendor')): ?>
								<a href="{{ site_url('/vendor/candidate/document/survey/create/'.$candidate->id) }}"
								   class="btn btn-danger {{ $project->work_status !== 'KOM SITAC, BAP, TSSR' ? 'disabled' : ''}}">Generate TSSR Document</a>
                                <?php endif?>
							@else
								<p class="card-text mt-3"> The document above is a list of TSSR documents, if not found document click the button below to generate new document. </p>
							@endif

						</div>
						<div class="tab-pane fade" id="card-bap">
							<h5 class="card-title"> DOCUMENT BAP </h5>
							@foreach($document_bap as $bap)
								<div class="list-group-item">
									<div class="list-group-item-figure">
										<a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
									</div>
									<div class="list-group-item-body">
										<h4 class="list-group-item-title">
											<a href="#">{{ $bap->name }}</a>
										</h4>
										<p class="list-group-item-text"> {{ date('M d, Y', strtotime($bap->created_at)) }}</p>
									</div>
									<div class="list-group-item-figure">
										<a href="{{ site_url('uploads/bap/'.$bap->path) }}" target="_blank" class="btn btn-sm btn-icon btn-light">
											<i class="oi oi-data-transfer-download"></i>
										</a>
									</div>
								</div>
							@endforeach
							@if(count($document_bap) === 0)
								<p class="text-muted p-2">Document not found or not uploaded yet.</p>
                                <?php if($CI->ion_auth->in_group('PIC Vendor')): ?>
								<a href="{{ site_url('/vendor/candidate/document/bap/add/'.$candidate->id) }}"
								   class="btn btn-danger  {{ $project->work_status !== 'KOM SITAC, BAP, TSSR' ? 'disabled' : ''}}">Generate BAP Document</a>
                                <?php endif?>
							@else
								<p class="card-text mt-3"> The document above is a list of BAP documents, </p>
								@foreach($document_bak as $bak)
									@if(is_null($bak->attachment))
										<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#uploadBap">
											<span class="ml-1">Upload BAP</span></button>
										@include('vendor.candidate.document.bak.upload_form')
									@endif
								@endforeach
							@endif


						</div>
						<div class="tab-pane fade" id="card-bak">
							<h5 class="card-title"> DOCUMENT BAK </h5>
							@foreach($document_bak as $bak)
								<div class="list-group-item">
									<div class="list-group-item-figure">
										<a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
									</div>
									<div class="list-group-item-body">
										<h4 class="list-group-item-title">
											<a href="#">{{ $bak->name }}</a>
										</h4>
										<p class="list-group-item-text"> {{ date('M d, Y', strtotime($bak->created_at)) }}</p>
									</div>
									<div class="list-group-item-figure">
										<a href="{{ site_url('uploads/bak/'.$bak->path) }}" target="_blank" class="btn btn-sm btn-icon btn-light">
											<i class="oi oi-data-transfer-download"></i>
										</a>
									</div>
								</div>
							@endforeach
							@if(count($document_bak) === 0)
								<p class="text-muted p-2">Document not found or not uploaded yet.</p>
                                <?php if($CI->ion_auth->in_group('PIC Vendor')): ?>
								<a href="{{ site_url('/vendor/candidate/document/bak/add/'.$candidate->id) }}"
								   class="btn btn-danger  {{ $project->work_status !== 'BAK' ? 'disabled' : ''}}">Generate BAK Document</a>
                                <?php endif?>
							@else
								<p class="card-text mt-3"> The document above is a list of BAK documents, </p>
								@foreach($document_bak as $bak)
									@if(is_null($bak->attachment))
										<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#uploadBak">
											<span class="ml-1">Upload BAK</span></button>
										@include('vendor.candidate.document.bak.upload_form')
									@endif
								@endforeach

							@endif


						</div>
						<div class="tab-pane fade" id="card-iw">
							<h5 class="card-title"> DOCUMENT IW </h5>
							@foreach($document_iw as $iw)
								<div class="list-group-item">
									<div class="list-group-item-figure">
										<a href="#" class="tile tile-circle bg-success"><span class="fa fa-file-archive"></span></a>
									</div>
									<div class="list-group-item-body">
										<h4 class="list-group-item-title">
											<a href="#">{{ $iw->name }}</a>
										</h4>
										<p class="list-group-item-text"> {{ date('M d, Y', strtotime($iw->created_at)) }}</p>
									</div>
									<div class="list-group-item-figure">
										<a href="{{ site_url($iw->path) }}" target="_blank" class="btn btn-sm btn-icon btn-light">
											<i class="oi oi-data-transfer-download"></i>
										</a>
									</div>
								</div>
							@endforeach
							@if(count($document_iw) !== 5)
								<p class="text-muted p-2">Document not complete.</p>
                                <?php if($CI->ion_auth->in_group('PIC Vendor')): ?>
								<a href="{{ site_url('/vendor/candidate/document/iw/add/'.$candidate->id) }}"
								   class="btn btn-danger {{ $project->work_status !== 'IW' ? 'disabled' : ''}}">Upload IW Document</a>
                                <?php endif?>
							@else
								<p class="card-text mt-3"> The document above is a list of IW documents, </p>
							@endif


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
