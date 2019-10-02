@extends('layouts.app')
@section('page_title', 'Project')
@section('header')
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2/select2.css">
@endsection
@section('content')
    <div class="page-inner">
        <div style="text-align: right"><?= $breadcrumb ?></div>
        <br/>
        <div id="stepper" class="bs-stepper">
            <!-- .card -->
            <div class="card">
                <!-- .card-header -->
                <div class="card-header">
                    <a href="javascript:" class="step-trigger" tabindex="-1" aria-selected="true"><span class="step-indicator step-indicator-icon"><i class="oi oi-project"></i></span> <span class="d-none d-sm-inline">Register Project</span></a>
                </div>
                <div class="card-body">
                <?php
                $data  = [
                    'class' => 'p-lg-4 p-sm-3 p-0',
                    'id'    => 'stepper-form',
                    'name'  => 'stepperForm',
                ];
                echo form_open('procurement/project/store',$data);
                ?>
                <!-- .content -->
                    <div id="test-l-1" class="content fade active dstepper-block">
                        <!-- fieldset -->
                        <fieldset>
                            <legend>Project</legend>
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <select name="wbs_id" id="state" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="fieldset01" required="">
                                        <option value="" selected="selected">Select Project Name</option>
                                        <?php
                                        foreach ($projects as $project) {
                                            echo"<option value='$project->td_planning_detail_wbs_id'> $project->td_planning_detail_wbs_id / $project->tm_planning_iro_number </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <hr class="mt-5">
                            <!-- .d-flex -->
                            <div class="d-flex">
                                {{--    <p>Next </p>--}}
                                <button type="submit" class="next btn btn-primary ml-auto">Save</button>
                            </div><!-- /.d-flex -->
                        </fieldset><!-- /fieldset -->
                    </div><!-- /.content -->

                <?php echo form_close();?><!-- /form -->
                </div><!-- /.card-body -->
            </div><!-- /.card -->
        </div>
    </div>
@endsection
@section('footer')
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
        });
    </script>
@endsection