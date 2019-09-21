@extends('layouts.app')
@section('page_title', 'Project')

@section('content')
    <div class="page-inner">
        <div style="text-align: right"><?= $breadcrumb ?></div>
        <br/>
        <div id="stepper" class="bs-stepper">
            <!-- .card -->
            <div class="card">
                <!-- .card-header -->
                <div class="card-header">
                    <!-- .steps -->
                    <div class="steps steps-" role="tablist">
                        <ul>
                            <li class="step active" data-target="#test-l-1">
                                <a href="#" class="step-trigger" tabindex="-1" aria-selected="true"><span class="step-indicator step-indicator-icon"><i class="oi oi-project"></i></span> <span class="d-none d-sm-inline">Assign Project</span></a>
                            </li>
                            <li class="step" data-target="#test-l-2">
                                <a href="#" class="step-trigger" tabindex="-1" aria-selected="false"><span class="step-indicator step-indicator-icon"><i class="oi oi-person"></i></span> <span class="d-none d-sm-inline">PIC Vendor</span></a>
                            </li>
                            <li class="step" data-target="#test-l-3">
                                <a href="#" class="step-trigger" tabindex="-1" aria-selected="false"><span class="step-indicator step-indicator-icon"><i class="oi oi-layers"></i></span> <span class="d-none d-sm-inline">IBS Approval</span></a>
                            </li>
                        </ul>
                    </div><!-- /.steps -->
                </div><!-- /.card-header -->
                <!-- .card-body -->

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

                                <div class="col-md-6 mb-4">
                                    <select name="wbs_id" id="state" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="fieldset01" required="">
                                        <option value="" selected="selected">Select Project Name</option>
                                        <?php
                                        foreach ($projects as $project) {
                                            echo"<option value='$project->td_planning_detail_wbs_id'> $project->td_planning_detail_wbs_id / $project->tm_planning_iro_number </option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <select name="vendor_id" id="state" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="fieldset01" required="">
                                        <option value="" selected="selected">Select Vendor Name</option>
                                        <?php
                                        foreach ($vendors as $vendor) {
                                            echo"<option value='$vendor->id'> $vendor->group_name </option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>

                            <hr class="mt-5">
                            <!-- .d-flex -->
                            <div class="d-flex">
                                {{--    <p>Next </p>--}}
                                <button type="button" class="next btn btn-primary ml-auto" data-validate="fieldset01">Next step</button>
                            </div><!-- /.d-flex -->
                        </fieldset><!-- /fieldset -->
                    </div><!-- /.content -->
                    <!-- .content -->


                    <div id="test-l-2" class="content fade dstepper-none">
                        <!-- fieldset -->
                        <fieldset>
                            <legend>PIC Vendor</legend>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <select name="user_pic_id" id="state" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="fieldset02" required="">
                                        <option value="" selected="selected">Select PIC Vendor</option>
                                        <?php
                                        foreach ($userVendors as $userVendor) {
                                            echo"<option value='$userVendor->id'> $userVendor->email </option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <select name="role_pic_id" id="state" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="fieldset02" required="">
                                        <option value="" selected="selected">Select PIC Vendor</option>
                                        <?php
                                        foreach ($pic_users as $role) {
                                            echo"<option value='$role->id'> $role->name </option>";
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>


                            <hr class="mt-5">
                            <div class="d-flex">
                                <button type="button" class="prev btn btn-secondary">Previous</button> <button type="button" class="next btn btn-primary ml-auto" data-validate="fieldset02">Next step</button>
                            </div>
                        </fieldset><!-- /fieldset -->
                    </div><!-- /.content -->
                    <!-- .content -->
                    <div id="test-l-3" class="content fade dstepper-none">
                        <!-- fieldset -->
                        <fieldset>
                            <legend>User IBS</legend> <!-- .card -->
                            <div class="row">
                                <!-- grid column -->
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field">
                                        <tr>
                                            <td>
                                                <select name="addmore[][user_ibs_id]" id="statess" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="agreement" required="">
                                                    <option value="" selected="selected">Select User IBS</option>
                                                    <?php
                                                    foreach ($userIbs as $user) {
                                                        echo"<option value=".$user->id."> $user->email </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="addmore[][role_ibs_id]" id="statess" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="agreement" required="">
                                                    <option value="" selected="selected">Select Role</option>
                                                    <?php
                                                    foreach ($ibs_users as $role) {
                                                        echo"<option value='$role->id'> $role->name </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </td>

                                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                        </tr>
                                    </table>

                                </div>


                            </div>

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
@endsection
@section('footer')
    <script type="text/javascript">
        $(document).ready(function(){
            var i=1;

            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added">' +
                    '<td>' + '<select name="addmore[][user_ibs_id]" id="statess" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="agreement" required="">\n' +
                    '<option value="" selected="selected">Select User IBS</option> <?php foreach ($userIbs as $user) {
                                                                                     echo"<option value=".$user->id."> $user->email </option>";
                                                                                    }
                                                                                    ?></select></td>' +
                    '<td><select name="addmore[][role_ibs_id]" id="statess" class="custom-select custom-select-lg d-block w-100 js-example-basic-single" data-parsley-group="agreement" required="">\n' +
                    '<option value="" selected="selected">Select Role</option><?php foreach ($ibs_users as $role) {
                                                                              echo "<option value=".$role->id."> $role->name </option>";
                                                                              }
                                                                              ?></select></td>' +
                    '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

        });
    </script>
@endsection