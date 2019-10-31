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
											Bars Reinforcement and Formwork
										</a>
									</li>
								</ul>

							</div>
							<div class="card-body">
								<div class="">
									<div>
										{!! form_open() !!}
										<div class="form-row">
											<div class="col-md-4">
												<div><b>1. Dewatering - do not add this as additional work</b></div>
												<span>Water has been controlled and/or removed during or after excavation, concrete works and curing period:</span>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="dewatering" id="dewatering_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="dewatering_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="dewatering" id="dewatering_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="dewatering_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<div><b>2. Lean Concrete</b></div>
											</div>
											<div class="col-md-4">
												<div>Sand layer is uniformly placed at …… mm thick (min 10 Cm) :</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="sand_layer" id="sand_layer_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="sand_layer_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="sand_layer" id="sand_layer_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="sand_layer_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Concrete  layer is uniformly placed at …… mm thick (min 5 Cm) :</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete" id="concrete_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="concrete_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete" id="concrete_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="concrete_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div><b>3. Steel Bar Manufacturer</b></div>
												<span>(Non KS steel bar must pass "Uji Tarik", per distributor) </span>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="steel_bar_manufacture" id="steel_bar_manufacture_ks"
														   value="ks"> <label class="custom-control-label"
																			   for="steel_bar_manufacture_ks">KS</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="steel_bar_manufacture" id="steel_bar_manufacture_cs"
														   value="cs"> <label class="custom-control-label"
																			  for="steel_bar_manufacture_cs">CS</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="steel_bar_manufacture" id="steel_bar_manufacture_no_ks"
														   value="non ks"> <label class="custom-control-label"
																			  for="steel_bar_manufacture_no_ks">Non-KS</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Bars Reinforced Condition</div>
												<span>(New and no visible stain in the Bars) </span>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_reinforced" id="bars_reinforced_acceptable"
														   value="acceptable"> <label class="custom-control-label"
																			  for="bars_reinforced_acceptable">Acceptable</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_reinforced" id="steel_bar_manufacture_rejected"
														   value="rejected"> <label class="custom-control-label"
																			  for="steel_bar_manufacture_rejected">Rejected</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12"><b>4. Formwork</b></div>
											<div class="col-md-4">
												<div>Level</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_level" id="bars_formwork_level_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_level_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_level" id="bars_formwork_level_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_level_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Shape</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_shape" id="bars_formwork_shape_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_shape_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_shape" id="bars_formwork_shape_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_shape_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Rigidity</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_rigidity" id="bars_formwork_rigidity_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_rigidity_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_rigidity" id="bars_formwork_rigidity_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_rigidity_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Formworks should be cleaned from all debris or other foreign matter :</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_foreign_matter" id="bars_formwork_foreign_matter_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_foreign_matter_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_foreign_matter" id="bars_formwork_foreign_matter_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_foreign_matter_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>No leakage on formworks to avoid losing water cement content :</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_water_cement" id="bars_formwork_water_cement_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_water_cement_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_water_cement" id="bars_formwork_water_cement_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_water_cement_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div><b>5. Concrete Decking </b></div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_decking" id="bars_formwork_concrete_decking_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_concrete_decking_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_decking" id="bars_formwork_concrete_decking_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_concrete_decking_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Thickness (5 Cm)</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_thickness" id="bars_formwork_concrete_thickness_acceptable"
														   value="acceptable"> <label class="custom-control-label"
																			   for="bars_formwork_concrete_thickness_acceptable">Acceptable</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_thickness" id="bars_formwork_concrete_thickness_rejected"
														   value="rejected"> <label class="custom-control-label"
																			  for="bars_formwork_concrete_thickness_rejected">Rejected</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Proper placed on PAD</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_placed_pad" id="bars_formwork_concrete_placed_pad_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_concrete_placed_pad_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_placed_pad" id="bars_formwork_concrete_placed_pad_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_concrete_placed_pad_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Proper placed on Tie Beam</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_placed_tie_beam" id="bars_formwork_concrete_placed_tie_beam_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_concrete_placed_tie_beam_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_placed_tie_beam" id="bars_formwork_concrete_placed_tie_beam_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_concrete_placed_tie_beam_not_ok">No</label>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Proper placed on Pedestal</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_placed_pedestal" id="bars_formwork_concrete_placed_pedestal_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="bars_formwork_concrete_placed_pedestal_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_formwork_concrete_placed_pedestal" id="bars_formwork_concrete_placed_pedestal_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="bars_formwork_concrete_placed_pedestal_not_ok">No</label>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-12">
												<div><b>Bar Reinforcement</b></div>
											</div>
											<div class="col-md-12 mt-3">
												<div><b>Foo Plate</b></div>
											</div>
											<div class="col-md-4">
												<div>Top Layer  (x & y direction) : </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="bars_formwork_concrete_top_layer">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="bars_formwork_concrete_top_layer"
															   class="form-control" id="bars_formwork_concrete_top_layer"
														placeholder=".... mm &mdash; .... mm">
													</div>
													<div class="pb-2"><small>format must be: .... mm &mdash; .... mm</small></div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_top_layer_check" id="bars_formwork_concrete_top_layer_check_deformed"
															   value="Deformed"> <label class="custom-control-label"
																				   for="bars_formwork_concrete_top_layer_check_deformed">Deformed</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_top_layer_check" id="bars_formwork_concrete_top_layer_check_ulir"
															   value="Ulir"> <label class="custom-control-label"
																				  for="bars_formwork_concrete_top_layer_check_ulir">Ulir</label>
													</div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Bottom Layer (x & y direction)  (x & y direction) : </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="bars_formwork_concrete_botom_layer">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="bars_formwork_concrete_botom_layer"
															   class="form-control" id="bars_formwork_concrete_botom_layer"
															   placeholder=".... mm &mdash; .... mm">
													</div>
													<div class="pb-2"><small>format must be: .... mm &mdash; .... mm</small></div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_botom_layer_check" id="bars_formwork_concrete_botom_layer_check_deformed"
															   value="Deformed"> <label class="custom-control-label"
																						for="bars_formwork_concrete_botom_layer_check_deformed">Deformed</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_botom_layer_check" id="bars_formwork_concrete_botom_layer_check_ulir"
															   value="Ulir"> <label class="custom-control-label"
																					for="bars_formwork_concrete_botom_layer_check_ulir">Ulir</label>
													</div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Spacers : </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="bars_formwork_concrete_spacers">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="bars_formwork_concrete_spacers"
															   class="form-control" id="bars_formwork_concrete_spacers"
															   placeholder=".... mm &mdash; .... pcs">
													</div>
													<div class="pb-2"><small>format must be: .... mm &mdash; .... pcs</small></div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_spacers_check" id="bars_formwork_concrete_spacers_check_deformed"
															   value="Deformed"> <label class="custom-control-label"
																						for="bars_formwork_concrete_spacers_check_deformed">Deformed</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_spacers_check" id="bars_formwork_concrete_spacers_check_ulir"
															   value="Ulir"> <label class="custom-control-label"
																					for="bars_formwork_concrete_spacers_check_ulir">Ulir</label>
													</div>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-12 mt-3">
												<div><b>Pedestal</b></div>
											</div>
											<div class="col-md-4">
												<div>Main : </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="bars_formwork_concrete_pedestal_main">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="bars_formwork_concrete_pedestal_main"
															   class="form-control" id="bars_formwork_concrete_pedestal_main"
															   placeholder=".... mm &mdash; .... pcs">
													</div>
													<div class="pb-2"><small>format must be: .... mm &mdash; .... pcs</small></div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_pedestal_main_check" id="bars_formwork_concrete_pedestal_main_check_deformed"
															   value="Deformed"> <label class="custom-control-label"
																						for="bars_formwork_concrete_pedestal_main_check_deformed">Deformed</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_pedestal_main_check" id="bars_formwork_concrete_pedestal_main_check_ulir"
															   value="Ulir"> <label class="custom-control-label"
																					for="bars_formwork_concrete_pedestal_main_check_ulir">Ulir</label>
													</div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Stirrups : </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="bars_formwork_concrete_pedestal_stirrups">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="bars_formwork_concrete_pedestal_stirrups"
															   class="form-control" id="bars_formwork_concrete_pedestal_stirrups"
															   placeholder=".... mm &mdash; .... mm">
													</div>
													<div class="pb-2"><small>format must be: .... mm &mdash; .... mm</small></div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_pedestal_stirrups_check" id="bars_formwork_concrete_pedestal_stirrups_check_deformed"
															   value="Deformed"> <label class="custom-control-label"
																						for="bars_formwork_concrete_pedestal_stirrups_check_deformed">Deformed</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="bars_formwork_concrete_pedestal_stirrups_check" id="bars_formwork_concrete_pedestal_stirrups_check_ulir"
															   value="Ulir"> <label class="custom-control-label"
																					for="bars_formwork_concrete_pedestal_stirrups_check_ulir">Ulir</label>
													</div>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-12 mt-3">
												<div><b>Tie Beam</b></div>
											</div>
											<div class="col-md-4">
												<div>Main : </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="bar_reinforc_tie_beam_main">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="bar_reinforc_tie_beam_main"
															   class="form-control" id="bar_reinforc_tie_beam_main"
															   placeholder=".... mm &mdash; .... pcs">
													</div>
													<div class="pb-2"><small>format must be: .... mm &mdash; .... pcs</small></div>
													<div class="custom-control custom-control-inline custom-checkbox">
														<input type="checkbox" name="bar_reinforc_tie_beam_main_check" class="custom-control-input" id="bar_reinforc_tie_beam_main_check" value="As per Design">
														<label class="custom-control-label" for="bar_reinforc_tie_beam_main_check">As per Design</label>
													</div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Stirrups : </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="bar_reinforc_tie_beam_stirrups">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="bar_reinforc_tie_beam_stirrups"
															   class="form-control" id="bar_reinforc_tie_beam_stirrups"
															   placeholder=".... mm &mdash; .... pcs">
													</div>
													<div class="pb-2"><small>format must be: .... mm &mdash; .... pcs</small></div>
													<div class="custom-control custom-control-inline custom-checkbox">
														<input type="checkbox" name="bar_reinforc_tie_beam_stirrups_check" class="custom-control-input" id="bar_reinforc_tie_beam_stirrups_check" value="As per Design">
														<label class="custom-control-label" for="bar_reinforc_tie_beam_stirrups_check">As per Design</label>
													</div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Bars reinforced should be free from pitting, mud, oil, paint and rust free:</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_reinforced" id="bars_reinforced_ok"
														   value="Ok"> <label class="custom-control-label"
																			   for="bars_reinforced_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_reinforced" id="bars_reinforced_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																			  for="bars_reinforced_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Bars reinforced should be fixed rigidly :</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_reinforced_rigidly" id="bars_reinforced_rigidly_ok"
														   value="Ok"> <label class="custom-control-label"
																			  for="bars_reinforced_rigidly_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="bars_reinforced_rigidly" id="bars_reinforced_rigidly_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="bars_reinforced_rigidly_not_ok">Not OK</label>
												</div>
											</div>
										</div>


										<div class="form-row my-4">
											<div class="col-md-12">
												<div><b>7. Anchor Bolt Setting</b> </div>
											</div><div class="col-md-4">
												<div>Anchor Bolt Diameter </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="anchor_bolt_diameter">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="anchor_bolt_diameter"
															   class="form-control" id="anchor_bolt_diameter"
															   placeholder=".... mm">
													</div>
													<div class="pb-2"><small>format must be: .... mm</small></div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Anchor Bolt Length </div>
											</div>
											<div class="col-md-8">

												<div calss="form-group">
													<div class="input-group">
														<label class="input-group-prepend" for="anchor_bolt_length">
															<span class="input-group-text"><span>Dia.</span></span>
														</label>
														<input type="text" name="anchor_bolt_length"
															   class="form-control" id="anchor_bolt_length"
															   placeholder=".... mm">
													</div>
													<div class="pb-2"><small>format must be: .... mm</small></div>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Anchor Bolt Alignment</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_bolt_alignment" id="anchor_bolt_alignment_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="anchor_bolt_alignment_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_bolt_alignment" id="anchor_bolt_alignment_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="anchor_bolt_alignment_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Correct Template</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_correct_template" id="anchor_correct_template_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="anchor_correct_template_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_correct_template" id="anchor_correct_template_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="anchor_correct_template_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Steel Angle Bracing</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_angle_bracing" id="anchor_angle_bracing_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="anchor_angle_bracing_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_angle_bracing" id="anchor_angle_bracing_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="anchor_angle_bracing_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Horizontal Leveling</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_horizontal_leveling" id="anchor_horizontal_leveling_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="anchor_horizontal_leveling_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_horizontal_leveling" id="anchor_horizontal_leveling_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="anchor_horizontal_leveling_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div>Anchor Bolt Protector</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_protector" id="anchor_protector_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="anchor_protector_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_protector" id="anchor_protector_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="anchor_protector_not_ok">No</label>
												</div>
											</div>
										</div>
										

										<div class="form-group">
											<label for="rebar_note">8. Notes</label>
											<textarea name="rebar_note" id="rebar_note" class="form-control" cols="30" rows="5"></textarea>
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
