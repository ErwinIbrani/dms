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
											Anchor
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
												<div><b>1. : Anchor Bolts Setting - 4 legs</b></div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div><b>Tower Height</b></div>
											</div>
											<div class="col-md-8 ">
												<div class="form-group">
													<input type="number" name="anchor_bolts_4_legs_height"
														   class="form-control" id="anchor_bolts_4_legs_height">
													<span><small>format in Meter (M).</small></span>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div><b>Tower Manufacturer</b></div>
											</div>
											<div class="col-md-8 ">
												<div class="form-group">
													<input type="text" name="anchor_bolts_4_legs_manufacturer"
														   class="form-control" id="anchor_bolts_4_legs_manufacturer">
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8 ">
												<p>Notes</p>
												<div><small>Make sure all anchor bolt at the same </small></div>
												<div><small>Difference   between   Reference and the actual is maximum of  3 mm</small></div>
												<table class="table table-bordered mt-2">
													<thead>
													<tr>
														<th></th>
														<th>
															<div>Reference</div>
															<span>See Drawing</span>
														</th>
														<th>Actual</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td>A1</td>
														<td>
															<div class="form-group">
																<input type="text"
																	   name="anchor_bolts_4_legs_reference_a1"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_a1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="text"
																	   name="anchor_bolts_4_legs_actual_a1"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_a1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>A2</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_a2"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_a2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_a2"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_a2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>A3</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_a3"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_a3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_a3"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_a3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>A4</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_a4"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_a4">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_a4"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_a4">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>B1</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_b1"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_b1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_b1"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_b1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>B2</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_b2"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_b2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_b2"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_b2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>B3</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_b3"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_b3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_b3"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_b3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>B4</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_b4"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_b4">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_b4"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_b4">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>C1</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_c1"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_c1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_c1"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_c1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>C2</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_c2"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_c2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_c2"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_c2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>C3</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_c3"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_c3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_c3"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_c3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>

													<tr>
														<td>D1</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_d1"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_d1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_d1"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_d1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>D2</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_d2"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_d2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_d2"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_d2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>D3</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_reference_d3"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_reference_d3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_4_legs_actual_d3"
																	   class="form-control"
																	   id="anchor_bolts_4_legs_actual_d3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													</tbody>
												</table>
											</div>
										</div>


										<div class="form-row my-4">

											<div class="col-md-4 pl-4">
												<div><b>Anchor bolts level</b></div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_bolts_4_legs_level" id="anchor_bolts_4_legs_level_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="anchor_bolts_4_legs_level_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_bolts_4_legs_level" id="anchor_bolts_4_legs_level_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="anchor_bolts_4_legs_level_not_ok">No</label>
												</div>
											</div>
										</div>


										<div class="form-group mb-5 pb-5">
											<label for="anchor_bolts_4_legs_notes">Notes</label>
											<textarea name="anchor_bolts_4_legs_notes" id="anchor_bolts_4_legs_notes" class="form-control"
													  cols="30" rows="5"></textarea>
										</div>

										<hr/>

										<div class="form-row mt-5 pt-5">
											<div class="col-md-4">
												<div><b>2. : Anchor Bolts Setting - 3 legs</b></div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div><b>Tower Height</b></div>
											</div>
											<div class="col-md-8 ">
												<div class="form-group">
													<input type="number" name="anchor_bolts_3_legs_height"
														   class="form-control" id="anchor_bolts_3_legs_height">
													<span><small>format in Meter (M).</small></span>
												</div>
											</div>
										</div>

										<div class="form-row my-4">
											<div class="col-md-4">
												<div><b>Tower Manufacturer</b></div>
											</div>
											<div class="col-md-8 ">
												<div class="form-group">
													<input type="text" name="anchor_bolts_3_legs_manufacturer"
														   class="form-control" id="anchor_bolts_3_legs_manufacturer">
												</div>
											</div>
										</div>

										<div class="form-row my-4">

											<div class="col-md-8 ">
												<p>Notes</p>
												<div><small>Make sure all anchor bolt at the same  level use simple water pass to measure the actual is maximum of  3 mm</small></div>
												<div><small> If Tower Manufacture is absent during the Achor  setting,  they  must  accepted </small></div>
												<table class="table table-bordered mt-2">
													<thead>
													<tr>
														<th></th>
														<th>
															<div>Reference</div>
															<span>See Drawing</span>
														</th>
														<th>Actual</th>
													</tr>
													</thead>
													<tbody>
													<tr>
														<td>A1</td>
														<td>
															<div class="form-group">
																<input type="text"
																	   name="anchor_bolts_3_legs_reference_a1"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_a1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="text"
																	   name="anchor_bolts_3_legs_actual_a1"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_a1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>A2</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_reference_a2"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_a2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_actual_a2"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_a2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>A3</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_reference_a3"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_a3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_actual_a3"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_a3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>

													<tr>
														<td>B1</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_reference_b1"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_b1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_actual_b1"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_b1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>B2</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_reference_b2"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_b2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_actual_b2"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_b2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>B3</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_reference_b3"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_b3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_actual_b3"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_b3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>

													<tr>
														<td>C1</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_reference_c1"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_c1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_actual_c1"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_c1">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>C2</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_reference_c2"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_c2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_actual_c2"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_c2">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>
													<tr>
														<td>C3</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_reference_c3"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_reference_c3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
														<td>
															<div class="form-group">
																<input type="number"
																	   name="anchor_bolts_3_legs_actual_c3"
																	   class="form-control"
																	   id="anchor_bolts_3_legs_actual_c3">
																<span><small>Format in mm</small></span>
															</div>
														</td>
													</tr>


													</tbody>
												</table>
											</div>
										</div>


										<div class="form-row my-4">

											<div class="col-md-4 pl-4">
												<div><b>Anchor bolts level</b></div>
											</div>
											<div class="col-md-8 text-right">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_bolts_3_legs_level" id="anchor_bolts_3_legs_level_ok"
														   value="yes"> <label class="custom-control-label"
																			   for="anchor_bolts_3_legs_level_ok">Yes</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="anchor_bolts_3_legs_level" id="anchor_bolts_3_legs_level_not_ok"
														   value="No"> <label class="custom-control-label"
																			  for="anchor_bolts_3_legs_level_not_ok">No</label>
												</div>
											</div>
										</div>


										<div class="form-group">
											<label for="anchor_bolts_3_legs_notes">Notes</label>
											<textarea name="anchor_bolts_3_legs_notes" id="anchor_bolts_3_legs_notes" class="form-control"
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
