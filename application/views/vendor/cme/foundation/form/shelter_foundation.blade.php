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
											Shelter Foundation
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
												<div><b>1. Shelter Foundation</b></div>
												<div>Excavation:</div>
											</div>

											<div class="col-md-8">
												Width
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_excavation_width"
													   class="form-control" id="shelter_foundation_excavation_width">
												<div class="text-right">mm</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												Depth
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_excavation_depth"
													   class="form-control" id="shelter_foundation_excavation_depth">
												<div class="text-right">mm</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												Total Length
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_excavation_total_length"
													   class="form-control" id="shelter_foundation_excavation_total_length">
												<div class="text-right">mm</div>
											</div>
										</div>

										<div class="form-row">
											<div class="Stone Masonry"></div>
											<div class="col-md-8">
												Sand fill ... mm thick (min 100 mm)
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_stone_sand_fill"
													   class="form-control" id="shelter_foundation_stone_sand_fill">
												<div class="text-right">mm</div>

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

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>Quality of stone userd (River stones)
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_stone_quality"
														   id="shelter_foundation_stone_quality_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="shelter_foundation_stone_quality_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_stone_quality"
														   id="shelter_foundation_stone_quality_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="shelter_foundation_stone_quality_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>Mortar grade (1 PC : 4 Sand)
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_stone_mortar_grade"
														   id="shelter_foundation_stone_mortar_grade_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="shelter_foundation_stone_mortar_grade_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_stone_mortar_grade"
														   id="shelter_foundation_stone_mortar_grade_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="shelter_foundation_stone_mortar_grade_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												Top Width
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_stone_top_width"
													   class="form-control" id="shelter_foundation_stone_top_width">
												<div class="text-right">mm</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												Total Height
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_stone_total_height"
													   class="form-control" id="shelter_foundation_stone_total_height">
												<div class="text-right">mm</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												Bottom Width
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_stone_bottom_width"
													   class="form-control" id="shelter_foundation_stone_bottom_width">
												<div class="text-right">mm</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>Sloof K-175 (Dimension 15/20cm)
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_sloff_k_175"
														   id="shelter_foundation_sloff_k_175_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="shelter_foundation_sloff_k_175_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_sloff_k_175"
														   id="shelter_foundation_sloff_k_175_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="shelter_foundation_sloff_k_175_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Sloof Reinforcement ( 4 Ø 12)
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_sloof_reinforcement"
														   id="shelter_foundation_sloof_reinforcement_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="shelter_foundation_sloof_reinforcement_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_sloof_reinforcement"
														   id="shelter_foundation_sloof_reinforcement_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="shelter_foundation_sloof_reinforcement_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Sloof Stirrups ( Ø 8 - 150 )
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_sloof_stirrups"
														   id="shelter_foundation_sloof_stirrups_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="shelter_foundation_sloof_stirrups_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_sloof_stirrups"
														   id="shelter_foundation_sloof_stirrups_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="shelter_foundation_sloof_stirrups_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Soil backfill compacted result
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_soil_backfill"
														   id="shelter_foundation_soil_backfill_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="shelter_foundation_soil_backfill_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_soil_backfill"
														   id="shelter_foundation_soil_backfill_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="shelter_foundation_soil_backfill_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Light Concrete   K-175 with t = 10 cm
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_light_concrete"
														   id="shelter_foundation_light_concrete_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="shelter_foundation_light_concrete_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_light_concrete"
														   id="shelter_foundation_light_concrete_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="shelter_foundation_light_concrete_not_ok">No</label>
												</div>
											</div>
										</div>


										<div class="form-row">
											<div class="col-md-12">
												<div>Concrete Plate (for flooded area)Total Height</div>
												<div>Bar Reinforced</div>
											</div>
											<div class="col-md-8">
												x - direction
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_bar_x_direction"
													   class="form-control" id="shelter_foundation_bar_x_direction">
												<div class="text-right">format: ... mm - ... mm</div>
											</div>
										</div>
										<div class="form-row">
											<div class="col-md-8">
												y - direction
											</div>

											<div class="col-md-4">
												<input type="text" name="shelter_foundation_bar_y_direction"
													   class="form-control" id="shelter_foundation_bar_y_direction">
												<div class="text-right">format: ... mm - ... mm</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>
													Concrete Characteristic K-225
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_concrete_characteristic"
														   id="shelter_foundation_concrete_characteristic_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="shelter_foundation_concrete_characteristic_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_concrete_characteristic"
														   id="shelter_foundation_concrete_characteristic_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="shelter_foundation_concrete_characteristic_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-12">
												Finishing
											</div>
											<div class="col-md-8">
												<div>
													Plastering quality
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_plastering_quality"
														   id="shelter_foundation_plastering_quality_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="shelter_foundation_plastering_quality_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_plastering_quality"
														   id="shelter_foundation_plastering_quality_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="shelter_foundation_plastering_quality_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-12">
												Paint used should be for outdoor
											</div>
											<div class="col-md-8">
												<div>
													(Dark Colour paint)
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_dark_color_paint"
														   id="shelter_foundation_dark_color_paint_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="shelter_foundation_dark_color_paint_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="shelter_foundation_dark_color_paint"
														   id="shelter_foundation_dark_color_paint_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="shelter_foundation_dark_color_paint_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-group mt-4">
											<label for="concrete_pouring_note">Notes</label>
											<textarea name="concrete_pouring_note" id="concrete_pouring_note"
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

