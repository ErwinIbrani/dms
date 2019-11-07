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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>1. Power Distribution Box (ACPDB)</b></div>
												<div>Approved Manufacture
													(based on DSS approved vendors)
												</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="approved_manufacture"
													   class="form-control" id="approved_manufacture">
												<div class="text-right">mm</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Panel Box Dimension</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="panel_box_dimension"
													   class="form-control" id="panel_box_dimension">
												<div class="text-right">format: ... x ... X ...</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Bolt on Ground Connector</div>
												<div>Inside Box</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_stone_sand_fill_status"
														   id="shelter_foundation_stone_sand_fill_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="shelter_foundation_stone_sand_fill_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_stone_sand_fill_status"
														   id="shelter_foundation_stone_sand_fill_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="shelter_foundation_stone_sand_fill_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Bolt on Ground Connector</div>
												<div>Inside Box</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bolt_inside_box_status"
														   id="bolt_inside_box_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="bolt_inside_box_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bolt_inside_box_status"
														   id="bolt_inside_box_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="bolt_inside_box_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Acrylic for Inside Cover</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arcylic_for_inside_cover_status"
														   id="arcylic_for_inside_cover_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="arcylic_for_inside_cover_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arcylic_for_inside_cover_status"
														   id="arcylic_for_inside_cover_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="arcylic_for_inside_cover_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Arrange Busbar in Distributed Phase (R, S, T, N & G)</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arrange_busbar_status"
														   id="arrange_busbar_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="arrange_busbar_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arrange_busbar_status"
														   id="arrange_busbar_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="arrange_busbar_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Branch Circuit Wires Are Arranged in Each Duct Cable/Gutter</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="branch_circuit_status"
														   id="branch_circuit_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="branch_circuit_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="branch_circuit_status"
														   id="branch_circuit_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="branch_circuit_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Branch Circuit Wires Are Arranged with Tie Wrap</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="branch_circuit_tie_wrap_status"
														   id="branch_circuit_tie_wrap_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="branch_circuit_tie_wrap_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="branch_circuit_tie_wrap_status"
														   id="branch_circuit_tie_wrap_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="branch_circuit_tie_wrap_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-3">
											<div class="col-md-8">
												<div>Wiring Diagram</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="wiring_diagram_status"
														   id="wiring_diagram_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="wiring_diagram_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="wiring_diagram_status"
														   id="wiring_diagram_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="wiring_diagram_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>2.Component are installed and working properly</b></div>
												<div>Circuit Breaker</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="circuit_breaker_status"
														   id="circuit_breaker_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="circuit_breaker_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="circuit_breaker_status"
														   id="circuit_breaker_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="circuit_breaker_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Terminal Block</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="terminal_block_status"
														   id="terminal_block_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="terminal_block_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="terminal_block_status"
														   id="terminal_block_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="terminal_block_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Indicator Lamp (R, S, T phase)</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="indicator_lamp_status"
														   id="indicator_lamp_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="indicator_lamp_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="indicator_lamp_status"
														   id="indicator_lamp_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="indicator_lamp_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Cable (big 4 manufacturer)</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_big_status"
														   id="cable_big_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cable_big_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_big_status"
														   id="cable_big_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cable_big_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Relay</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="relay_status"
														   id="relay_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="relay_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="relay_status"
														   id="relay_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="relay_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Timer</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="timer_status"
														   id="timer_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="timer_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="timer_status"
														   id="timer_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="timer_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Magnetic Contactor
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="magnetic_contactor_status"
														   id="magnetic_contactor_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="magnetic_contactor_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="magnetic_contactor_status"
														   id="magnetic_contactor_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="magnetic_contactor_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Fuses
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fuses_status"
														   id="fuses_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="fuses_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fuses_status"
														   id="fuses_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="fuses_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													ELCB
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="elcb_status"
														   id="elcb_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="elcb_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="elcb_status"
														   id="elcb_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="elcb_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Arrester
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arrester_status"
														   id="arrester_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="arrester_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arrester_status"
														   id="arrester_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="arrester_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Cable Gland
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_gland_status"
														   id="cable_gland_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cable_gland_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_gland_status"
														   id="cable_gland_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cable_gland_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>
										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Cable Duct
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_duct_status"
														   id="cable_duct_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cable_duct_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_duct_status"
														   id="cable_duct_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cable_duct_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Thermostat
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="thermostat_status"
														   id="thermostat_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="thermostat_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="thermostat_status"
														   id="thermostat_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="thermostat_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													DC Fan
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="dc_fan_status"
														   id="dc_fan_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="dc_fan_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="dc_fan_status"
														   id="dc_fan_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="dc_fan_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Lighting Switch
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_switch_status"
														   id="lighting_switch_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="lighting_switch_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_switch_status"
														   id="lighting_switch_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="lighting_switch_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													AC Outlet
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_outlet_status"
														   id="ac_outlet_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ac_outlet_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_outlet_status"
														   id="ac_outlet_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ac_outlet_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Indoor Lighting
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="indoor_lighting_status"
														   id="indoor_lighting_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="indoor_lighting_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="indoor_lighting_status"
														   id="indoor_lighting_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="indoor_lighting_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Junction Box
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="juction_box_status"
														   id="juction_box_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="juction_box_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="juction_box_status"
														   id="juction_box_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="juction_box_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-12">
												<b>3. Circuit Brakers</b>
											</div>
											<div class="col-md-8">
												<div>
													Circuit Breakers …… A
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="circuit_brakers_1"
														   class="form-control" id="circuit_brakers_1">
													<div class="text-right">... A</div>
												</div>

												<div class="form-group">
													<input type="text" name="circuit_brakers_1_pcs"
														   class="form-control" id="circuit_brakers_1_pcs">
													<div class="text-right">... pcs</div>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Circuit Breakers …… A
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="circuit_brakers_2"
														   class="form-control" id="circuit_brakers_2">
													<div class="text-right">... A</div>
												</div>

												<div class="form-group">
													<input type="text" name="circuit_brakers_2_pcs"
														   class="form-control" id="circuit_brakers_2_pcs">
													<div class="text-right">... pcs</div>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Circuit Breakers …… A
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="circuit_brakers_3"
														   class="form-control" id="circuit_brakers_3">
													<div class="text-right">... A</div>
												</div>

												<div class="form-group">
													<input type="text" name="circuit_brakers_3_pcs"
														   class="form-control" id="circuit_brakers_3_pcs">
													<div class="text-right">... pcs</div>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Circuit Breakers …… A
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="circuit_brakers_4"
														   class="form-control" id="circuit_brakers_4">
													<div class="text-right">... A</div>
												</div>

												<div class="form-group">
													<input type="text" name="circuit_brakers_4_pcs"
														   class="form-control" id="circuit_brakers_4_pcs">
													<div class="text-right">... pcs</div>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-12">
												<b>4.Power Cable (For AC Power)</b>
											</div>
											<div class="col-md-8">
												<div>Red Color For R Phase</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_red_color_status"
														   id="ac_power_red_color_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ac_power_red_color_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_red_color_status"
														   id="ac_power_red_color_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ac_power_red_color_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Yellow Color For S Phase</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_yellow_color_status"
														   id="ac_power_yellow_color_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ac_power_yellow_color_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_yellow_color_status"
														   id="ac_power_yellow_color_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ac_power_yellow_color_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Black Color For T Phase</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_black_color_status"
														   id="ac_power_black_color_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ac_power_black_color_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_black_color_status"
														   id="ac_power_black_color_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ac_power_black_color_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Blue Color For Neutral</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_blue_color_status"
														   id="ac_power_blue_color_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ac_power_blue_color_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_blue_color_status"
														   id="ac_power_blue_color_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ac_power_blue_color_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Green Yellow Color For Ground</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_green_color_status"
														   id="ac_power_green_color_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ac_power_green_color_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ac_power_green_color_status"
														   id="ac_power_green_color_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ac_power_green_color_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>5. Power Cable (For DC Power)</b>
											</div>
											<div class="col-md-8">
												<div>
													Red Color For Positive
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="power_cable_red_color_status"
														   id="power_cable_red_color_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="power_cable_red_color_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="power_cable_red_color_status"
														   id="power_cable_red_color_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="power_cable_red_color_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Blue Color For Negative
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="power_cable_blue_color_status"
														   id="power_cable_blue_color_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="power_cable_blue_color_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="power_cable_blue_color_status"
														   id="power_cable_blue_color_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="power_cable_blue_color_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>6. Cable Installation</b>
											</div>
											<div class="col-md-8">
												<div>Cable Conduit</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_conduit_status"
														   id="cable_conduit_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cable_conduit_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_conduit_status"
														   id="cable_conduit_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cable_conduit_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Cable Duct</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_duct_status"
														   id="cable_duct_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cable_duct_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_duct_status"
														   id="cable_duct_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cable_duct_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>7. Smoke Detector</b>
											</div>
											<div class="col-md-8">
												<div>Manufacturer</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="smoke_detector_manufacturer"
													   class="form-control" id="smoke_detector_manufacturer">
												<div class="text-right">... pcs</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Properly Working</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="smoke_detector_manufacturer_status"
														   id="smoke_detector_manufacturer_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="smoke_detector_manufacturer_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="smoke_detector_manufacturer_status"
														   id="smoke_detector_manufacturer_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="smoke_detector_manufacturer_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>8. Heat Detector</b>
											</div>
											<div class="col-md-8">
												<div>Manufacturer</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="heat_detector_manufacturer"
													   class="form-control" id="heat_detector_manufacturer">
												<div class="text-right">... pcs</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Properly Working</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="heat_detector_manufacturer_status"
														   id="heat_detector_manufacturer_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="heat_detector_manufacturer_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="heat_detector_manufacturer_status"
														   id="heat_detector_manufacturer_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="heat_detector_manufacturer_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>9. Fire Extinguisher</b>
											</div>
											<div class="col-md-8">
												<div>Manufacturer</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="fire_extinguisher_manufacturer"
													   class="form-control" id="fire_extinguisher_manufacturer">
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Media/Gas Content</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="fire_extinguisher_content"
													   class="form-control" id="fire_extinguisher_content">
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Fire Extinguisher - Portable</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fire_extinguisher_portable_status"
														   id="fire_extinguisher_portable_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="fire_extinguisher_portable_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fire_extinguisher_portable_status"
														   id="fire_extinguisher_portable_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="fire_extinguisher_portable_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Type</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="fire_extinguisher_portable_type"
													   class="form-control" id="fire_extinguisher_portable_type">
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Fire Extinguisher - Thermatic</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fire_extinguisher_thermatic_status"
														   id="fire_extinguisher_thermatic_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="fire_extinguisher_thermatic_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fire_extinguisher_thermatic_status"
														   id="fire_extinguisher_thermatic_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="fire_extinguisher_thermatic_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Type</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="fire_extinguisher_thermatic_type"
													   class="form-control" id="fire_extinguisher_thermatic_type">
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Indicator Validity (green area)</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="heat_detector_manufacturer_status"
														   id="heat_detector_manufacturer_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="heat_detector_manufacturer_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="heat_detector_manufacturer_status"
														   id="heat_detector_manufacturer_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="heat_detector_manufacturer_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-12">
												<b>10. Air Conditioning</b>
											</div>
											<div class="col-md-8">
												<div>Manufacturer</div>
											</div>

											<div class="col-md-4">
												<input type="text" name="air_conditioning_manufacturer"
													   class="form-control" id="air_conditioning_manufacturer">
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Inverter type</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_inverter_status"
														   id="air_conditioning_inverter_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_inverter_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_inverter_status"
														   id="air_conditioning_inverter_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_inverter_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Model</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="air_conditioning_indoor"
														   class="form-control" id="air_conditioning_indoor">
													<div class="text-right">Indoor</div>
												</div>
												<div class="form-group">
													<input type="text" name="air_conditioning_outdoor"
														   class="form-control" id="air_conditioning_outdoor">
													<div class="text-right">Outdoor</div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Serial Number Indoor Unit 1</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="air_conditioning_sn_indoor1"
														   class="form-control" id="air_conditioning_sn_indoor1">
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Serial Number Indoor Unit 2</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="air_conditioning_sn_indoor2"
														   class="form-control" id="air_conditioning_sn_indoor2">
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Serial Number Outdoor Unit 1</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="air_conditioning_sn_outdoor1"
														   class="form-control" id="air_conditioning_sn_outdoor1">
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Serial Number Outdoor Unit 2</div>
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="air_conditioning_sn_outdoor2"
														   class="form-control" id="air_conditioning_sn_outdoor2">
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Manual operation book</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_manual_operation_book"
														   id="air_conditioning_manual_operation_book_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_manual_operation_book_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_manual_operation_book"
														   id="air_conditioning_manual_operation_book_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_manual_operation_book_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Remote Control</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_remote_control"
														   id="air_conditioning_remote_control_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_remote_control_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_remote_control"
														   id="air_conditioning_remote_control_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_remote_control_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Galvanized Steel Cage/Bracket For Outdoor Unit</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_galvanized"
														   id="air_conditioning_galvanized_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_galvanized_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_galvanized"
														   id="air_conditioning_galvanized_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_galvanized_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Piping Are Covered With Isolation Tape
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_piping"
														   id="air_conditioning_piping_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_piping_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_piping"
														   id="air_conditioning_piping_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_piping_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Drain Water using PVC Pipe
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_drain_water"
														   id="air_conditioning_drain_water_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_drain_water_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_drain_water"
														   id="air_conditioning_drain_water_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_drain_water_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Freon Pressure</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_freon_pressure"
														   id="air_conditioning_freon_pressure_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_freon_pressure_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_freon_pressure"
														   id="air_conditioning_freon_pressure_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_freon_pressure_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Current level</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_current_level"
														   id="air_conditioning_current_level_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_current_level_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_current_level"
														   id="air_conditioning_current_level_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_current_level_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Installation</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_installation"
														   id="air_conditioning_installation_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_conditioning_installation_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_conditioning_installation"
														   id="air_conditioning_installation_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_conditioning_installation_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>11. Lighting, 4 Pcs x 18 Watt</b></div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_18_watt"
														   id="lighting_18_watt_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="lighting_18_watt_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_18_watt"
														   id="lighting_18_watt_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="lighting_18_watt_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Lighting, 2 Pcs x 10 Watt
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_10_watt"
														   id="lighting_10_watt_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="lighting_10_watt_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_10_watt"
														   id="lighting_10_watt_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="lighting_10_watt_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Emergency Lamp
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_emergency"
														   id="lighting_emergency_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="lighting_emergency_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_emergency"
														   id="lighting_emergency_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="lighting_emergency_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>Over Head/Bulk Lamp</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_over_head"
														   id="lighting_over_head_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="lighting_over_head_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_over_head"
														   id="lighting_over_head_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="lighting_over_head_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Switch
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_switch"
														   id="lighting_switch_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="lighting_switch_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="lighting_switch"
														   id="lighting_switch_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="lighting_switch_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>12. Power Outlet Socket</b></div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="power_outlet_socket"
														   id="power_outlet_socket_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="power_outlet_socket_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="power_outlet_socket"
														   id="power_outlet_socket_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="power_outlet_socket_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>



										<div class="form-row my-4">
											<div class="col-md-12">
												<div><b>13. DC Fan</b></div>
											</div>

											<div class="col-md-8">
												<div>
													Power ……x……… VDC</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="dc_fan_power"
														   id="dc_fan_power_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="dc_fan_power_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="dc_fan_power"
														   id="dc_fan_power_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="dc_fan_power_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Relay Control</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="relay_control"
														   id="relay_control_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="relay_control_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="relay_control"
														   id="relay_control_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="relay_control_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>14. Air Intake (inlet)</b></div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_intake_inlet"
														   id="air_intake_inlet_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_intake_inlet_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_intake_inlet"
														   id="air_intake_inlet_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_intake_inlet_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>
										<div class="form-row my-4">
											<div class="col-md-8">
												<div> Air Intake (inlet) Cage</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_intake_cage"
														   id="air_intake_cage_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_intake_cage_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_intake_cage"
														   id="air_intake_cage_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_intake_cage_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>15. Feeder Inlet - FEP</b></div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="feeder_inlet"
														   id="feeder_inlet_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="feeder_inlet_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="feeder_inlet"
														   id="feeder_inlet_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="feeder_inlet_not_ok">Not
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

