@extends('layouts.app')
@section('page_title', 'Document Setting')

@section('header')
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2/select2.css">
@endsection
@section('content')
    <div class="page-inner">
        <div style="text-align: right"><?= $breadcrumb ?></div>
        <br/>
        <div class="page-section">
            <div id="base-style" class="card">
                <!-- .card-body -->
                <div class="card-body">
                    <!-- .form -->
                <?php
                $data  = [
                    'name' => 'document-setting'
                ];
                echo form_open('admin/documentsetting/update',$data);
                ?>
                <!-- .fieldset -->
                    <fieldset>
                        <legend>Update Document Setting</legend>

                        <div class="row">
                            <input type="hidden" class="form-control" name="id" value="<?= $model->id ?>" />
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="tf1">Document Name</label>
                                    <input type="text" class="form-control is-valid" name="document_name" value="<?= $model->document_name ?>" readonly="readonly"/>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field">
                                        <tr>
                                            <td>
                                                <select name="group_id" class="custom-select js-example-basic-single" required="">
                                                    <option value="" selected="selected">Select Role</option>
                                                    <?php
                                                    foreach ($roles as $role) {
                                                        echo "<option value='$role->id'";
                                                        echo (int)$model->group_id ===   (int)$role->id ? 'selected': '';
                                                        echo ">$role->name </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </td>
                                            <td>
                                                <select  name="document_type" class="custom-select js-example-basic-single" required="">
                                                    <option value="" selected="selected">Document Type</option>
                                                    <?php
                                                    if ($model->document_type == 'Submiter')
                                                        echo "<option value='Submiter' selected> Submiter </option>";
                                                    else echo "<option value='Submiter'> Submiter </option>";

                                                    if ($model->document_type == 'Review')
                                                        echo "<option value='Review' selected> Review </option>";
                                                    else echo "<option value='Review'> Review </option>";

                                                    if ($model->document_type == 'Approval')
                                                        echo "<option value='Approval' selected> Approval </option>";
                                                    else echo "<option value='Approval'> Approval </option>";

                                                    ?>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="publisher-actions">
                            <div class="publisher-tools mr-auto">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </fieldset>
                    <?php echo form_close();?>
                </div><!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection