@extends('layouts.app')

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
								@include('vendor.cme.com_cme.nav_menu', array('project_id' => $project->id))
							</div>
							<div class="card-body">
								<div class="mb-4">
									<a href="{{ site_url('/vendor/comcme/generatekomcme/'. $project->id) }}" class="btn btn-secondary">Generate KOM CME</a>
									<a href="{{ site_url('/vendor/comcme/generatekomletter/'. $project->id) }}" class="btn btn-secondary">Generate Surat Pernyataan KOM CME</a>
								</div>

								<div class="">
									<h5 class="card-title"> DOCUMENT KOM CME </h5>
									<div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
