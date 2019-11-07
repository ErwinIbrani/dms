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
						@include('vendor.cme.me._form', array('project_id' => $project->id))
					</div>
					<div class="col-md-9">
						<div class="card card-fluid">
							<div class="card-header">
								<ul class="nav nav-tabs card-header-tabs">
									<li class="nav-item">
										<a href="#" class="nav-link active">
											Grounding
										</a>
									</li>
								</ul>

							</div>
							<div class="card-body">
								<div class="">
									<div>
										{!! form_open() !!}

										<div class="form-row">
											<div class="col-md-8">
												<div><b>1. Down Conductor</b></div>
												<div>Using …….……... mm² continuous alluminum cable</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_length_alluminium_cable"
													   class="form-control" id="me_grounding_length_alluminium_cable">
												<div class="text-right">mm</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_length_alluminium_cable_status"
														   id="me_grounding_length_alluminium_cable_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_length_alluminium_cable_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_length_alluminium_cable_status"
														   id="me_grounding_length_alluminium_cable_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_length_alluminium_cable_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div>Connected directly to its copper plate / rod with bimetal connector</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_bimetal_connector"
														   id="me_grounding_bimetal_connector_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_bimetal_connector_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_bimetal_connector"
														   id="me_grounding_bimetal_connector_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_bimetal_connector_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div>
													Approved manufacture (big 4 manufacturer)  : </div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_approved_manufacture"
													   class="form-control" id="me_grounding_approved_manufacture">
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div><b>2. Air Terminal</b></div>
												<div>
													Air Lightning Rod ………. mm² solid alluminum:</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_lightning_rod"
													   class="form-control" id="me_grounding_lightning_rod">
												<div class="text-right">mm</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_lightning_rod_status"
														   id="me_grounding_lightning_rod_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_lightning_rod_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_lightning_rod_status"
														   id="me_grounding_lightning_rod_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_lightning_rod_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>Installed with galvanized pipe</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_installed_galvanized"
													   class="form-control" id="me_grounding_installed_galvanized">
												<div class="text-right">………"</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_installed_galvanized_status"
														   id="me_grounding_installed_galvanized_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_installed_galvanized_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_installed_galvanized_status"
														   id="me_grounding_installed_galvanized_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_installed_galvanized_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Length of Pipe </div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_stone_sand_fill"
													   class="form-control" id="me_grounding_air_length_pipe">
												<div class="text-right">mm</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_air_length_pipe_status"
														   id="me_grounding_air_length_pipe_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_air_length_pipe_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_air_length_pipe_status"
														   id="me_grounding_air_length_pipe_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_air_length_pipe_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>Isolators are in place and in good condition </div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_air_isolators_status"
														   id="me_grounding_air_isolators_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_air_isolators_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_air_isolators_status"
														   id="me_grounding_air_isolators_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_air_isolators_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div><b>3. Grounding Tower Legs / Pole Baseplate</b></div>
												<div>Using type  ………………. mm2</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_tower_legs_type"
													   class="form-control" id="me_grounding_tower_legs_type">
												<div class="text-right">mm</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_tower_legs_type_status"
														   id="me_grounding_tower_legs_type_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_tower_legs_type_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_tower_legs_type_status"
														   id="me_grounding_tower_legs_type_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_tower_legs_type_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Outdoor Flexible Pipe (Black Colour)</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_outdoor_flexible_pipe_status"
														   id="me_grounding_outdoor_flexible_pipe_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_outdoor_flexible_pipe_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_outdoor_flexible_pipe_status"
														   id="me_grounding_outdoor_flexible_pipe_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_outdoor_flexible_pipe_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>
													Every Tower Legs/Pole Baseplate</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_every_tower_legs_status"
														   id="me_grounding_every_tower_legs_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_every_tower_legs_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_every_tower_legs_status"
														   id="me_grounding_every_tower_legs_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_every_tower_legs_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Connected to tower leg/pole baseplate with Scoen</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_connected_to_tower_legs_status"
														   id="me_grounding_connected_to_tower_legs_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_connected_to_tower_legs_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_connected_to_tower_legs_status"
														   id="me_grounding_connected_to_tower_legs_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_connected_to_tower_legs_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div><b>4.
														Shelter Grounding</b></div>
												<div> Ring plate Dimension 50 x 4 mm²</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_shelter_ring_plate_status"
														   id="me_grounding_shelter_ring_plate_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_shelter_ring_plate_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_shelter_ring_plate_status"
														   id="me_grounding_shelter_ring_plate_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_shelter_ring_plate_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>
													Approved manufacture (big 4 manufacturer) </div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_shelter_approved_manufacture"
													   class="form-control" id="me_grounding_shelter_approved_manufacture">
												<div class="text-right">mm</div>
											</div>
										</div>


										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Connected Properly</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_shelter_connected_properly"
														   id="me_grounding_shelter_connected_properly_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_shelter_connected_properly_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_shelter_connected_properly"
														   id="me_grounding_shelter_connected_properly_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_shelter_connected_properly_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>
													Main Grounding Bar to IGB</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_shelter_main_grounding_status"
														   id="me_grounding_shelter_main_grounding_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_shelter_main_grounding_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_shelter_main_grounding_status"
														   id="me_grounding_shelter_main_grounding_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_shelter_main_grounding_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>
													Connection to Grounding Perimeter :</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_shelter_connection_status"
														   id="me_grounding_shelter_connection_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_shelter_connection_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_shelter_connection_status"
														   id="me_grounding_shelter_connection_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_shelter_connection_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">

												<div>
													Grounding Resistance</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_shelter_resistance"
													   class="form-control" id="me_grounding_shelter_resistance">
												<div class="text-right">ohm</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div><b>5. Fence Grounding  (for Greenfield only)</b></div>
												<div>
													Using BC 50 mm² cable</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_fance_cable_bc_status"
														   id="me_grounding_fance_cable_bc_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_fance_cable_bc_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_fance_cable_bc_status"
														   id="me_grounding_fance_cable_bc_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_fance_cable_bc_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Outdoor Flexible Pipe</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_fence_outdoor_pipe"
													   class="form-control" id="me_grounding_fence_outdoor_pipe">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_fence_outdoor_pipe_status"
														   id="me_grounding_fence_outdoor_pipe_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_fence_outdoor_pipe_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_fence_outdoor_pipe_status"
														   id="me_grounding_fence_outdoor_pipe_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_fence_outdoor_pipe_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>points are grounded</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_stone_sand_fill"
													   class="form-control" id="me_grounding_fence_point_grounded">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_fence_point_grounded_status"
														   id="me_grounding_fence_point_grounded_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_fence_point_grounded_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_fence_point_grounded_status"
														   id="me_grounding_fence_point_grounded_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_fence_point_grounded_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-12">
												<div><b>6.
														Grounding Rod</b></div>
											</div>
											<div class="col-md-8">
												<div>Solid copper, dia. </div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_solid_copper"
													   class="form-control" id="me_grounding_solid_copper">
												<div>format must: ……….. inch, ……. m</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_solid_copper_status"
														   id="me_grounding_solid_copper_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_solid_copper_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_solid_copper_status"
														   id="me_grounding_solid_copper_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_solid_copper_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Quantity  </div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_grounding_rod_quantity"
													   class="form-control" id="me_grounding_grounding_rod_quantity">
												<div>pcs</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_grounding_rod_quantity_status"
														   id="me_grounding_grounding_rod_quantity_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_grounding_rod_quantity_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_grounding_rod_quantity_status"
														   id="me_grounding_grounding_rod_quantity_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_grounding_rod_quantity_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>
													Distance between each rod  </div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_distance_between"
													   class="form-control" id="me_grounding_distance_between">
												<div>m</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-12">
												<div><b>7. Ring Perimeter </b></div>
											</div>

											<div class="col-md-8">
												<div>
													Using BC 50  mm² cable  </div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_ring_cable_status"
														   id="me_grounding_ring_cable_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_ring_cable_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_ring_cable_status"
														   id="me_grounding_ring_cable_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_ring_cable_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Buried at least 0.8 m depth from finished ground level </div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_ring_buried_status"
														   id="me_grounding_ring_buried_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_ring_buried_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_ring_buried_status"
														   id="me_grounding_ring_buried_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_ring_buried_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Distance from tower foundation </div>
											</div>

											<div class="col-md-4">
												<input type="text" name="me_grounding_ring_distance"
													   class="form-control" id="me_grounding_ring_distance">
												<div>mm</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-12"><b>8. External Grounding Bar (EGB)</b></div>

											<div class="col-md-8">
												<div>Grounding Bar (Galvanize steel bar)</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_external_bar"
													   class="form-control" id="me_grounding_external_bar">
												<div>…… mm x ……mm x …… mm</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_bar_status"
														   id="me_grounding_external_bar_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_external_bar_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_bar_status"
														   id="me_grounding_external_bar_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_external_bar_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Having  holes,</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_having_hole_status"
														   id="me_grounding_having_hole_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_having_hole_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_having_hole_status"
														   id="me_grounding_having_hole_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_having_hole_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Installed with Isolator and
													Stainless Steel Bolts and Nuts
												</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_installed_isolator_status"
														   id="me_grounding_installed_isolator_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_installed_isolator_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_installed_isolator_status"
														   id="me_grounding_installed_isolator_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_installed_isolator_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>-……… m Below  Antenna Level (Upper)</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_external_antenna_upper"
													   class="form-control" id="me_grounding_external_antenna_upper">
												<div>m</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_antenna_upper_status"
														   id="me_grounding_external_antenna_upper_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_external_antenna_upper_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_antenna_upper_status"
														   id="me_grounding_external_antenna_upper_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_external_antenna_upper_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>-……… m Below  Antenna Level (Middle)</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_external_antenna_middle"
													   class="form-control" id="me_grounding_external_antenna_middle">
												<div>m</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_antenna_middle_status"
														   id="me_grounding_external_antenna_middle_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_external_antenna_middle_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_antenna_middle_status"
														   id="me_grounding_external_antenna_middle_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_external_antenna_middle_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>-……… m Below  Antenna Level (Lower)</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_external_antenna_lower"
													   class="form-control" id="me_grounding_external_antenna_lower">
												<div>m</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_antenna_lower_status"
														   id="me_grounding_external_antenna_lower_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_external_antenna_lower_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_antenna_lower_status"
														   id="me_grounding_external_antenna_lower_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_external_antenna_lower_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Galvanize EGB closed to Inlet (FEP)</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_external_galvanize"
													   class="form-control" id="me_grounding_external_galvanize">
												<div>m</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_galvanize_status"
														   id="me_grounding_external_galvanize_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_external_galvanize_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_external_galvanize_status"
														   id="me_grounding_external_galvanize_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_external_galvanize_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-12">
												<b>10.a Collection Bar (MGB) - For Greenfield </b>
											</div>

											<div class="col-md-8">
												<div>Collection Bar made of …… mm x …… mm x …… mm solid copper plate with …… holes, dia ………… mm</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_collection_bar_made"
													   class="form-control" id="me_grounding_collection_bar_made">
												<div> …… mm x …… mm x …… mm</div>

												<input type="text" name="me_grounding_collection_solid_copper"
													   class="form-control" id="me_grounding_collection_solid_copper">
												<div> …… holes</div>

												<input type="text" name="me_grounding_stone_collection_dia"
													   class="form-control" id="me_grounding_stone_collection_dia">
												<div> …… mm</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_collection_bar_status"
														   id="me_grounding_collection_bar_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_collection_bar_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_collection_bar_status"
														   id="me_grounding_collection_bar_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_collection_bar_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>
													Using Stainless Steel Bolts & Nuts</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_greenfield_steel_bolts_status"
														   id="me_grounding_greenfield_steel_bolts_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_greenfield_steel_bolts_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_greenfield_steel_bolts_status"
														   id="me_grounding_greenfield_steel_bolts_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_greenfield_steel_bolts_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>


										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Connection from Cooper Rod with Cad Weld</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_greenfield_connection_cooper_status"
														   id="me_grounding_greenfield_connection_cooper_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_greenfield_connection_cooper_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_greenfield_connection_cooper_status"
														   id="me_grounding_greenfield_connection_cooper_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_greenfield_connection_cooper_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>


										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Other Connection with Scoen</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_connection_scoen_status"
														   id="me_grounding_connection_scoen_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_connection_scoen_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_connection_scoen_status"
														   id="me_grounding_connection_scoen_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_connection_scoen_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Every cable is labeled properly</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_greenfield_every_cable_status"
														   id="me_grounding_greenfield_every_cable_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_greenfield_every_cable_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_greenfield_every_cable_status"
														   id="me_grounding_greenfield_every_cable_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_greenfield_every_cable_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-12">
												<b>10.b Collection Bar (MGB) - Collection Bar (MGB) - For Rooftop </b>
											</div>

											<div class="col-md-8">
												<div>Collection Bar made of …… mm x …… mm x …… mm solid copper plate with …… holes, dia ………… mm</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_rf_collection_bar"
													   class="form-control" id="me_grounding_rf_collection_bar">
												<div> …… mm x …… mm x …… mm</div>

												<input type="text" name="me_grounding_rf_collection_holes"
													   class="form-control" id="me_grounding_rf_collection_holes">
												<div> …… holes</div>

												<input type="text" name="me_grounding_rf_collection_dia"
													   class="form-control" id="me_grounding_rf_collection_dia">
												<div> …… mm</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_rf_collection_status"
														   id="me_grounding_rf_collection_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_rf_collection_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_rf_collection_status"
														   id="me_grounding_rf_collection_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_rf_collection_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>
													Using Stainless Steel Bolts & Nuts</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_stone_rf_steel_bolts_status"
														   id="me_grounding_stone_rf_steel_bolts_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_stone_rf_steel_bolts_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_stone_rf_steel_bolts_status"
														   id="me_grounding_stone_rf_steel_bolts_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_stone_rf_steel_bolts_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Installed on Upper Control Box</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_rf_upper_control_status"
														   id="me_grounding_rf_upper_control_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_rf_upper_control_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_rf_upper_control_status"
														   id="me_grounding_rf_upper_control_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_rf_upper_control_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Installed on Lower Pit</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_rf_lower_pit_status"
														   id="me_grounding_rf_lower_pit_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_rf_lower_pit_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_rf_lower_pit_status"
														   id="me_grounding_rf_lower_pit_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_rf_lower_pit_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Every cable is labeled properly</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_rf_every_cable_status"
														   id="me_grounding_rf_every_cable_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_rf_every_cable_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_rf_every_cable_status"
														   id="me_grounding_rf_every_cable_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_rf_every_cable_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>


										<div class="form-row my-3">
											<div class="col-md-12">
												<b>11. Grounding Pit</b>
											</div>

											<div class="col-md-8">
												<div>Dimension …… x …… x …… mm</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_pit_dimension"
													   class="form-control" id="me_grounding_pit_dimension">
												<div> …… x …… x …… mm</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_pit_dimension_status"
														   id="me_grounding_pit_dimension_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_pit_dimension_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_pit_dimension_status"
														   id="me_grounding_pit_dimension_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_pit_dimension_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Cover & Position</div>
											</div>

											<div class="col-md-4">


												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_cover_position_status"
														   id="me_grounding_cover_position_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_cover_position_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_cover_position_status"
														   id="me_grounding_cover_position_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_cover_position_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>
													Padlock arrangement</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_padlock_status"
														   id="me_grounding_padlock_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_padlock_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_padlock_status"
														   id="me_grounding_padlock_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_padlock_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-12">
												<b>12.
													Grounding integration</b>
											</div>

											<div class="col-md-8">
												<div>All collecting bar integrated using stainless steel material</div>
											</div>

											<div class="col-md-4">


												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_integration_status"
														   id="me_grounding_integration_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_integration_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_integration_status"
														   id="me_grounding_integration_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_integration_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>
													Cad weld integration (…… points)</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_cad_weld_integration"
													   class="form-control" id="me_grounding_cad_weld_integration">
												<div> …… x …… x …… mm</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>- …… points for driven rod</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_integration_point_driven"
													   class="form-control" id="me_grounding_integration_point_driven">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_integration_point_driven_status"
														   id="me_grounding_integration_point_driven_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_integration_point_driven_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_integration_point_driven_status"
														   id="me_grounding_integration_point_driven_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_integration_point_driven_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>- …… points at buried perimeter to tower grounding</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_integration_point_primeter"
													   class="form-control" id="me_grounding_integration_point_primeter">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_integration_point_primeter_status"
														   id="me_grounding_integration_point_primeter_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_integration_point_primeter_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_integration_point_primeter_status"
														   id="me_grounding_integration_point_primeter_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_integration_point_primeter_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>- …… point for bonding ground bar on inspection pit to perimeter </div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_integration_point_pit"
													   class="form-control" id="me_grounding_integration_point_pit">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_integration_point_pit_status"
														   id="me_grounding_integration_point_pit_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_integration_point_pit_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_integration_point_pit_status"
														   id="me_grounding_integration_point_pit_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_integration_point_pit_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>- …… point for bonding driven rod of down conductor</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_point_bonding_driven"
													   class="form-control" id="me_grounding_point_bonding_driven">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_point_bonding_driven_status"
														   id="me_grounding_point_bonding_driven_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_point_bonding_driven_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_point_bonding_driven_status"
														   id="me_grounding_point_bonding_driven_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_point_bonding_driven_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>


										<div class="form-row my-3">
											<div class="col-md-12">
												<b>13. Grounding Measurement</b>
											</div>

											<div class="col-md-8">
												<div>Equipment Manufacturer (accredited manufacturer)</div>
											</div>

											<div class="col-md-4">

												<input type="text" name="me_grounding_equipment_manufacturer"
												class="form-control" id="me_grounding_equipment_manufacturer">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_equipment_manufacturer_status"
														   id="me_grounding_equipment_manufacturer_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_equipment_manufacturer_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_equipment_manufacturer_status"
														   id="me_grounding_equipment_manufacturer_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_equipment_manufacturer_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Type</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_type_status"
														   id="me_grounding_type_status_ok"
														   value="Analog"> <label class="custom-control-label"
																			  for="me_grounding_type_status_ok">Analog</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_type_status"
														   id="me_grounding_type_status_not_ok"
														   value="Digital"> <label class="custom-control-label"
																				  for="me_grounding_type_status_not_ok">Digital</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>
													Grounding Test and Position Lay-out</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_layout_position_status"
														   id="me_grounding_layout_position_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_grounding_layout_position_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_grounding_layout_position_status"
														   id="me_grounding_layout_position_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_grounding_layout_position_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">

											<div class="col-md-8">
												<div>Grounding Resistance ( < 1 Ohm )</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_measurement_grounding_resistance_status"
														   id="me_measurement_grounding_resistance_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="me_measurement_grounding_resistance_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="me_measurement_grounding_resistance_status"
														   id="me_measurement_grounding_resistance_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="me_measurement_grounding_resistance_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>


										<div class="form-group mt-4">
											<label for="notes">Notes</label>
											<textarea name="notes" id="notes"
													  class="form-control"
													  cols="30" rows="5"></textarea>
										</div>

										<button class="btn btn-primary">Save & Continue to Concrete Pouring</button>
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

@push('js')
	<script src="{{ base_url('/assets/js/hdynamic/hdynamic.js') }}"></script>
@endpush

