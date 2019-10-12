@extends('layouts.app')
@section('page_title', 'Form BAK')
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
							   href="{{ site_url('/vendor/candidate/document/survey/create/'.$candidate->id) }}">Document
								Survey</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
							   href="{{ site_url('/vendor/candidate/document/bap/add/'. $candidate->id) }}">BAP
								Document</a>
						</li>
						<li class="nav-item">
							<a class="nav-link show active"
							   href="{{ site_url('/vendor/candidate/document/bak/add/'. $candidate->id) }}">BAK
								Document</a>
						</li>
						<li class="nav-item">
							<a class="nav-link"
							   href="{{ site_url('/vendor/candidate/document/iw/add/'. $candidate->id) }}">IW
								Document</a>
						</li>
					</ul>
				</div>
				<div class="card-body">

					<h6 class="text-muted mt-3">Candidate Information</h6>
					<div class="mb-5">
						<div class="row mb-2">
							<div class="col-md-3">Site ID / Name:</div>
							<div class="col-md-7"><b>{{ $project->site_id_ibs }}</b> / <b>{{ $project->site_name }}</b></div>
						</div>
						<div class="row mb-2">
							<span class="col-md-3">Longituted / Latitude: </span>
							<span class="col-md-7">{{ $candidate->long }} / {{ $candidate->lat }} </span>
						</div>
						<div class="row mb-4">
							<span class="col-md-3">Site Address: </span>
							<span class="col-md-7">{{ $project->address }}</span>
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
					{!! form_open(site_url('/vendor/candidate/document/bak/store/'.$candidate->id)) !!}
					<div class="mt-2 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">BAK Information.</span>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="negotiation_by">Negotiation By <abbr title="Required">*</abbr></label>
								<select class="form-control" id="negotiation_by"
										name="negotiation_by" required>
									<option value="">Select</option>
									<option value="telepon">Phone</option>
									<option value="kunjungan">Visit</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="negotiation_at">Negotiation at <abbr title="Required">*</abbr></label>
								<input id="flatpickr01" type="date" name="negotiation_at" class="form-control flatpickr-input"
									   data-toggle="flatpickr" required>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="land_type">Land Type <abbr title="Required">*</abbr></label>
								<select class="form-control" id="land_type"
										name="land_type" required>
									<option value="">Select</option>
									<option value="tanah">Tanah</option>
									<option value="bangunan">Bangunan</option>
									<option value="gedung">Gedung</option>
									<option value="menara">Menara</option>
								</select>
							</div>
						</div>
					</div>

					<div class="mt-2 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Negotiations Between</span>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="first_person">First Person <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" name="first_person" id="first_person" required/>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="second_person">Second Person <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" name="second_person" id="second_person" required/>
							</div>
						</div>
					</div>

					<div class="mt-2 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Land Owner</span>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="owner_type">Owner Type <abbr title="Required">*</abbr></label>
								<select type="text" class="form-control" id="owner_type" name="owner_type" required>
									<option value="">Select</option>
									<option value="pribadi">Private (Pribadi)</option>
									<option value="perusahaan">Corporate (Perusahaan)</option>
								</select>
							</div>
						</div>
					</div>

					<div class="mt-5 text-muted">
					<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
					<div class="form-group">
						<span class="badge badge-secondary">Authorized is <b>optional</b>, you can skip this field.</span>
					</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="authorized_name">Authorized Name <span class="badge badge-secondary"><em>Optional</em></span></label>
								<input type="text" class="form-control" id="authorized_name"
									   name="authorized_name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="authorized_id_card">KTP Number <span class="badge badge-secondary"><em>Optional</em></span></label>
								<input type="text" class="form-control" id="authorized_id_card"
									   name="authorized_id_card">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="authorized_phone_number">Phone Number <span class="badge badge-secondary"><em>Optional</em></span></label>
								<input type="text" class="form-control" id="authorized_phone_number"
									   name="authorized_phone_number">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="authorized_address">Address <span class="badge badge-secondary"><em>Optional</em></span></label>
						<input type="text" class="form-control" id="authorized_address"
							   name="authorized_address">
					</div>

					<div class="mt-5 text-muted">
					<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
					<div class="form-group">
						<span class="badge badge-secondary">Terms and conditions: Total Rental Price of the Leased Object</span>
					</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="total_price_rent">Total Price Rent <abbr title="Required">*</abbr></label>
								<div class="input-group">
									<div class="input-group-prepend" for="total_price_rent">
										<span class="badge">Rp.</span>
									</div>
									<input type="number" class="form-control" id="total_price_rent" name="total_price_rent" required>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="be_regarded">be regarded <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" id="be_regarded"
									   name="be_regarded" required>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="rental_period">Rental Period <abbr title="Required">*</abbr></label>
								<input type="number" class="form-control" id="rental_period"
									   name="rental_period" required>
							</div>
						</div>
					</div>

					<div class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Terms and conditions: Payment</span>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="payment_type">Payment Type <abbr title="Required">*</abbr></label>
								<select class="form-control" id="payment_type"
										name="payment_type" required>
									<option value="">Select</option>
									<option value="tunai">Cash (Tunai)</option>
									<option value="giro">Giro</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="bank_name">Bank Name <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" id="bank_name"
										name="bank_name" required />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="account_number">Account Number (No. Rek) <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" id="account_number"
									   name="account_number" required />
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="account_name">Account Name (Atas Nama) <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" id="account_name"
									   name="account_name" required/>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-12 pb-1">Phase 1 <abbr title="Required">*</abbr></div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="input-group input-group-alt">
									<input type="text" class="form-control" id="phase_1_percent" name="phase_1_percent" required>
									<div class="input-group-append">
										<span class="input-group-text">%</span>
									</div>
								</div><!-- /.input-group -->
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend" for="phase_1_nominal">
										<span class="badge">Rp.</span>
									</div>
									<input type="text" class="form-control" id="phase_1_nominal" name="phase_1_nominal" required>
								</div>
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-12 pb-1">Phase 2 <abbr title="Required">*</abbr></div>
						<div class="col-md-4">
							<div class="form-group">
								<div class="input-group input-group-alt">
									<input type="text" class="form-control" id="phase_2_percent" name="phase_2_percent" required>
									<div class="input-group-append">
										<span class="input-group-text">%</span>
									</div>
								</div><!-- /.input-group -->
							</div>
						</div>
						<div class="col-md-8">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend" for="phase_2_nominal">
										<span class="badge">Rp.</span>
									</div>
									<input type="text" class="form-control" id="phase_2_nominal" name="phase_2_nominal" required>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="account_name">Note</label>
						<input type="text" class="form-control" id="note"
							   name="note" />
					</div>

					<div class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Terms and conditions: Luas Objek Keseluruhan (Sertipikat)</span>
						</div>
					</div>

					<div class="form-row">

						<div class="col-md-4">
							<div class="form-group">
								<label>Bumi <abbr title="Required">*</abbr></label>
								<div class="input-group input-group-alt">
									<input type="text" class="form-control" id="bumi" name="bumi" required>
									<div class="input-group-append">
										<span class="input-group-text">m <sup>2</sup></span>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Bangunan <abbr title="Required">*</abbr></label>
								<div class="input-group input-group-alt">
									<input type="text" class="form-control" id="bangunan" name="bangunan" required>
									<div class="input-group-append">
										<span class="input-group-text">m <sup>2</sup></span>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Terms and conditions: Tax</span>
						</div>
					</div>
					<div class="form-group">
						<label class="d-block">Inline checkbox</label>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="non_pkp" id="non_pkp">
							<label class="custom-control-label" for="non_pkp">Non PKP</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="kpk" name="pkp">
							<label class="custom-control-label" for="kpk">PKP (PPN 10% di tanggung oleh IBS)</label>
						</div>
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="pph" name="pph">
							<label class="custom-control-label" for="pph">dipotong PPh 10%</label>
						</div>
					</div>

					<div class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Terms and conditions: rental object status</span>
						</div>
					</div>

					<div class="form-group">
						<label>Payment method</label>
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" id="dijaminkan" value="ijaminkan" name="rent_object_status">
							<label class="custom-control-label" for="dijaminkan">Dijaminkan</label>
						</div>
						<div class="custom-control custom-radio">
							<input type="radio" class="custom-control-input" name="rent_object_status" value="Tidak Dijaminkan" id="tidak_dijaminkan">
							<label class="custom-control-label" for="tidak_dijaminkan">Tidak Dijaminkan</label>
						</div>
					</div>

					<div class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Terms and conditions: Status of Leased Property Rights</span>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="status_hak_object">Status Hak Objek Sewa <abbr title="Required">*</abbr></label>
								<select class="form-control" id="status_hak_object"
										name="status_hak_object" required>
									<option value="">Select</option>
									<option value="Sertifikat Hak Milik">Sertifikat Hak Milik</option>
									<option value="Guna Bangunan">Guna Bangunan</option>
									<option value="Lainnya">Others</option>
								</select>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="status_hak_object_nomor">Nomor <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" name="status_hak_object_nomor" id="status_hak_object_nomor" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="status_hak_object_lain">Others</label>
								<input type="text" class="form-control" name="status_hak_object_lain" id="status_hak_object_lain">
							</div>
						</div>
					</div>

					<div class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">User IBS</span>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="user_ibs_name">User IBS Name</label>
								<input type="text" class="form-control" name="user_ibs_name" id="user_ibs_name">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="user_ibs_position">User IBS Position</label>
								<input type="text" class="form-control" name="user_ibs_position" id="user_ibs_position">
							</div>
						</div>
					</div>

					<div class="mt-5 text-muted">
						<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
						<div class="form-group">
							<span class="badge badge-secondary">Saksi dari pemilik object sewa.</span>
						</div>
					</div>

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="saksi_1_name">Saksi 1 <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" name="saksi_1_name" id="saksi_1_name" required>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="saksi_2_name">Saksi 2 <abbr title="Required">*</abbr></label>
								<input type="text" class="form-control" name="saksi_2_name" id="saksi_2_name" required>
							</div>
						</div>
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
@endsection

