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
													<input type="text" name="kwh_dimension"
														   class="form-control" id="kwh_dimension">
													<div>mm2</div>
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
											<div class="col-md-12">
												<div><b>1. Cable</b></div>
											</div>
											<div class="col-md-8">
												OTC Cable Dia. …… mm2
											</div>

											<div class="col-md-4">
												<div class="form-group">
													<input type="text" name="kwh_dimension"
														   class="form-control" id="kwh_dimension">
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Smoke Detector
												</div>
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
										<div class="form-row my-4">
											<div class="col-md-8">
												<div>

													Heat Detector
												</div>
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
										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Cut & Fence Break (Greenfield only)
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>

													Grounding Loss
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Air Cond. Cage Break
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Arrester Failure
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Flood Sensor (Greenfield only)
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													DC Fan on
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Fuel Tank Empty
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													ATS / AMF failure
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													Air Cond Operational Control
												</div>
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
													<input type="text" name="kwh_dimension"
														   class="form-control" id="kwh_dimension">
													<div>mm2</div>
												</div>

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

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													16 Zones Input Assignment
												</div>
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

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Cable entrance hole on top of panel
												</div>
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

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Indicator Lamp
												</div>
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

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Wiring Diagram
												</div>
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

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Proper installed Alarm & Function Test
												</div>
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

										<div class="form-row my-4">

											<div class="col-md-8">
												<div>
													Equipped with DC Arrester
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>

													All alarm inputs cable terminated on DDF
												</div>
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

										<div class="form-row my-4">
											<div class="col-md-8">
												<div>
													DDF wiring diagram is available
												</div>
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

