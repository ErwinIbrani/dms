@extends('layouts.app')
@section('page_title', 'Form BAK')

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
					content
				</div>
			</div>
		</div>
	</div>
@endsection

