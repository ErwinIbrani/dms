@extends('layouts.app')
@section('page_title', 'Project Detail')

@section('content')
	<div class="page has-sidebar has-sidebar-expand-xl">
		<div class="page-inner">
			<header class="page-title-bar">
				<!-- .breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Vendor</a>
						</li>
					</ol>
				</nav><!-- /.breadcrumb -->

				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto">Project: {{ $project->wbs_id }}</h1><!-- .btn-toolbar -->
					<div class="btn-toolbar">
					</div>
				</div><!-- /title and toolbar -->
			</header>

			<div class="page-section">
				<div class="card card-fluid">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a href="{{ site_url('/vendor/project/index') }}" class="nav-link active">
									Candidates
								</a>
							</li>
							<li class="nav-item">
								<a href="{{ site_url('/project/tsa/create/'. $project->candidate_selected) }}" class="nav-link">
									TSA
								</a>
							</li>
							<li class="nav-item">
								<a href="{{ site_url('/project/apd/addlist/'.$project->id) }}" class="nav-link">
									APD
								</a>
							</li>
							<li class="nav-item">
								<a href="{{ site_url('/project/rfc/imb/'.$project->id) }}" class="nav-link">
									RFC
								</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<div class="table-responsive">
								<!-- .table -->
								<table class="table">
									<thead>
									<tr>
										<th>Candidate Name</th>
										<th>Long/Lat</th>
										<th>Address</th>
										<th>Owner Name</th>
										<th style="width:100px; min-width:100px;"> &nbsp;</th>
									</tr>
									</thead>
									<tbody>
									@foreach($candidates as $candidate)
										<tr>
											<td>{{ $candidate->name }}
												@if($project->candidate_selected === $candidate->id)
													<span class="badge badge-warning mr-2">Candidate Selected</span>
													<a href="{{site_url('/project/candidate/unselect/'. $project->id .'/'.$candidate->id)}}" class="badge badge-danger mr-2">Unselect Candidate </a>
												@endif</td>
											<td>{{ $candidate->long . '/' . $candidate->lat }}</td>
											<td>{{ $candidate->address }}</td>
											<td>{{ $candidate->owner_name }}</td>
											<td class="text-right">
												<div class="list-group-item-figure">
													@if(is_null($project->candidate_selected))
														<a href="{{site_url('/project/candidate/select/'. $project->id .'/'.$candidate->id)}}"
														   class="btn btn-sm btn-icon btn-secondary mr-2"><i
																class="fa fa-check" title="Choose Candidate"
																onclick="confirm('Are you sure want to select this candidate ?');"></i>
															<span class="sr-only">Select</span></a>
													@endif
													<a href="{{ site_url('/vendor/candidate/detail/index/' . $candidate->id ) }}"
													   title="View details"
													   class="btn btn-sm btn-icon btn-secondary stop-propagation"><i
															class="fas fa-ellipsis-h"></i></a>
												</div>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								@if(count($candidates) < 1)
									<div class="text-center">Not data.</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
		<div class="page-sidebar">
			<!-- .card -->
			<div class="card card-reflow">
				<div class="card-body">
					<h4 class="card-title"> Progress </h4>
					<div class="progress progress-sm rounded-0 mb-1">
						<div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="15"
							 aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<p class="text-muted text-weight-bolder small"> 15% of 100% </p>
				</div><!-- .card-body -->
				<div class="card-body border-top">
					<h4 class="card-title"> History </h4><!-- .timeline -->
					<ul class="timeline timeline-dashed-line">
						<!-- .timeline-item -->
						<li class="timeline-item">
							<!-- .timeline-figure -->
							<div class="timeline-figure">
								<span class="tile tile-circle tile-xs bg-success"><i class="fa fa-check"></i></span>
							</div><!-- /.timeline-figure -->
							<!-- .timeline-body -->
							<div class="timeline-body">
								<h6 class="timeline-heading"> Invoice created </h6><span class="timeline-date">08/18/2018 – 12:42 PM</span>
							</div><!-- /.timeline-body -->
						</li><!-- /.timeline-item -->

					</ul><!-- /.timeline -->
				</div><!-- /.card-body -->
			</div><!-- /.card -->
		</div>
	</div>
@endsection
