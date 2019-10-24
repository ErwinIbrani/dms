@extends('layouts.app')

@section('page_title', 'Preview')

@section('content')

	<div class="wrapper">
		<div class="page has-sidebar has-sidebar-expand-xl">
			<div class="page-inner">
				<header class="page-title-bar">

					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active">
								<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Preview Document</a>
							</li>
						</ol>
					</nav>


					<div class="d-md-flex align-items-md-start">
						<h1 class="page-title mr-sm-auto">Preview:  {{ ucwords($document->name) }} </h1>
					</div>
				</header>

				<div class="page-section">
					<div class="invoice-wrapper">

						<div class="invoice-actions">
							<div class="dropdown">
								<button type="button" class="btn btn-lg btn-secondary rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-caret-down"></span></button>
								<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: top, left; top: 45px; left: 44px;">
									<div class="dropdown-arrow mr-1"></div>
									<a href="{{site_url('uploads/tsa/'.$document->path.'')}}" id="download-pdf" class="dropdown-item">Download PDF</a>
								</div>
							</div>
						</div>

						<div id="invoice" class="invoice" data-id="INV-65D9E592" style="display: none;">

							<div class="invoice-header"></div>
							<div class="invoice-body"></div>
							<div class="invoice-footer"></div>
						</div>
						<div>
							<embed src="{{base_url('uploads/tsa/'.$document->path.'')}}" type="application/pdf" width="800px" height="2100px" />
						</div>
					</div>
				</div>
		</div>
			<div class="page-sidebar">

				<div class="card card-reflow">
					<div class="card-body"></div>
					<div class="card-body border-top">
						<h4 class="card-title"> History </h4>
						<ul class="timeline timeline-dashed-line">

							<li class="timeline-item">

								<div class="timeline-figure">
									<span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
								</div>

								<div class="timeline-body">
									<h6 class="timeline-heading"> Document Created </h6>
									<span class="timeline-date">{{ date('d/m/Y H:m:s', strtotime($document->created_at)) }}</span>
								</div>

							</li>
						</ul>

		     			@if($docuemntStatus->layer == 1 && date('d/m/Y', strtotime($document->created_at)) == date('d/m/Y') && $docuemntStatus->document_type == 'Prepared')
							@php
							view('approval.tsa._form', ['status' => $status]);
							@endphp
					    @elseif($docuemntStatus->layer == 2 && date('d/m/Y', strtotime('+1 day', strtotime($document->created_at))) == date('d/m/Y') && $docuemntStatus->document_type == 'Prepared')
							@php
								view('approval.tsa._form', ['status' => $status]);
							@endphp
						@elseif($docuemntStatus->layer == 3 && date('d/m/Y', strtotime('+2 day', strtotime($document->created_at))) == date('d/m/Y') && $docuemntStatus->document_type == 'Prepared')
							@php
								view('approval.tsa._form', ['status' => $status]);
							@endphp
						@elseif($docuemntStatus->layer == 1 && date('d/m/Y', strtotime($document->created_at)) == date('d/m/Y') && $docuemntStatus->document_type == 'Acknowledge')
							@php
								view('approval.tsa._form', ['status' => $status]);
							@endphp
						@elseif($docuemntStatus->layer == 2 && date('d/m/Y', strtotime('+1 day', strtotime($document->created_at))) == date('d/m/Y') && $docuemntStatus->document_type == 'Acknowledge')
							@php
								view('approval.tsa._form', ['status' => $status]);
							@endphp
						@elseif($docuemntStatus->layer == 3 && date('d/m/Y', strtotime('+2 day', strtotime($document->created_at))) == date('d/m/Y') && $docuemntStatus->document_type == 'Acknowledge')
							@php
								view('approval.tsa._form', ['status' => $status]);
							@endphp
                         @endif




					</div>
				</div>
			</div>
		</div>
	</div>
@endsection