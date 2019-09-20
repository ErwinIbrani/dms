@extends('layouts.app')
@section('page_title', ucwords($candidate->name))

@section('content')
	<div class="page">
		<div class="page-inner">
			<header class="page-title-bar">
				<!-- .breadcrumb -->
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active">
							<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Candidate Document</a>
						</li>
					</ol>
				</nav><!-- /.breadcrumb -->

				<!-- title and toolbar -->
				<div class="d-md-flex align-items-md-start">
					<h1 class="page-title mr-sm-auto"> {{ ucwords($candidate->name) }} </h1><!-- .btn-toolbar -->
				</div><!-- /title and toolbar -->
			</header>

			<div class="card card-fluid">
				<div class="card-header">
					<ul class="nav nav-tabs card-header-tabs">
						<li class="nav-item">
							<a class="nav-link show active" href="{{ site_url('/vendor/candidate/document/survey/index/'.$candidate->id) }}">Document Survey</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ site_url('/vendor/candidate/document/bap/add/'. $candidate->id) }}">BAP Document</a>
						</li>
					</ul>
				</div>
				<div class="card-body">
					<div class="tab-content">
						<div class="tab-pane fade active show" id="candidate-survey" role="tabpanel">
                            <?php
                            $data  = [
                                'name' => 'survey-form'
                            ];
                            echo form_open_multipart('vendor/candidate/document/survey/store', $data);
                            ?>

							<input type="hidden" class="form-control" name="candidate_id" value="<?= $candidate->id ?>">
							<input type="hidden" class="form-control" name="project_id" value="<?= $project->id ?>">
						    <input type="hidden" name="name" value="SURVEY_SITAC">

							<!-- .fieldset -->
								<fieldset>
									@if(!empty(validation_errors()))
										<div class="col-lg-12">
											<div class="alert alert-warning alert-dismissible fade show">
												<button type="button" class="close" data-dismiss="alert">×</button>
												<strong><?php echo validation_errors(); ?></strong>
											</div>
										</div>
									@endif

								<div class="row">

										<div class="col-lg-12">
											<div class="form-group">
												<label for="tf1" class="badge badge-secondary">
													@if($project->site_type == 'GF')
														{{ 'Site Type : Green Field' }}
												     @else
														{{ 'Site Type : Roof Top' }}
													@endif
												</label>
											</div>
							            </div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Contractor</label>
												<input type="text" class="form-control" name="contractor" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Project Manager</label>
												<input type="text" class="form-control" name="project_manger" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">SITAC HO (Initial by Sitac & CME Reg)</label>
												<input type="text" class="form-control" name="sitac_ho" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Approved By (Operator) RF</label>
												<input type="text" class="form-control" name="rf" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Approved By (Operator) TX</label>
												<input type="text" class="form-control" name="tx" autocomplete="off">
											</div>
										</div>

										<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
										<div class="col-lg-12">
											<div class="form-group">
												<label for="tf1" class="badge badge-secondary">Site Identification</label>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Site ID</label>
												<input type="text" class="form-control" name="site_id" value="<?= $project->site_id_ibs ?>" readonly="readonly"/>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Site Name</label>
												<input type="text" class="form-control" name="site_name" value="<?= $project->site_name ?>" readonly="readonly"/>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Nominal Long</label>
												<input type="text" class="form-control" name="nominal_long" value="<?= $project->longitude ?>" readonly="readonly"/>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Nominal Lat</label>
												<input type="text" class="form-control" name="nominal_lat" value="<?= $project->latitude ?>" readonly="readonly"/>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Search Radius</label>
												<input type="text" class="form-control" name="search_radius" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Antena Height</label>
												<input type="text" class="form-control" name="antena_height" autocomplete="off">
											</div>
										</div>
										<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">


										<div class="col-lg-12">
											<div class="form-group">
												<label for="tf1" class="badge badge-secondary">Candidate Information</label>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Candidate</label>
												<input type="text" class="form-control" name="candidate" value="<?= ucwords($candidate->name) ?>" readonly="readonly">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Candidate Long</label>
												<input type="text" class="form-control" name="candidate_long" value="<?= $candidate->long ?>" readonly="readonly">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Candidate Lat</label>
												<input type="text" class="form-control" name="candidate_lat" value="<?= $candidate->lat ?>" readonly="readonly">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Distance From Nom</label>
												<input type="text" class="form-control" name="distance_from_nom" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Azimuth</label>
												<input type="text" class="form-control" name="azimuth" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Site Address</label>
												<input type="text" class="form-control" name="site_address" value="<?= $candidate->address ?>" readonly="readonly">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Site Location</label>
												<select class="form-control" name="site_location">
													<option value="" selected="selected">.:Choose:.</option>
													<option value="Office">Office</option>
													<option value="Commercial">Commercial</option>
													<option value="Residential">Residential</option>
													<option value="Remote Area">Remote Area</option>
												</select>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Tower Type</label>
												<select class="form-control" name="tower_type">
													<option value="" selected="selected">.:Choose:.</option>
													<option value="Self Support Tower">Self Support Tower</option>
													<option value="Monopole Tower">Monopole Tower</option>
													<option value="Pole Mount">Pole Mount</option>
													<option value="Wall Mount">Wall Mount</option>
													<option value="Mini Tower">Mini Tower</option>
													<option value="Slim Tower">Slim Tower</option>
												</select>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Building Height(m)</label>
												<input type="text" class="form-control" name="building_height" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Floor No(fl)</label>
												<input type="text" class="form-control" name="floor_no" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Pole/Tower Height(m)</label>
												<input type="text" class="form-control" name="tower_height" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Space Dimension(m)</label>
												<input type="text" class="form-control" name="space_dimension" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Access Road(m)</label>
												<input type="text" class="form-control" name="access_road" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">24/7 Access</label>
												<input type="text" class="form-control" name="access" autocomplete="off">
											</div>
										</div>

										<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
										<div class="col-lg-12">
											<div class="form-group">
												<label for="tf1" class="badge badge-secondary">Owner Information</label>
											</div>
										</div>


										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Owner(Institution)</label>
												<input type="text" class="form-control" name="owner" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Address(Owner)</label>
												<input type="text" class="form-control" name="address_owner" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">PIC(if institution)</label>
												<input type="text" class="form-control" name="pic_owner" autocomplete="off">
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf1">Phone Number</label>
												<input type="text" class="form-control" name="phone_owner" autocomplete="off">
											</div>
										</div>

										<hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">
										<div class="col-lg-12">
											<div class="form-group">
												<label for="tf1" class="badge badge-secondary">File Upload</label>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf3">Site Location Map</label>
												<div class="custom-file">
													<input type="file" name="site_location_map" class="custom-file-input" id="tf31"> <label class="custom-file-label" for="tf3">Choose file</label>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf3">Site Layout</label>
												<div class="custom-file">
													<input type="file" name="site_layout" class="custom-file-input" id="tf32"> <label class="custom-file-label" for="tf3">Choose file</label>
												</div>
											</div>
										</div>

										<div class="col-lg-6">
											<div class="form-group">
												<label for="tf3">Site Contour</label>
												<div class="custom-file">
													<input type="file" name="site_contour" class="custom-file-input" id="tf33"> <label class="custom-file-label" for="tf3">Choose file</label>
												</div>
											</div>
										</div>
									</div>
									<div class="publisher-actions">
										<!-- .publisher-tools -->
										<div class="publisher-tools mr-auto">
										</div>
										<!-- /.publisher-tools -->
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</fieldset>
                            <?php echo form_close();?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
