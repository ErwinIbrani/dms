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
									<div class="col-md-3">Site ID / Name:</div>
									<div class="col-md-7"><b>BGR_TDD001</b> / <b>KP. PABUARAN</b></div>
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


							{!! form_open(site_url('/vendor/candidate/document/bap/store/'.$candidate->id)) !!}

							<p class="mt-5 text-muted">
								<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
								<div class="form-group">
									<span class="badge badge-secondary">Authorized is <b>optional</b>, you can skip this field.</span>
								</div>
							</p>

							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="authorized_name">Authorized Name</label>
										<input type="text" class="form-control" id="authorized_name"
											   name="authorized_name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="authorized_id_card">KTP Number</label>
										<input type="text" class="form-control" id="authorized_id_card"
											   name="authorized_id_card">
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="authorized_phone_number">Phone Number</label>
										<input type="text" class="form-control" id="authorized_phone_number"
											   name="authorized_phone_number">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="authorized_address">Address</label>
								<input type="text" class="form-control" id="authorized_address"
									   name="authorized_address">
							</div>


							<p class="mt-5 text-muted">
							<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
							<div class="form-group">
								<span class="badge badge-secondary">Statment Information</span>
							</div>
							</p>

							<div class="form-row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="control-label" for="flatpickr01">Aggrement Date</label>
										<input id="flatpickr01" type="text" class="form-control flatpickr-input"
											   data-toggle="flatpickr">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="fls1">Type</label>
										<select class="form-control" id="building_type" name="building_type">
											<option value=""> Choose...</option>
											<option value="lahan"> Lahan</option>
											<option value="ruko"> Ruko</option>
											<option value="roof_top"> Roof Top</option>
										</select>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="rent_price">Rent Price</label>
										<div class="input-group">
											<div class="input-group-prepend" for="rent_price">
												<span class="badge">Rp.</span>
											</div>
											<input type="text" class="form-control" id="rent_price" name="rent_price">
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group">
										<label for="rent_period">Rent Period</label>
										<div class="input-group input-group-alt">
											<input type="text" class="form-control" id="rent_period">
											<div class="input-group-append">
												<span class="input-group-text"> / Year</span>
											</div>
										</div>
									</div>
								</div>
							</div>

							<p class="mt-5 text-muted">
								<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
								<div class="form-group">
									<span class="badge badge-secondary">Provisions Information</span>
								</div>
							</p>

							<div class="form-row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="space_dimension">Space Dimension (m<sup>2</sup>)</label>
										<div class="input-group">
											<input type="text" class="form-control" id="space_dimension" name="space_dimension">
										</div>
{{--										<small id="space_dimension" class="form-text text-muted">--}}
{{--											Fill with m x m = m<sup>2</sup>--}}
{{--										</small>--}}
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<label for="access_road">Access Road (m<sup>2</sup>)</label>
										<div class="input-group">
											<input type="text" class="form-control" id="access_road" name="access_road">
										</div>
										<div class="mt-1">
											<div class="custom-control custom-control-inline custom-radio">
												<input type="radio" class="custom-control-input" name="access_road_type" id="rd1">
												<label class="custom-control-label" value="rent" for="rd1">Include Rent</label>
											</div>
											<div class="custom-control custom-control-inline custom-radio">
												<input type="radio" class="custom-control-input" name="access_road_type" id="rd2">
												<label class="custom-control-label" value="public" for="rd2">Public Road</label>
											</div>
										</div>
									</div>
								</div>
							</div>

							<p class="mt-5 text-muted">
								<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
								<div class="form-group">
									<span class="badge badge-secondary">Extends Information</span>
								</div>
							</p>

							<div class="form-row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="d-block">PPN</label>
										<div class="custom-control custom-control-inline custom-radio">
											<input type="radio" class="custom-control-input" value="include" name="ppn" id="ppn1"> <label class="custom-control-label" for="ppn1">Include</label>
										</div>
										<div class="custom-control custom-control-inline custom-radio">
											<input type="radio" class="custom-control-input" value="not_include" name="ppn" id="ppn2"> <label class="custom-control-label" for="ppn2">Not Included</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="d-block">PPh</label>
										<div class="custom-control custom-control-inline custom-radio">
											<input type="radio" class="custom-control-input" value="include" name="pph" id="pph1"> <label class="custom-control-label" for="pph1">Include</label>
										</div>
										<div class="custom-control custom-control-inline custom-radio">
											<input type="radio" class="custom-control-input" value="not_include"  name="pph" id="pph2"> <label class="custom-control-label" for="pph2">Not Included</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="d-block">Notary Fee</label>
										<div class="custom-control custom-control-inline custom-radio">
											<input type="radio" class="custom-control-input" value="include" name="notary_fee" id="nf1"> <label class="custom-control-label" for="nf1">Include</label>
										</div>
										<div class="custom-control custom-control-inline custom-radio">
											<input type="radio" class="custom-control-input" value="not_include" name="notary_fee" id="nf2"> <label class="custom-control-label" for="nf2">Not Included</label>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="d-block">Electricity cost.</label>
										<div class="custom-control custom-control-inline custom-radio">
											<input type="radio" class="custom-control-input" value="include" name="electricity_cost" id="ec1"> <label class="custom-control-label" for="ec1">Include</label>
										</div>
										<div class="custom-control custom-control-inline custom-radio">
											<input type="radio" class="custom-control-input" value="not_include" name="electricity_cost" id="ec2"> <label class="custom-control-label" for="ec2">Not Included</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="note">Note</label>
								<textarea name="note" id="note" cols="30" rows="5" class="form-control"></textarea>
							</div>

							<p class="mt-5 text-muted">
								<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
							</p>

							<button class="btn btn-primary btn-lg" type="submit">Submit</button>


							{!! form_close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
