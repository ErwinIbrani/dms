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
											Concrete Curing
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
												<div><b>1. Curing Time</b></div>
											</div>

											<div class="col-md-4">
												<input type="text" name="concrete_curing_time"
													   class="form-control" id="concrete_curing_time">
												<div class="text-right">Days</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>Concrete surface should be kept covered and wet for at least 7
													(seven) days :
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_surface"
														   id="concrete_curing_surface_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="concrete_curing_surface_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_surface"
														   id="concrete_curing_surface_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="concrete_curing_surface_not_ok">Not
														OK</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>Concrete should not be disturbed by direct or indirect loading:
												</div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_direct_indirect"
														   id="concrete_curing_direct_indirect_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="concrete_curing_direct_indirect_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_direct_indirect"
														   id="concrete_curing_direct_indirect_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="concrete_curing_direct_indirect_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">
												<div>Formwork dismantling in …… days after pouring (minimum 3 days) :
												</div>
											</div>

											<div class="col-md-4 ">
												<input type="text" name="concrete_curing_formwork_day"
													   class="form-control" id="concrete_curing_formwork_day">
												<div class="text-right">Days</div>

												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_formwork"
														   id="concrete_curing_formwork_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="concrete_curing_formwork_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_formwork"
														   id="concrete_curing_formwork_not_ok"
														   value="NO"> <label class="custom-control-label"
																			  for="concrete_curing_formwork_not_ok">NO</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-12">
												<div><b>2. Inspection After Pouring Concrete :</b></div>
											</div>

											<div class="col-md-8">No Defects</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_no_defects"
														   id="concrete_curing_no_defects_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="concrete_curing_no_defects_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_no_defects"
														   id="concrete_curing_no_defects_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="concrete_curing_no_defects_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-8">Anchor Bolt Re-alignment</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_anchor_bolt"
														   id="concrete_curing_anchor_bolt_ok"
														   value="Yes"> <label class="custom-control-label"
																			   for="concrete_curing_anchor_bolt_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_curing_anchor_bolt"
														   id="concrete_curing_anchor_bolt_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="concrete_curing_anchor_bolt_not_ok">No</label>
												</div>
											</div>
										</div>

										<div class="form-row my-2">
											<div class="col-md-12">
												<div><b>3. Soil Backfilling</b></bb></div>
											</div>

											<div class="col-md-8 my-3">Soil Compactor</div>

											<div class="col-md-12">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<div class="custom-control custom-control-inline custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="concrete_curing_stamper"
																	   id="concrete_curing_stamper" value="stamper"> <label class="custom-control-label"
																						 for="concrete_curing_stamper">Stamper</label>
															</div>
															<input type="text" name="concrete_curing_stamper_unit" class="form-control"/>
															<div class="text-right">units</div>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<div class="custom-control custom-control-inline custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="concrete_curing_baby_roller"
																	   id="concrete_curing_baby_roller" value="Baby roller"> <label class="custom-control-label"
																						 for="concrete_curing_baby_roller">Baby Roller</label>
															</div>
															<input type="text" name="concrete_curing_baby_roller_unit" class="form-control"/>
															<div class="text-right">units</div>
														</div>
													</div>
												</div>
											</div>
										</div>

											<div class="form-row my-2">
												<div class="col-md-8">
													Compacted Every …… cm
												</div>

												<div class="col-md-4 ">
													<input type="text" name="concrete_curing_compacted_length"
														   class="form-control" id="concrete_curing_compacted_length">
													<div class="text-right">cm</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="concrete_curing_compacted"
															   id="concrete_curing_compacted_ok"
															   value="Yes"> <label class="custom-control-label"
																				   for="concrete_curing_compacted_ok">Yes</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="concrete_curing_compacted"
															   id="concrete_curing_compacted_not_ok"
															   value="No"> <label class="custom-control-label"
																				  for="concrete_curing_compacted_not_ok">No</label>
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

