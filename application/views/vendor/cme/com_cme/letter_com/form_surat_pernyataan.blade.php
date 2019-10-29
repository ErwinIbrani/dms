@extends('layouts.app')

@section('content')
	<div class="page">
		<div class="page-inner">
			<header class="page-title-bar">

				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="{{ site_url('/vendor/comcme/letter/'. $project->id) }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>COM CME</a>
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

					<div class="col-md-12">
						<div class="card card-fluid">
							<div class="card-header">
								@include('vendor.cme.com_cme.nav_form', array('project_id' => $project->id))
							</div>
							<div class="card-body">
								<h5 class="card-title"> Surat Pernyataan KOM CME </h5>
								<div>
									{!! form_open() !!}
									<div class="form-row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="no_po">No PO</label>
												<input type="text" name="no_po" id="no_po" class="form-control"/>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="po_date">Tanggal PO</label>
												<input type="text" name="date_po" id="date_po" class="form-control"/>
											</div>
										</div>
									</div>

									<div class="form-row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="kom_at">Kick Off Meeting at</label>
												<input type="date" name="kom_at" id="kom_at" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="vendor_name">Vendor Name</label>
												<input type="text" name="vendor_name" id="vendor_name" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="form-row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="checking_at">Pengecekan Kondisi Lapangan</label>
												<input type="date" name="checking_at" id="checking_at" class="form-control"/>
											</div>
										</div>
									</div>
									<button class="btn btn-primary">Save</button>
									{!! form_close() !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
