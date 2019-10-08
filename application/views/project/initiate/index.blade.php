@extends('layouts.app')

@section('content')
	<div class="page-inner">
		<header class="page-title-bar">
			<!-- .breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active">
						<a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Project</a>
					</li>
				</ol>
			</nav><!-- /.breadcrumb -->

			<!-- title and toolbar -->
			<div class="d-md-flex align-items-md-start">
				<h1 class="page-title mr-sm-auto">Initiate Project</h1><!-- .btn-toolbar -->
				<div class="btn-toolbar">
				</div>
			</div><!-- /title and toolbar -->
		</header>
		<div class="page-section">
			<div class="section-block">
				<div id="stepper" class="bs-stepper">
					<!-- .card -->
					<div class="card">
						<!-- .card-header -->
						<div class="card-header">
							<!-- .steps -->
							<div class="steps" role="tablist">
								<ul>
									<li class="step active" data-target="#test-l-1">
										<a href="#" class="step-trigger" tabindex="-1" aria-selected="true">
											<span class="step-indicator step-indicator-icon"><i
													class="oi oi-project"></i></span> <span class="d-none d-sm-inline">Select Project / WBS ID</span></a>
									</li>
									<li class="step" data-target="#test-l-2">
										<a href="#" class="step-trigger" tabindex="-1" aria-selected="false"><span
												class="step-indicator step-indicator-icon"><i class="oi oi-person"></i></span>
											<span class="d-none d-sm-inline">PIC IBS</span></a>
									</li>
									<li class="step" data-target="#test-l-3">
										<a href="#" class="step-trigger" tabindex="-1" aria-selected="false"><span
												class="step-indicator step-indicator-icon"><i class="oi oi-layers"></i></span>
											<span class="d-none d-sm-inline">IBS Approval</span></a>
									</li>
								</ul>
							</div><!-- /.steps -->
						</div><!-- /.card-header -->
						<!-- .card-body -->

						<div class="card-body">
                        <?php
                        $data = [
                            'class' => 'p-lg-4 p-sm-3 p-0',
                            'id' => 'stepper-form',
                            'name' => 'stepperForm',
                        ];
                        echo form_open('procurement/project/store', $data);
                        ?>
						<!-- .content -->
							<div id="test-l-1" class="content fade active dstepper-block">
								<!-- fieldset -->
								<fieldset>
									<legend>Project</legend>


									<hr class="mt-5">
									<!-- .d-flex -->
									<div class="d-flex">
										{{--    <p>Next </p>--}}
										<button type="button" class="next btn btn-primary ml-auto"
												data-validate="fieldset01">Next step
										</button>
									</div><!-- /.d-flex -->
								</fieldset><!-- /fieldset -->
							</div><!-- /.content -->
							<!-- .content -->


							<div id="test-l-2" class="content fade dstepper-none">
								<!-- fieldset -->
								<fieldset>
									<legend>PIC IBS</legend>

									<hr class="mt-5">
									<div class="d-flex">
										<button type="button" class="prev btn btn-secondary">Previous</button>
										<button type="button" class="next btn btn-primary ml-auto"
												data-validate="fieldset02">Next step
										</button>
									</div>
								</fieldset><!-- /fieldset -->
							</div><!-- /.content -->
							<!-- .content -->
							<div id="test-l-3" class="content fade dstepper-none">
								<!-- fieldset -->
								<fieldset>
									sdfsdf
									<hr class="mt-5">
									<div class="d-flex">
										<button type="button" class="prev btn btn-secondary">Previous</button>
										<button type="submit" class="submit btn btn-primary ml-auto">Submit</button>
									</div>
								</fieldset><!-- /fieldset -->
							</div><!-- /.content -->
                        <?php echo form_close();?><!-- /form -->
						</div><!-- /.card-body -->
					</div><!-- /.card -->
				</div>
			</div>
		</div>
	</div>
@endsection

@push('script')
	<script src="{{ base_url('assets/vendor/bs-stepper/js/bs-stepper.min.js') }}"></script> <!-- END PLUGINS JS -->
@endpush
