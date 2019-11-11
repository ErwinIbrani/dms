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
											<div class="col-md-12">
												<div><b>1. Cable</b></div>
											</div>
											<div class="col-md-8">
												OTC Cable Dia. …… mm2
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="cable_otc"
														   class="form-control" id="cable_otc">
													<div>mm2</div>
												</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_otc_status"
														   id="cable_otc_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cable_otc_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_otc_status"
														   id="cable_otc_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cable_otc_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												NYA Dia. …………….. mm2 for Grounding
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="nya_dia_cable"
														   class="form-control" id="nya_dia_cable">
													<div>mm2</div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<div>
													<b>2. Function Test</b></div>
											</div>

											<div class="col-md-8">
												<div>Door Alarm</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="door_alarm"
														   id="door_alarm_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="door_alarm_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="door_alarm"
														   id="door_alarm_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="kwh_depth_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Smoke Detector
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="smoke_detector"
														   id="smoke_detector_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="smoke_detector_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="smoke_detector"
														   id="smoke_detector_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="smoke_detector_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>
										<div class="form-row my-4">
											<div class="col-md-8">
												<div>

													Heat Detector
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="heat_detector"
														   id="heat_detector_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="heat_detector_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="heat_detector"
														   id="heat_detector_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="heat_detector_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>
										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Cut & Fence Break (Greenfield only)
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cut_fence_break"
														   id="cut_fence_break_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cut_fence_break_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cut_fence_break"
														   id="cut_fence_break_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cut_fence_break_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>

													Grounding Loss
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="grounding_loss"
														   id="grounding_loss_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="grounding_loss_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="grounding_loss"
														   id="grounding_loss_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="grounding_loss_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Air Cond. Cage Break
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_cond_cage_break"
														   id="air_cond_cage_break_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_cond_cage_break_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_cond_cage_break"
														   id="air_cond_cage_break_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_cond_cage_break_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Arrester Failure
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arrester_failure"
														   id="arrester_failure_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="arrester_failure_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="arrester_failure"
														   id="arrester_failure_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="arrester_failure_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Flood Sensor (Greenfield only)
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="flood_sensor"
														   id="flood_sensor_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="flood_sensor_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="flood_sensor"
														   id="flood_sensor_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="flood_sensor_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													DC Fan on
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="dc_fan_on"
														   id="dc_fan_on_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="dc_fan_on_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="dc_fan_on"
														   id="dc_fan_on_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="dc_fan_on_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Fuel Tank Empty
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fuel_tank_empty"
														   id="fuel_tank_empty_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="fuel_tank_empty_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="fuel_tank_empty"
														   id="fuel_tank_empty_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="fuel_tank_empty_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													ATS / AMF failure
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ats_amf_failure"
														   id="ats_amf_failure_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ats_amf_failure_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ats_amf_failure"
														   id="ats_amf_failure_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ats_amf_failure_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Air Cond Operational Control
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_cond_operational_control"
														   id="air_cond_operational_control_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="air_cond_operational_control_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="air_cond_operational_control"
														   id="air_cond_operational_control_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="air_cond_operational_control_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-12">
												<div>
													Panel
												</div>
											</div>

											<div class="col-md-8">
												<div>
													Dimension …… x …… x …… mm
												</div>
											</div>

											<div class="col-md-4">

												<div class="form-group">
													<input type="text" name="panel_dimension"
														   class="form-control" id="panel_dimension">
													<div>mm2</div>
												</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="panel_dimension_status"
														   id="panel_dimension_status_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="panel_dimension_status_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="panel_dimension_status"
														   id="panel_dimension_status_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="panel_dimension_status_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													16 Zones Input Assignment
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="zones_input_assigment"
														   id="zones_input_assigment_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="zones_input_assigment_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="zones_input_assigment"
														   id="zones_input_assigment_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="zones_input_assigment_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Cable entrance hole on top of panel
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_entrance_hole"
														   id="cable_entrance_hole_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="cable_entrance_hole_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="cable_entrance_hole"
														   id="cable_entrance_hole_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="cable_entrance_hole_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Indicator Lamp
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="indicator_lamp"
														   id="indicator_lamp_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="indicator_lamp_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="indicator_lamp"
														   id="indicator_lamp_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="indicator_lamp_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Wiring Diagram
												</div>
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
												<div>
													Proper installed Alarm & Function Test
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_installed_alarm"
														   id="proper_installed_alarm_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="proper_installed_alarm_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="proper_installed_alarm"
														   id="proper_installed_alarm_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="proper_installed_alarm_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Equipped with DC Arrester
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="equipped_dc_arrester"
														   id="equipped_dc_arrester_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="equipped_dc_arrester_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="equipped_dc_arrester"
														   id="equipped_dc_arrester_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="equipped_dc_arrester_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>4. DDF</b>
											</div>
											<div class="col-md-8">
												<div>
													DDF is placed inside DDF Box
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ddf_placed_inside"
														   id="ddf_placed_inside_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ddf_placed_inside_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ddf_placed_inside"
														   id="ddf_placed_inside_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ddf_placed_inside_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>

													All alarm inputs cable terminated on DDF
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="all_alarm_inputs_cable"
														   id="all_alarm_inputs_cable_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="all_alarm_inputs_cable_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="all_alarm_inputs_cable"
														   id="all_alarm_inputs_cable_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="all_alarm_inputs_cable_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													DDF wiring diagram is available
												</div>
											</div>

											<div class="col-md-4">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ddf_wiring_diagram"
														   id="ddf_wiring_diagram_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="ddf_wiring_diagram_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="ddf_wiring_diagram"
														   id="ddf_wiring_diagram_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="ddf_wiring_diagram_not_ok">Not
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

