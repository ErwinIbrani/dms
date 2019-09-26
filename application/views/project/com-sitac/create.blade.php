@extends('layouts.app')
@section('page_title', 'COM SITAC')

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
                        'name' => 'form-com-sitac'
                    ];
             echo form_open_multipart('project/comsitac/store',$data);
            ?>
                    <!-- .fieldset -->
                    <fieldset>
                        <legend>COM SITAC</legend>

                    <div class="row">
                        <input type="hidden" name="project_id" value="<?= $id_project ?>">

                        <div class="col-lg-6">
                           <div class="form-group">
                            <label for="tf3">Upload File (xls)</label>
                            <div class="custom-file">
                                <input type="file" name="path" class="custom-file-input" id="tf3" required=""> <label class="custom-file-label" for="tf3">Choose file</label>
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