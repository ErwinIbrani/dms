@extends('layouts.app')

@section('content')
	<div class="page">
		<!-- .page-inner -->
		<div class="page-inner">
			<header class="page-title-bar">
				<!-- .breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>User</a>
						</li>
					</ol>
				</nav><!-- /.breadcrumb -->

				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto"> {{ $title }}</h1><!-- .btn-toolbar -->
				</div><!-- /title and toolbar -->
			</header>

			<div class="page-section">
				{!! form_open() !!}
				<div class="form-group">
					<label for="tf1">Name</label>
					<input type="text" class="form-control"
						   id="tf1" name="name" placeholder="e.g. Rendra, Adis">
				</div>

				<div class="form-group">
					<label for="tf2">Email</label>
					<input type="email" class="form-control"
						   id="tf2" name="email" placeholder="e.g. rendra@ibstower.com">
				</div>

				<div class="form-group">
					<label for="tf2">Password</label>
					<input type="password" class="form-control"
						   id="tf2" name="name">
				</div>

				<button class="btn btn-primary" type="submit">Submit</button>
				{!! form_close() !!}
			</div>
		</div>
	</div>
@endsection
