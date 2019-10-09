@extends('layouts.app')
@section('page_title', 'Project Detail')

@section('content')
	<div class="page">
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
										<th>Owner Address</th>
										<th>Owner Phone</th>
										<th style="width:100px; min-width:100px;"> &nbsp; </th>
									</tr>
									</thead>
									<tbody>
									@foreach($candidates as $candidate)
										<tr>
											<td>{{ $candidate->name }}</td>
											<td>{{ $candidate->long . '/' . $candidate->lat }}</td>
											<td>{{ $candidate->address }}</td>
											<td>{{ $candidate->owner_name }}</td>
											<td>{{ $candidate->owner_address }}</td>
											<td>{{ $candidate->phone_number }}</td>

											<td class="text-right">
												<div class="list-group-item-figure">
													<a href="{{ site_url('/vendor/project/details/' . $candidate->id . '/' . $vendor_id) }}" title="View details" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
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
	</div>
@endsection
