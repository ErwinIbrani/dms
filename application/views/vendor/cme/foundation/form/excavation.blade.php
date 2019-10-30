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
											Excavation
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
												<div><b>1. Foundation Type</b></div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="foundation_type" id="foot_plate_foundation"
														   value="foot plate foundation"> <label class="custom-control-label"
																					 for="foot_plate_foundation">Foot Plate Foundation</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="foundation_type" id="raft_foundation"
														   value="raft foundation"> <label class="custom-control-label"
																					   for="raft_foundation">Raft Foundation</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="foundation_type" id="bored"
														   value="bored"> <label class="custom-control-label"
																						   for="bored">Raft Bored</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="foundation_type" id="driven"
														   value="driven"> <label class="custom-control-label"
																				 for="driven">Driven</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div><b>2. Foot Plate excavation</b></div>
												<span>(Pile Cap)</span>
											</div>
											<div class="col-md-8 ">
												<div class="form-group">
													<label for="foot_plate_excavation_width_1"><b>1. Width</b></label>
													<input type="text" name="foot_plate_excavation_width_1" class="form-control" id="foot_plate_excavation_width_1">
													<span><small>format must be: .... mm x .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="foot_plate_excavation_depth_1"><b>Depth</b></label>
													<input type="text" name="foot_plate_excavation_depth_1" class="form-control" id="foot_plate_excavation_depth_1">
													<span><small>format must be: .... mm</small></span>
												</div>

												<div class="form-group">
													<label for="foot_plate_excavation_width_2"><b>2. Width</b></label>
													<input type="text" name="foot_plate_excavation_width_2" class="form-control" id="foot_plate_excavation_width_2">
													<span><small>format must be: .... mm x .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="foot_plate_excavation_depth_2"><b>Depth</b></label>
													<input type="text" name="foot_plate_excavation_depth_2" class="form-control" id="foot_plate_excavation_depth_2">
													<span><small>format must be: .... mm</small></span>
												</div>

												<div class="form-group">
													<label for="foot_plate_excavation_width_3"><b>3. Width</b></label>
													<input type="text" name="foot_plate_excavation_width_3" class="form-control" id="foot_plate_excavation_width_3">
													<span><small>format must be: .... mm x .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="foot_plate_excavation_depth_3"><b>Depth</b></label>
													<input type="text" name="foot_plate_excavation_depth_3" class="form-control" id="foot_plate_excavation_depth_3">
													<span><small>format must be: .... mm</small></span>
												</div>

												<div class="form-group">
													<label for="foot_plate_excavation_width_4"><b>4. Width</b></label>
													<input type="text" name="foot_plate_excavation_width_4" class="form-control" id="foot_plate_excavation_width_4">
													<span><small>format must be: .... mm x .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="foot_plate_excavation_depth_4"><b>Depth</b></label>
													<input type="text" name="foot_plate_excavation_depth_4" class="form-control" id="foot_plate_excavation_depth_4">
													<span><small>format must be: .... mm</small></span>
												</div>

											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div><b>3. Tie Beam Excavation</b></div>
											</div>
											<div class="col-md-8">
												<div class="form-group">
													<label for="tie_beam_excavation_width_1"><b>1. Width</b></label>
													<input type="text" name="tie_beam_excavation_width_1" class="form-control" id="tie_beam_excavation_width_1">
													<span><small>format must be: .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="tie_beam_excavation_depth_1"><b>Depth</b></label>
													<input type="text" name="tie_beam_excavation_depth_1" class="form-control" id="tie_beam_excavation_depth_1">
													<span><small>format must be: .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="tie_beam_excavation_length_1"><b>Length</b></label>
													<input type="text" name="tie_beam_excavation_length_1" class="form-control" id="tie_beam_excavation_length_1">
													<span><small>format must be: .... mm</small></span>
												</div>

												<div class="form-group">
													<label for="tie_beam_excavation_width_2"><b>2. Width</b></label>
													<input type="text" name="tie_beam_excavation_width_2" class="form-control" id="tie_beam_excavation_width_2">
													<span><small>format must be: .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="tie_beam_excavation_depth_2"><b>Depth</b></label>
													<input type="text" name="tie_beam_excavation_depth_2" class="form-control" id="tie_beam_excavation_depth_2">
													<span><small>format must be: .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="tie_beam_excavation_length_2"><b>Length</b></label>
													<input type="text" name="tie_beam_excavation_length_2" class="form-control" id="tie_beam_excavation_length_2">
													<span><small>format must be: .... mm</small></span>
												</div>

												<div class="form-group">
													<label for="tie_beam_excavation_width_3"><b>3. Width</b></label>
													<input type="text" name="tie_beam_excavation_width_3" class="form-control" id="tie_beam_excavation_width_3">
													<span><small>format must be: .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="tie_beam_excavation_depth_3"><b>Depth</b></label>
													<input type="text" name="tie_beam_excavation_depth_3" class="form-control" id="tie_beam_excavation_depth_3">
													<span><small>format must be: .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="tie_beam_excavation_length_3"><b>Length</b></label>
													<input type="text" name="tie_beam_excavation_length_3" class="form-control" id="tie_beam_excavation_length_3">
													<span><small>format must be: .... mm</small></span>
												</div>

												<div class="form-group">
													<label for="tie_beam_excavation_width_4"><b>4. Width</b></label>
													<input type="text" name="tie_beam_excavation_width_4" class="form-control" id="tie_beam_excavation_width_4">
													<span><small>format must be: .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="tie_beam_excavation_depth_4"><b>Depth</b></label>
													<input type="text" name="tie_beam_excavation_depth_4" class="form-control" id="tie_beam_excavation_depth_4">
													<span><small>format must be: .... mm</small></span>
												</div>
												<div class="form-group">
													<label for="tie_beam_excavation_length_4"><b>Length</b></label>
													<input type="text" name="tie_beam_excavation_length_4" class="form-control" id="tie_beam_excavation_length_4">
													<span><small>format must be: .... mm</small></span>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-12">
												<b>4. For Possible Landslide's Soil (if applicable), - do not add this as additional work</b>
											</div>
											<div class="col-md-4 pl-4">
												<div>Temporary Retaining :</div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="temporary_retaining" id="temporary_retaining_ok"
														   value="yes"> <label class="custom-control-label"
																			  for="temporary_retaining_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="temporary_retaining" id="temporary_retaining_not_ok"
														   value="No"> <label class="custom-control-label"
																				  for="temporary_retaining_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4 pl-4">
												<div><label for="define_material">Define Material</label></div>
											</div>
											<div class="col-md-8 text-right">
												<div class="form-group">
													<input type="text" name="define_material" class="form-control" id="define_material">
												</div>
											</div>
										</div>


										<div class="form-group">
											<label for="excavation_note">Notes</label>
											<textarea name="excavation_note" id="excavation_note" class="form-control" cols="30" rows="5"></textarea>
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
