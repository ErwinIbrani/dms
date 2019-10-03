@extends('layouts.app')
@section('page_title', 'Assignment Project to Vendor')

@section('content')
	<div class="page">
		<div class="page-inner">
			@include('procurement.assign_to_vendor._header')
			<div class="page-section">
				<div class="card card-fluid">
					<div class="card-header">
						<ul class="nav nav-tabs card-header-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#">List</a>
							</li>
						</ul>
					</div>
					<div class="card-body">
						list vendor
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
	<script src="{{ base_url('assets/js/hdynamic/hdynamic.js') }}"></script>
@endpush
