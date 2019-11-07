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
											PLN
										</a>
									</li>
								</ul>

							</div>
							<div class="card-body">
								<div class="">
									<div>
										{!! form_open() !!}

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>1.
														KWH Pole Position</b></div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_pole_posisition"
														   id="kwh_pole_posisition_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_pole_posisition_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_pole_posisition"
														   id="kwh_pole_posisition_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_pole_posisition_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<div>
													<b>KWH Pole Foundation</b></div>
											</div>

											<div class="col-md-8">
												<div>Depth</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_depth"
														   id="kwh_depth_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_depth_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_depth"
														   id="kwh_depth_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_depth_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Dimension</div>
											</div>

											<div class="col-md-4">

												<div class="form-group">
													<input type="text" name="kwh_dimension"
														   class="form-control" id="kwh_dimension">
												</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_dimension_status"
														   id="kwh_dimension_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_dimension_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_dimension_status"
														   id="kwh_dimension_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_dimension_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Concrete</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_concrete"
														   id="kwh_concrete_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_concrete_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_concrete"
														   id="kwh_concrete_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_concrete_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>3. KWH Pole Condition</b>
											</div>
											<div class="col-md-8">
												<div>Hot Dipped Galvanized</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_hot_dipped"
														   id="kwh_hot_dipped_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_hot_dipped_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_hot_dipped"
														   id="kwh_hot_dipped_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_hot_dipped_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Dimension</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_pole_condition_dimension"
														   id="kwh_pole_condition_dimension_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_pole_condition_dimension_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_pole_condition_dimension"
														   id="kwh_pole_condition_dimension_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_pole_condition_dimension_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Using pipe cup</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_using_pipe_cup"
														   id="kwh_using_pipe_cup_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_using_pipe_cup_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_using_pipe_cup"
														   id="kwh_using_pipe_cup_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_using_pipe_cup_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>4. KWH Panel</b>
											</div>
											<div class="col-md-8">
												<div>Approved Manufacture</div>
											</div>

											<div class="col-md-4">

												<div class="form-group">
													<input type="text" name="kwh_panel_approved_manufacturer"
														   class="form-control" id="kwh_panel_approved_manufacturer">
												</div>

											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Panel Box Dimension</div>
											</div>

											<div class="col-md-4">

												<div class="form-group">
													<input type="text" name="kwh_panel_box_dimension"
														   class="form-control" id="kwh_panel_box_dimension">
												</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_hot_dipped"
														   id="kwh_hot_dipped_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_hot_dipped_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_hot_dipped"
														   id="kwh_hot_dipped_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_hot_dipped_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Proper installed on pole</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_installed_on_pole"
														   id="proper_installed_on_pole_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="proper_installed_on_pole_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_installed_on_pole"
														   id="proper_installed_on_pole_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="proper_installed_on_pole_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Wiring Diagram</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="wiring_diagram"
														   id="wiring_diagram_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="wiring_diagram_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="wiring_diagram"
														   id="wiring_diagram_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="wiring_diagram_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Lock Operation/Key</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lock_operation_key"
														   id="lock_operation_key_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="lock_operation_key_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lock_operation_key"
														   id="lock_operation_key_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="lock_operation_key_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-12">
												<div><b>KWH Meter Condition</b></div>
											</div>

											<div class="col-md-8">
												<div>(Subject to PLN Supply)</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lock_operation_key"
														   id="lock_operation_key_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="lock_operation_key_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lock_operation_key"
														   id="lock_operation_key_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="lock_operation_key_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>(Subject to PLN Supply)</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="subject_to_pln_supply"
														   id="subject_to_pln_supply_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="subject_to_pln_supply_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="subject_to_pln_supply"
														   id="subject_to_pln_supply_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="subject_to_pln_supply_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													KWH Meter MCB Capacity……..A</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_meter_mcb"
														   id="kwh_meter_mcb_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_meter_mcb_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_meter_mcb"
														   id="kwh_meter_mcb_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_meter_mcb_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													MCB of OBL and Site Lamp</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="mcb_of_obl"
														   id="mcb_of_obl_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="mcb_of_obl_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="mcb_of_obl"
														   id="mcb_of_obl_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="mcb_of_obl_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Arrester of OBL</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arrester_obl"
														   id="arrester_obl_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="arrester_obl_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arrester_obl"
														   id="arrester_obl_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="arrester_obl_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Ground Connected to KWH Box</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ground_connected_kwh"
														   id="ground_connected_kwh_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ground_connected_kwh_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ground_connected_kwh"
														   id="ground_connected_kwh_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ground_connected_kwh_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													KWH Ground BC type …… mm2</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_ground_bc"
														   id="kwh_ground_bc_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_ground_bc_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_ground_bc"
														   id="kwh_ground_bc_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_ground_bc_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													KWH Ground Flexible Pipe</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_ground_flexible_pipe"
														   id="kwh_ground_flexible_pipe_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="kwh_ground_flexible_pipe_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="kwh_ground_flexible_pipe"
														   id="kwh_ground_flexible_pipe_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_ground_flexible_pipe_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Change Over Switch</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="change_over_switch"
														   id="change_over_switch_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="change_over_switch_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="change_over_switch"
														   id="change_over_switch_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="change_over_switch_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Receptacle</div>
											</div>

											<div class="col-md-4">

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="receptacle"
														   id="receptacle_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="receptacle_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="receptacle"
														   id="receptacle_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="receptacle_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>5. Cell</b>
											</div>
											<div class="col-md-8">
												<div>Manufacturer</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="cell_manufacturer"
														   class="form-control" id="cell_manufacturer">
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Current load capacity</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cell_current_load"
														   id="cell_current_load_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cell_current_load_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cell_current_load"
														   id="cell_current_load_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cell_current_load_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Proper Installation</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_installation"
														   id="proper_installation_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="proper_installation_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_installation"
														   id="proper_installation_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="proper_installation_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>6. Grounding Measurement Value</b>
											</div>
											<div class="col-md-8">
												<div>< 1 Ohm</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="1_ohm"
														   id="1_ohm_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="1_ohm_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="1_ohm"
														   id="1_ohm_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="1_ohm_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>7. Cable Power</b>
											</div>
											<div class="col-md-8">
												<div>NYFGBY / NYY 4 x 16 mm2</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="nyfgby"
														   id="nyfgby_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="nyfgby_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="nyfgby"
														   id="nyfgby_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="nyfgby_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>



										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Brand of cable:</div>
											</div>

											<div class="col-md-4">

												<div class="form-group">
													<input type="text" name="brand_of_cable"
														   class="form-control" id="brand_of_cable">
												</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="brand_of_cable_status"
														   id="brand_of_cable_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="brand_of_cable_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="brand_of_cable_status"
														   id="brand_of_cable_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="brand_of_cable_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Connected to COS</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="connected_to_cos"
														   id="connected_to_cos_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="connected_to_cos_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="connected_to_cos"
														   id="connected_to_cos_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="connected_to_cos_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Laid -……m underground (if any)</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="laid_underground"
														   id="laid_underground_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="laid_underground_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="laid_underground"
														   id="laid_underground_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="laid_underground_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>8. Bolts, Nuts and Clamp</b>
											</div>
											<div class="col-md-8">
												<div>Hot Dipped Galvanize</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="hot_dipped_galvanize"
														   id="hot_dipped_galvanize_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="hot_dipped_galvanize_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="hot_dipped_galvanize"
														   id="hot_dipped_galvanize_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="hot_dipped_galvanize_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Power cable protector on KWH pole</div>
											</div>

											<div class="col-md-4">

												<div class="form-group">
													<input type="text" name="power_cable_protector"
														   class="form-control" id="power_cable_protector">
												</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="power_cable_protector_status"
														   id="power_cable_protector_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="power_cable_protector_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="power_cable_protector_status"
														   id="power_cable_protector_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="power_cable_protector_status_not_ok">Not
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

