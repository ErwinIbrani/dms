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
							<a class="nav-link"
							   href="{{ site_url('/vendor/candidate/document/bak/add/'. $candidate->id) }}">BAK
								Document</a>
						</li>
						<li class="nav-item">
							<a class="nav-link  show active"
							   href="{{ site_url('/vendor/candidate/document/iw/add/'. $candidate->id) }}">IW
								Document</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="text-muted">
					<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
					<div class="form-group">
						<span class="badge badge-secondary">Document IW</span>
					</div>
					</div>

					{!! form_open() !!}
					<div class="form-group">
						<label for="authorized_address">Surat Persetujuan Linkungan</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="surat_persetujuan_lingkungan"
								   name="surat_persetujuan_lingkungan">
							<label class="custom-file-label" for="surat_persetujuan_lingkungan">Choose files</label>
						</div>
					</div>

					<div class="form-group">
						<label for="authorized_address">Denah Layout Izin Warga</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="denah_layout_izin_warga"
								   name="denah_layout_izin_warga">
							<label class="custom-file-label" for="denah_layout_izin_warga">Choose files</label>
						</div>
					</div>

					<div class="form-group">
						<label for="foto_copy_ktp_warga">Foto Copy KTP Warga</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="foto_copy_ktp_warga"
								   name="foto_copy_ktp_warga">
							<label class="custom-file-label" for="foto_copy_ktp_warga">Choose files</label>
						</div>
					</div>

					<div class="form-group">
						<label for="rekomendasi_desa">Rekomendasi Desa</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="rekomendasi_desa"
								   name="rekomendasi_desa">
							<label class="custom-file-label" for="rekomendasi_desa">Choose files</label>
						</div>
					</div>

					<div class="form-group">
						<label for="rekomendasi_kecamatan">Rekomendasi Kecamatan</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="rekomendasi_kecamatan"
								   name="rekomendasi_kecamatan">
							<label class="custom-file-label" for="rekomendasi_kecamatan">Choose files</label>
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
@endsection

