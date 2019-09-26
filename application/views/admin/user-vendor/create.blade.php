@extends('layouts.app')
@section('page_title', 'User Vendor')

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
             echo form_open('admin/uservendor/store',$data);
            ?>
                    <!-- .fieldset -->
                    <fieldset>
                        <legend>User Vendor</legend>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label  for="selDefault">Group Name</label>
                                <select name="vendor_id" class="custom-select js-example-basic-single" required="">
                                    <option value="" selected="selected">Select Group Name</option>
                                    <?php
                                    foreach ($groupvendors as $groupvendor) {
                                        echo"<option value='$groupvendor->id'> $groupvendor->group_name </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tf1">User Vendor Name</label>
                                <input type="text" class="form-control" name="name" autocomplete="off" required=""/>
                            </div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-group">
                               <label for="tf1">Email</label>
                               <input type="email" class="form-control" name="email" autocomplete="off" required="">
                           </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tf1">Phone</label>
                                <input type="text" class="form-control" name="phone" autocomplete="off" required="">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label  for="selDefault">Region Name</label>
                                <select name="region_id" class="custom-select js-example-basic-single" required="">
                                    <option value="" selected="selected">Select Region Name</option>
                                    <?php
                                    foreach ($regions as $region) {
                                        echo"<option value='$region->id'> $region->name </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label  for="selDefault">Province Name</label>
                                <select name="province_id" class="custom-select js-example-basic-single" required="">
                                    <option value="" selected="selected">Select Region Name</option>
                                    <?php
                                    foreach ($provinces as $province) {
                                        echo"<option value='$province->id'> $province->name </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label  for="selDefault">City Name</label>
                                <select name="city_id" class="custom-select js-example-basic-single" required="">
                                    <option value="" selected="selected">Select Region Name</option>
                                    <?php
                                    foreach ($cities as $city) {
                                        echo"<option value='$city->id'> $city->name </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                       <div class="col-lg-12">
                        <div class="form-group">
                            <label for="tf6">Address</label>
                            <textarea class="form-control" id="tf6" rows="3" name="address" required=""></textarea>
                        </div>
                       </div>

                      <div class="col-lg-12">
                        <div class="form-group">
                            <label for="sel1">Level</label>
                            <select class="custom-select" id="sel1" required="" name="level">
                                <option value="">Choose...</option>
                                <option value="PIC">PIC</option>
                            </select>
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