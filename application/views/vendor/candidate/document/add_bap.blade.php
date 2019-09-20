@extends('layouts.app')
@section('page_title', ucwords($candidate->name))

@push('style')
	<link rel="stylesheet" href="{{ base_url('assets/vendor/flatpickr/flatpickr.min.css') }}">
@endpush

@push('js')
	<script src="{{ base_url('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
	<script src="{{ base_url('assets/vendor/flatpickr/plugins/monthSelect/index.js') }}"></script>
@endpush
@section('content')
	<div class="page">
		<div class="page-inner">
			<header class="page-title-bar">
				<!-- .breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Candidate Document</a>
						</li>
					</ol>
				</nav><!-- /.breadcrumb -->

				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto"> {{ ucwords($candidate->name) }} </h1><!-- .btn-toolbar -->
				</div><!-- /title and toolbar -->
			</header>

			<div class="card card-fluid">
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs">
						<li class="nav-item">
							<a class="nav-link"
							   href="{{ site_url('/vendor/candidate/document/survey/index/'.$candidate->id) }}">Document
								Survey</a>
						</li>
						<li class="nav-item">
							<a class="nav-link show active"
							   href="{{ site_url('/vendor/candidate/document/bap/index/'. $candidate->id) }}">BAP
								Document</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content">
						<div class="tab-pane fade active show" id="candidate-survey" role="tabpanel">
							<h6 class="text-muted mt-3">Candidate Information</h6>
							<div class="mb-5">
								<div class="row mb-2">
									<div class="col-md-3">Site ID / Name: </div>
									<div class="col-md-7"><b>BGR_TDD001</b> / <b>KP. PABUARAN</b> </div>
								</div>
								<div class="row mb-2">
									<span class="col-md-3">Longituted / Latitude: </span>
									<span class="col-md-7">-233485.123 / 123394883 </span>
								</div>
								<div class="row mb-4">
									<span class="col-md-3">Site Address: </span>
									<span class="col-md-7">Jl. Sukasari V No.70, Sukawarna, Sukajadi, Bandung, Jawa Barat.</span>
								</div>
								<div class="row mb-2">
									<span class="col-md-3">Owner Name: </span>
									<span class="col-md-7"><b>{{ ucwords($candidate->owner_name) }}</b></span>
								</div>
								<div class="row mb-2">
									<span class="col-md-3">No. KTP: </span>
									<span class="col-md-7"><b>{{ $candidate->id_card }}</b></span>
								</div>
								<div class="row mb-2">
									<span class="col-md-3">Phone Number / Fax: </span>
									<span class="col-md-7">{{ $candidate->phone_number }}</span>
								</div>
								<div class="row mb-2">
									<span class="col-md-3">Owner Address: </span>
									<span class="col-md-7">{{ $candidate->address }}</span>
								</div>
							</div>


							{!! form_open() !!}

							<p class="text-muted">Authorized is <b>optional</b>, you can skip this field.</p>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group">
										<div class="form-label-group">
											<input type="text" class="form-control" id="authorized_name" name="authorized_name">
											<label for="authorized_name">Authorized Name</label>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<div class="form-label-group">
											<input type="text" class="form-control" id="authorized_id_card" name="authorized_id_card">
											<label for="authorized_id_card">KTP Number</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group">
										<div class="form-label-group">
											<input type="text" class="form-control" id="authorized_phone_number" name="authorized_phone_number">
											<label for="authorized_phone_number">Phone Number</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="form-label-group">
									<input type="text" class="form-control" id="authorized_address" name="authorized_address">
									<label for="authorized_address">Address</label>
								</div>
							</div>

							<p class="mt-4 text-muted">Satment Information</p>
							<div class="form-group">
								<div class="form-label-group">
									<input id="flatpickr01" type="text" class="form-control flatpickr-input" data-toggle="flatpickr">
									<label class="control-label" for="flatpickr01">Date</label>
								</div>
							</div>

							<div class="form-group">
								<div class="form-label-group">
									<select class="custom-select" id="building_type" name="building_type">
										<option value=""> Choose... </option>
										<option value="lahan"> Lahan </option>
										<option value="ruko"> Ruko </option>
										<option value="roof_top"> Roof Top </option>
									</select>
									<label for="fls1">Type</label>
								</div>
							</div>

							<p class="mb-1">Rend Price</p>
							<div class="input-group">
								<label class="input-group-prepend" for="rent_price">
									<span class="badge">IDR</span>
								</label>
								<input type="text" class="form-control" id="rent_price" name="rent_price">
							</div>

							<p class="mt-5 text-muted">Land Area:</p>
							<div class="form-row">
								<div class="col-md-3">
									<div class="form-group">
										<div class="form-label-group">
											<input type="text" class="form-control" id="sisi_2" name="sisi_2">
											<label for="sisi_2">Sisi (m)</label>
										</div>
									</div>
								</div>
								<div class=" d-flex align-self-center justify-content-center">
									<span class="d-inline-block align-middle">X</span>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="form-label-group">
											<input type="text" class="form-control" id="sisi" name="sisi">
											<label for="sisi">Sisi (m)</label>
										</div>
									</div>
								</div>
								<div class=" d-flex align-self-center justify-content-center">
									<span class="d-inline-block align-middle">X</span>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<div class="form-label-group">
											<input type="text" class="form-control" id="total_area" name="total_area">
											<label for="total_area">Total (m<sup>2</sup>) </label>
										</div>
									</div>
								</div>

							</div>

							{!! form_close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
