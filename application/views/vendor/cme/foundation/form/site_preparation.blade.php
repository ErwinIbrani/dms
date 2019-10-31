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
					<div class="col-md-4">
						@include('vendor.cme.foundation._form_list', array('project_id' => $project->id))
					</div>
					<div class="col-md-8">
						<div class="card card-fluid">
							<div class="card-header">
								<ul class="nav nav-tabs card-header-tabs">
									<li class="nav-item">
										<a href="#" class="nav-link active">
											Site Preparation
										</a>
									</li>
								</ul>

							</div>
							<div class="card-body">
								<div class="">
									<div>
										{!! form_open() !!}
										<div class="form-row">
											<div class="col-md-12">
												<p><b>1. General</b></p>
											</div>
											<div class="col-md-4">
												<div>Work Permission Letter</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="work_permission_letter" id="available"
														   value="available"> <label class="custom-control-label"
																					 for="available">Available</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="work_permission_letter" id="unavailable"
														   value="unavailable"> <label class="custom-control-label"
																					 for="unavailable">Unavailable</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div><b>2. Site ready to construction</b></div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="site_ready_construction" id="site_ready_ok"
														   value="ok"> <label class="custom-control-label"
																					 for="site_ready_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="site_ready_construction" id="site_ready_not_ok"
														   value="not ok"> <label class="custom-control-label"
																					   for="site_ready_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<p><b>3. Site Preparation</b></p>
											</div>
											<div class="col-md-4 pl-4">
												<div>a. Site Boundary</div>
												<span>(based on former land owner and neighbors assessment)</span>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="site_boundary" id="site_boundary_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="site_boundary_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="site_boundary" id="site_boundary_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="site_boundary_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div>b. Zero level</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="zero_level" id="zero_level_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="zero_level_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="zero_level" id="zero_level_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="zero_level_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div>c. Benchmarks / Bowplank setting</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="benchmarks" id="benchmarks_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="benchmarks_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="benchmarks" id="benchmarks_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="benchmarks_not_ok">Not OK</label>
												</div>
											</div>
										</div>
										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div>d. Site Lay-Out</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="site_layout" id="site_layout_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="site_layout_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="site_layout" id="site_layout_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="site_layout_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<p><b>4. Temporary Fencing (if any)</b></p>
											</div>
											<div class="col-md-4 pl-4">
												<div>a. Material</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="material" id="material_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="material_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="material" id="material_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="material_not_ok">Not OK</label>
												</div>
											</div>
										</div>
										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div>b. Height (180 cm)</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fencing_temporary_height" id="fencing_temporary_height_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="fencing_temporary_height_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fencing_temporary_height" id="fencing_temporary_height_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="fencing_temporary_height_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div>c. Rigidity & Stability</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fencing_temporary_rigidity" id="fencing_temporary_rigidity_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="fencing_temporary_rigidity_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fencing_temporary_rigidity" id="fencing_temporary_rigidity_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="fencing_temporary_rigidity_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div>d. Doors</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fencing_temporary_doors" id="fencing_temporary_doors_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="fencing_temporary_doors_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fencing_temporary_doors" id="fencing_temporary_doors_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="fencing_temporary_doors_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<p><b>5. Works facilities</b></p>
											</div>
											<div class="col-md-4 pl-4">
												<div>a. Proper water supply</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_water_supply" id="proper_water_supply_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="proper_water_supply_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_water_supply" id="proper_water_supply_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="proper_water_supply_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div>b. Proper materials storage</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_materials_storage" id="proper_materials_storage_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="proper_materials_storage_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_materials_storage" id="proper_materials_storage_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="proper_materials_storage_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div>c. Proper source supply</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_source_supply" id="proper_source_supply_ok"
														   value="ok"> <label class="custom-control-label"
																			  for="proper_source_supply_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_source_supply" id="proper_source_supply_not_ok"
														   value="not ok"> <label class="custom-control-label"
																				  for="proper_source_supply_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="site_preparation_note">Notes</label>
											<textarea name="site_preparation_note" id="site_preparation_note" class="form-control" cols="30" rows="5"></textarea>
										</div>

										<button class="btn btn-primary">Save & Continue to Excavation</button>
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
