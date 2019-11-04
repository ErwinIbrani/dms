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
											Pouring Prepation
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
												<div><b>1. Concrete Volume :</b></div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="number" name="pouring_prep_concrete_volume"
														   class="form-control" id="pouring_prep_concrete_volume">

												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>2. For Site Mix only (referred to Mix Design):</b></div>
											</div>
											<div class="col-md-12 mt-3">
												<div>Final Proportion :</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>PC type I </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_final_pc_type"
																   class="form-control" id="pouring_prep_final_pc_type">
															<span><small>bags @ 50kg</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Fine Aggregate </div>
													</div>
													<div class="col-md-4 text-right">
														<div class="form-group">
															<input type="text" name="pouring_prep_final_fine_aggregate"
																   class="form-control" id="pouring_prep_final_fine_aggregate">
															<span><small>m3</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Coarse Aggregate </div>
													</div>
													<div class="col-md-4 text-right">
														<div class="form-group">
															<input type="text" name="pouring_prep_final_coarse_aggregate"
																   class="form-control" id="pouring_prep_final_coarse_aggregate">
															<span><small>m3</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Proper water </div>
													</div>
													<div class="col-md-4 text-right">
														<div class="form-group">
															<input type="text" name="pouring_prep_final_proper"
																   class="form-control" id="pouring_prep_final_proper">
															<span><small>Liter</small></span>
														</div>
													</div>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-12 mt-3">
												<div>Material Prepared :</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>PC type I </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_material_pc_type"
																   class="form-control" id="pouring_prep_material_pc_type">
															<span><small>bags @ 50kg</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Fine Aggregate </div>
													</div>
													<div class="col-md-4 text-right">
														<div class="form-group">
															<input type="text" name="pouring_prep_material_fine_aggregate"
																   class="form-control" id="pouring_prep_material_fine_aggregate">
															<span><small>m3</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Coarse Aggregate </div>
													</div>
													<div class="col-md-4 text-right">
														<div class="form-group">
															<input type="text" name="pouring_prep_material_coarse_aggregate"
																   class="form-control" id="pouring_prep_material_coarse_aggregate">
															<span><small>m3</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Proper water </div>
													</div>
													<div class="col-md-4 text-right">
														<div class="form-group">
															<input type="text" name="pouring_prep_material_proper_water"
																   class="form-control" id="pouring_prep_material_proper_water">
															<span><small>Liter</small></span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Source of water </div>
													</div>
													<div class="col-md-4 text-right">
														<div class="form-group">
															<input type="text" name="pouring_prep_material_source_water"
																   class="form-control" id="pouring_prep_material_source_water">
															<span><small>Liter</small></span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>3. Equipment</b></div>
											</div>
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Concrete Pump </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_equipment_concrete_pump"
																   class="form-control" id="pouring_prep_equipment_concrete_pump">
															<span><small>Unit</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Concrete Gutter </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_equipment_concrete_gutter"
																   class="form-control" id="pouring_prep_equipment_concrete_gutter">
															<span><small>Unit</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Concrete Mixer </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_equipment_concrete_mixer"
																   class="form-control" id="pouring_prep_equipment_concrete_mixer">
															<span><small>Unit</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Vibrator </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_equipment_vibrator"
																   class="form-control" id="pouring_prep_equipment_vibrator">
															<span><small>Unit</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Water Pump </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_equipment_water_pump"
																   class="form-control" id="pouring_prep_equipment_water_pump">
															<span><small>Unit</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Concrete Mould </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_equipment_concrete_mould"
																   class="form-control" id="pouring_prep_equipment_concrete_mould">
															<span><small>Unit</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div> proper molding : </div>
													</div>
													<div class="col-md-4 ">
														<div class="custom-control custom-control-inline custom-radio">
															<input type="radio" class="custom-control-input"
																   name="pouring_prep_equipment_proper_molding" id="pouring_prep_equipment_proper_molding_ok"
																   value="Accepted"> <label class="custom-control-label"
																							   for="pouring_prep_equipment_proper_molding_ok">Accepted</label>
														</div>
														<div class="custom-control custom-control-inline custom-radio">
															<input type="radio" class="custom-control-input"
																   name="pouring_prep_equipment_proper_molding" id="pouring_prep_equipment_proper_molding_not_ok"
																   value="Rejected"> <label class="custom-control-label"
																							  for="pouring_prep_equipment_proper_molding_not_ok">Rejected</label>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Slump cone </div>
													</div>
													<div class="col-md-4 ">
														<div class="form-group text-right">
															<input type="text" name="pouring_prep_equipment_slump_cone"
																   class="form-control" id="pouring_prep_equipment_slump_cone">
															<span><small>pcs</small></span>
														</div>
													</div>
												</div>
											</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div>Tarpaulin (Kain Terpal) preparation : : </div>
													</div>
													<div class="col-md-4 ">
														<div class="custom-control custom-control-inline custom-radio">
															<input type="radio" class="custom-control-input"
																   name="pouring_prep_equipment_tarpaulin" id="pouring_prep_equipment_tarpaulin_ok"
																   value="Available"> <label class="custom-control-label"
																							for="pouring_prep_equipment_tarpaulin_ok">Available</label>
														</div>
														<div class="custom-control custom-control-inline custom-radio">
															<input type="radio" class="custom-control-input"
																   name="pouring_prep_equipment_tarpaulin" id="pouring_prep_equipment_tarpaulin_not_ok"
																   value="Not Available"> <label class="custom-control-label"
																							for="pouring_prep_equipment_tarpaulin_not_ok">Not Available</label>
														</div>
													</div>
												</div>
											</div>
										</div>



										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>4. Number of Manpower</b> </div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group text-right">
													<input type="text" name="pouring_prep_number_manpower"
														   class="form-control" id="pouring_prep_number_manpower">
													<span><small>people</small></span>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-8">
														<div><b>5. Conclustion to Proceed to Pouring Activity :</b> </div>
													</div>
													<div class="col-md-4 ">
														<div class="custom-control custom-control-inline custom-radio">
															<input type="radio" class="custom-control-input"
																   name="pouring_prep_conclustion" id="pouring_prep_conclustion_ok"
																   value="Accepted"> <label class="custom-control-label"
																							 for="pouring_prep_conclustion_ok">Accepted</label>
														</div>
														<div class="custom-control custom-control-inline custom-radio">
															<input type="radio" class="custom-control-input"
																   name="pouring_prep_conclustion" id="pouring_prep_conclustion_not_ok"
																   value="Rejected"> <label class="custom-control-label"
																								 for="pouring_prep_conclustion_not_ok">Rejected</label>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="form-group mt-4">
											<label for="pouring_prep_note">Notes</label>
											<textarea name="pouring_prep_note" id="pouring_prep_note"
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
