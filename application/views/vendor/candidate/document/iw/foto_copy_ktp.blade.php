@extends('layouts.app')
@section('page_title', 'Document IW')

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
							<a class="nav-link  show active"
							   href="{{ site_url('/vendor/candidate/document/iw/add/'. $candidate->id) }}">IW
								Document</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="card card-fluid">
						<h6 class="card-header"> Document IW </h6><!-- .nav -->

						<ul class="nav nav-tabs flex-column border-0">
							<li class="nav-item">
								<a class="nav-link"
								   href="{{ site_url('/vendor/candidate/document/iw/add/'.$candidate->id) }}">
									Surat Persetujuan Lingkungan</a>
							</li>
							<li class="nav-item">
								<a class="nav-link"
								   href="{{ site_url('/vendor/candidate/document/iw/izinwarga/'. $candidate->id) }}">
									Denah Layout Izin Warga</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active"
								   href="{{ site_url('/vendor/candidate/document/iw/copyktp/'. $candidate->id) }}">
									Foto Copy KTP Warga</a>
							</li>
							<li class="nav-item">
								<a class="nav-link"
								   href="{{ site_url('/vendor/candidate/document/iw/rekdesa/'. $candidate->id) }}">
									Surat Rekomendasi Desa
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link"
								   href="{{ site_url('/vendor/candidate/document/iw/rekkecamatan/'. $candidate->id) }}">
									Surat Rekomendasi Kecamatan
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card card-fluid">
						<div class="card-header">
							Foto Copy KTP Warga
						</div>
						<div class="card-body">
							{!! form_open_multipart(site_url('/vendor/candidate/document/iw/uploadcopyktp/' . $candidate->id)) !!}


							<div class="form-group">
								<label for="foto_copy_ktp_warga">Foto Copy KTP Warga</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="foto_copy_ktp_warga"
										   name="foto_copy_ktp_warga">
									<label class="custom-file-label" for="foto_copy_ktp_warga">Choose files</label>
								</div>
							</div>

							<p class="mt-5 text-muted">
							<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
							</p>

							<button class="btn btn-primary btn-md" type="submit">Submit</button>

							{!! form_close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection


