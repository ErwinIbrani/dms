@extends('layouts.app')
@section('page_title', 'Vendor')

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
                    'class' => 'null'
                ];
                echo form_open('admin/vendor/update',$data);
                ?>
                <!-- .fieldset -->
                    <fieldset>
                        <legend>Vendor</legend>

                        <div class="row">
                            <input type="hidden" class="form-control" name="id" autocomplete="off" value="<?= $model->id ?>">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label  for="selDefault">Group Name</label>
                                    <select name="group_vendor_id" class="custom-select js-example-basic-single">
                                        <option value="" selected="selected">Select Group Name</option>
                                        <?php
                                        foreach ($groupvendors as $data) {
                                            echo "<option value='$data->id'";
                                            echo $model->group_vendor_id == $data->id ? 'selected': '';
                                            echo ">$data->group_name </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tf1">Vendor Name</label>
                                    <input type="text" class="form-control" name="name" autocomplete="off" value="<?= $model->name ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tf1">Email</label>
                                    <input type="email" class="form-control" name="email" autocomplete="off" value="<?= $model->email ?>">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tf1">Phone</label>
                                    <input type="text" class="form-control" name="phone" autocomplete="off" value="<?= $model->phone ?>">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label  for="selDefault">Region Name</label>
                                    <select name="region_id" class="custom-select js-example-basic-single region">
                                        <option value="" selected="selected">Select Region Name</option>
                                        <?php
                                        foreach ($regions as $data) {
                                            echo "<option value='$data->id'";
                                            echo $model->region_id == $data->id ? 'selected': '';
                                            echo ">$data->name </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label  for="selDefault">Province Name</label>
                                    <select name="province_id" class="custom-select js-example-basic-single region">
                                        <option value="" selected="selected">Select Province Name</option>
                                        <?php
                                        foreach ($provinces as $data) {
                                            echo "<option value='$data->id'";
                                            echo $model->province_id == $data->id ? 'selected': '';
                                            echo ">$data->name </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label  for="selDefault">City Name</label>
                                    <select name="city_id" class="custom-select js-example-basic-single region">
                                        <option value="" selected="selected">Select City Name</option>
                                        <?php
                                        foreach ($cities as $data) {
                                            echo "<option value='$data->id'";
                                            echo $model->city_id == $data->id ? 'selected': '';
                                            echo ">$data->name </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="tf6">Address</label>
                                    <textarea class="form-control" id="tf6" rows="3" name="address"><?= $model->address ?></textarea>
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
                </div><!-- /.card-body -->
            </div>
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