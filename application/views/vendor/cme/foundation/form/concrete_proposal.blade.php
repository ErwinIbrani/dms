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
											Concrete Propposal
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
												<div><b>1. Concrete Characteristic (Minimal of K-225)</b></div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="number" name="concrete_characteristic"
														   class="form-control" id="concrete_characteristic">
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>2.
														Slump (in accordance to SNI-91 / PBI 71)</b></div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_proposal_slump"
														   class="form-control" id="concrete_proposal_slump">
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>3. Type of Concrete</b></div>
											</div>
											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="type_of_concrete" id="type_of_concrete_ok"
														   value="Ready Mixed"> <label class="custom-control-label"
																			   for="type_of_concrete_ok">Ready Mixed</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="type_of_concrete" id="type_of_concrete_not_ok"
														   value="Site Mixed"> <label class="custom-control-label"
																			  for="type_of_concrete_not_ok">Site Mixed</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-12 mb-4">
												<div><b>4. Ready Mix : (attached the Purchase Order and the Delivery Order from Ready Mix vendor)</b></div>
											</div>
											<div class="col-md-8">
												<div>
														Supplier</div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_proposal_supplier"
														   class="form-control" id="concrete_proposal_supplier">
												</div>
											</div>
										</div>

										<div class="form-row">

											<div class="col-md-8">
												<div>Distance from Batching Plant to Site</div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_proposal_distance_from_batching"
														   class="form-control" id="concrete_proposal_distance_from_batching">
												</div>
											</div>
										</div>

										<div class="form-row">

											<div class="col-md-8">
												<div>
														Delivery Time from Batching Plant to Site</div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_proposal_delivery_time"
														   class="form-control" id="concrete_proposal_delivery_time">
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-12 mb-4">
												<div><b>5. Site Mix (Mix Design) :</b></div>
											</div>
											<div class="col-md-8">
												<div>Proportion (based on volume) :</div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_proposal_proportion"
														   class="form-control" id="concrete_proposal_proportion">
													<span class="text-muted"><small>(Cement : Fine Agg. : Coarse Agg.)</small></span>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div>Water Cement Ratio</div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_proposal_water_cement_ratio"
														   class="form-control" id="concrete_proposal_water_cement_ratio">
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div>Mix design Report</div>
												<div>(Per quarry)</div>
											</div>
											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_proposal_mix_design_report" id="concrete_proposal_mix_design_report_ok"
														   value="Available"> <label class="custom-control-label"
																					   for="concrete_proposal_mix_design_report_ok">Available</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_proposal_mix_design_report" id="concrete_proposal_mix_design_report_not_ok"
														   value="Unavailable"> <label class="custom-control-label"
																					  for="concrete_proposal_mix_design_report_not_ok">Unavailable</label>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-8">
												<div><b>6. Number of sample templates</b></div>
											</div>
											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_proposal_number_of_sample"
														   class="form-control" id="concrete_proposal_number_of_sample">
													<span class="text-muted"><small>(min. 12 pcs at 3rd, 7th & 28th day)</small></span>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>7.Proposal Conclusion</b></div>
											</div>
											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_proposal_conclusion" id="concrete_proposal_conclusion_ok"
														   value="Accepted"> <label class="custom-control-label"
																					 for="concrete_proposal_conclusion_ok">Accepted</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_proposal_conclusion" id="concrete_proposal_conclusion_not_ok"
														   value="Rejected"> <label class="custom-control-label"
																					   for="concrete_proposal_conclusion_not_ok">Rejected</label>
												</div>
											</div>
										</div>




										<div class="form-group mt-4">
											<label for="anchor_bolts_4_legs_notes">Notes</label>
											<textarea name="anchor_bolts_4_legs_notes" id="anchor_bolts_4_legs_notes"
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
