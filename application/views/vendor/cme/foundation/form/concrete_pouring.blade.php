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
											Concrete Pouring
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
												<div><b>1. Concrete placing</b></div>
											</div>

											<div class="col-md-8">
												<div><b>No water added after initial mixing</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_pouring_no_water" id="concrete_pouring_no_water_ok"
														   value="OK"> <label class="custom-control-label"
																					for="concrete_pouring_no_water_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_pouring_no_water" id="concrete_pouring_no_water_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																					for="concrete_pouring_no_water_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>Concrete laid continuous smoothly</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_pouring_laid" id="concrete_pouring_laid_ok"
														   value="OK"> <label class="custom-control-label"
																					for="concrete_pouring_laid_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_pouring_laid" id="concrete_pouring_laid_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																					for="concrete_pouring_laid_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>Concrete should not be dropped higher than 50 cm</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_pouring_higher_than" id="concrete_pouring_higher_than_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="concrete_pouring_higher_than_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_pouring_higher_than" id="concrete_pouring_higher_than_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="concrete_pouring_higher_than_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>Concrete is correctly compacted by skillful people & proper tool</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_pouring_skillful_people" id="concrete_pouring_skillful_people_ok"
														   value="OK"> <label class="custom-control-label"
																			  for="concrete_pouring_skillful_people_ok">OK</label>
												</div>
												<div class="custom-control custom-control-inline custom-radio">
													<input type="radio" class="custom-control-input"
														   name="concrete_pouring_skillful_people" id="concrete_pouring_skillful_people_not_ok"
														   value="Not OK"> <label class="custom-control-label"
																				  for="concrete_pouring_skillful_people_not_ok">Not OK</label>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-12">
												<div><b>2. Concrete Strength / Crushing Test</b></div>
											</div>

											<div class="col-md-8">
												<div><b>NUmber of samples</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_pouring_number_of_samples"
														   class="form-control" id="concrete_pouring_number_of_samples">
													<div class="text-right">units</div>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>Recommended Lab</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_pouring_recommended_lab"
														   class="form-control" id="concrete_pouring_recommended_lab">
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>3rd Day Test Result</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_pouring_3rd_day_test_result"
														   class="form-control" id="concrete_pouring_3rd_day_test_result">
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="concrete_pouring_3rd_day_test_result_status" id="concrete_pouring_3rd_day_test_result_status_ok"
															   value="OK"> <label class="custom-control-label"
																				  for="concrete_pouring_3rd_day_test_result_status_ok">OK</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="concrete_pouring_3rd_day_test_result_status" id="concrete_pouring_3rd_day_test_result_status_not_ok"
															   value="Not OK"> <label class="custom-control-label"
																					  for="concrete_pouring_3rd_day_test_result_status_not_ok">Not OK</label>
													</div>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>7th Day Test Result</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_pouring_7th_day_test_result"
														   class="form-control" id="concrete_pouring_7th_day_test_result">

													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="concrete_pouring_7th_day_test_result_status" id="concrete_pouring_7th_day_test_result_status_ok"
															   value="OK"> <label class="custom-control-label"
																				  for="concrete_pouring_7th_day_test_result_status_ok">OK</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="concrete_pouring_7th_day_test_result_status" id="concrete_pouring_7th_day_test_result_status_not_ok"
															   value="Not OK"> <label class="custom-control-label"
																					  for="concrete_pouring_7th_day_test_result_status_not_ok">Not OK</label>
													</div>
												</div>
											</div>
										</div>

										<div class="form-row">
											<div class="col-md-8">
												<div><b>28th Day Test Result</b></div>
											</div>

											<div class="col-md-4 ">
												<div class="form-group">
													<input type="text" name="concrete_pouring_28th_day_test_result"
														   class="form-control" id="concrete_pouring_28th_day_test_result">
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="concrete_pouring_28th_day_test_result_status" id="concrete_pouring_28th_day_test_result_status_ok"
															   value="OK"> <label class="custom-control-label"
																				  for="concrete_pouring_28th_day_test_result_status_ok">OK</label>
													</div>
													<div class="custom-control custom-control-inline custom-radio">
														<input type="radio" class="custom-control-input"
															   name="concrete_pouring_28th_day_test_result_status" id="concrete_pouring_28th_day_test_result_status_not_ok"
															   value="Not OK"> <label class="custom-control-label"
																					  for="concrete_pouring_28th_day_test_result_status_not_ok">Not OK</label>
													</div>
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

