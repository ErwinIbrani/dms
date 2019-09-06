@extends('layouts.app')
@section('page_title', 'Vendor')

@section('header')
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2/select2.css">
@endsection
@section('content')
   <div class="page-inner">
    <div class="page-section">
        <div id="base-style" class="card">
            <!-- .card-body -->
            <div class="card-body">
                <!-- .form -->
            <?php
             $data  = [
                        'class' => 'null'
                    ];
             echo form_open('admin/vendor/store',$data);
            ?>
                    <!-- .fieldset -->
                    <fieldset>
                        <legend>Vendor</legend>

                        @if(!empty(validation_errors()))
                        <div class="col-lg-12">
                            <div class="alert alert-warning alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong><?php echo validation_errors(); ?></strong>
                            </div>
                        </div>
                        @endif

                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label  for="selDefault">Group Name</label>
                                <select name="group_vendor_id" class="custom-select js-example-basic-single">
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
                                <label for="tf1">Vendor Name</label>
                                <input type="text" class="form-control" name="name" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-lg-6">
                           <div class="form-group">
                               <label for="tf1">Email</label>
                               <input type="email" class="form-control" name="email" autocomplete="off">
                           </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tf1">Phone</label>
                                <input type="text" class="form-control" name="phone" autocomplete="off">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label  for="selDefault">Region Name</label>
                                <select name="region_id" class="custom-select js-example-basic-single" id="region">
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
                                <label>Province Name</label>
                                <select class="form-control" id="province" name="province_id">
                                    <option value="" selected="selected">Select Province</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>City Name</label>
                                <select class="form-control" id="city" name="city_id">
                                    <option>No Selected</option>
                                </select>
                            </div>
                        </div>

                       <div class="col-lg-12">
                        <div class="form-group">
                            <label for="tf6">Address</label>
                            <textarea class="form-control" id="tf6" rows="3" name="address"></textarea>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#region').change(function(){
                var id = $(this).val();
                $.ajax({
                    url : "<?php echo site_url('admin/vendor/get_province');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                        }
                        $('#province').html(html);
                    }
                });
                return false;
            });

            $('#province').trigger(function(){
                var id = $(this).val();
                $.ajax({
                    url : "<?php echo site_url('admin/vendor/get_city');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id+'>'+data[i].name+'</option>';
                        }
                        $('#city').html(html);
                    }
                });
                return false;
            });
        });
    </script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".js-example-basic-single").select2();
        });
    </script>
@endsection