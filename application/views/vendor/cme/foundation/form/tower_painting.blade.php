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
					<div class="col-md-3">
						@include('vendor.cme.foundation._form_list', array('project_id' => $project->id))
					</div>
					<div class="col-md-9">
						<div class="card card-fluid">
							<div class="card-header">
								<ul class="nav nav-tabs card-header-tabs">
									<li class="nav-item">
										<a href="#" class="nav-link active">
											Raft Foundation
										</a>
									</li>
								</ul>

							</div>
							<div class="card-body">
								<div class="">
									<div>
										{!! form_open() !!}

										<div class="form-row my-4">
											<div class="col-md-12">
												<div><b>1. Material :</b></div>
											</div>
											<div class="col-md-12">
												Primer Paint (if required)
											</div>
											<div class="col-md-8">
												Manufacturer
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="tower_painting_primer_manufacturer"
														   class="form-control" id="tower_painting_primer_manufacturer">

												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												Product Type/Number
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="tower_painting_primer_product_type"
														   class="form-control" id="tower_painting_primer_product_type">

												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-12">
												Top Coat
											</div>
											<div class="col-md-8">
												Manufacturer
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="tower_painting_top_coat_manufacturer"
														   class="form-control" id="tower_painting_top_coat_manufacturer">

												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												Product Type/Number
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<label for="tower_painting_top_coat_product_type_white">White</label>
													<input type="text" name="tower_painting_top_coat_product_type_white"
														   class="form-control" id="tower_painting_top_coat_product_type_white">
												</div>
												<div class="form-group">
													<label for="tower_painting_top_coat_product_type_orange">Orange</label>
													<input type="text" name="tower_painting_top_coat_product_type_orange"
														   class="form-control" id="tower_painting_top_coat_product_type_orange">
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-12">
												Thinner
											</div>
											<div class="col-md-8">
												Manufacturer
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="tower_painting_thinner_manufacturer"
														   class="form-control" id="tower_painting_thinner_manufacturer">

												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												Product Type/Number
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="tower_painting_thinner_product_type"
														   class="form-control" id="tower_painting_thinner_product_type">

												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">Preparation</div>
											<div class="col-md-8">
												<div>
													Surface preparation before painting   : </div>
											</div>
											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_suface_preparation" id="tower_painting_suface_preparation_ok"
														   value="OK"> <label class="custom-control-label"
																					for="tower_painting_suface_preparation_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_suface_preparation" id="tower_painting_suface_preparation_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																					for="tower_painting_suface_preparation_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>Bolts and nuts are tightened before painted :   : </div>
											</div>
											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_bolts_and_nuts" id="tower_painting_bolts_and_nuts_ok"
														   value="Yes"> <label class="custom-control-label"
																					for="tower_painting_bolts_and_nuts_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_bolts_and_nuts" id="tower_painting_bolts_and_nuts_not_ok"
														   value="NO"> <label class="custom-control-label"
																					for="tower_painting_bolts_and_nuts_not_ok">NO</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												Workmanship</div>
											<div class="col-md-8">
												<div>
													Top coat uniformity   : </div>
											</div>
											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_top_coat_uniformity" id="tower_painting_top_coat_uniformity_ok"
														   value="OK"> <label class="custom-control-label"
																					for="tower_painting_top_coat_uniformity_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_top_coat_uniformity" id="tower_painting_top_coat_uniformity_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																					for="tower_painting_top_coat_uniformity_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													7 Section Painting   : </div>
											</div>
											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_section_painting" id="tower_painting_section_painting_ok"
														   value="Yes"> <label class="custom-control-label"
																					for="tower_painting_section_painting_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_section_painting" id="tower_painting_section_painting_not_ok"
														   value="NO"> <label class="custom-control-label"
																					for="tower_painting_section_painting_not_ok">NO</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													All exposed steel surface (incl. bolt, nut, and appurtenance) painted:</div>
											</div>
											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_all_exposed" id="tower_painting_all_exposed_ok"
														   value="Yes"> <label class="custom-control-label"
																					for="tower_painting_all_exposed_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="tower_painting_all_exposed" id="tower_painting_all_exposed_not_ok"
														   value="NO"> <label class="custom-control-label"
																					for="tower_painting_all_exposed_not_ok">NO</label>
												</div>
											</div>
										</div>


										<div class="form-group mt-4">
											<label for="tower_painting_note">Notes</label>
											<textarea name="tower_painting_note" id="tower_painting_note"
													  class="form-control"
													  cols="30" rows="5"></textarea>
										</div>

										<button class="btn btn-primary">Save & Continue to Re-bar & FormWorks</button>
										{!! form_close() !!}
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
