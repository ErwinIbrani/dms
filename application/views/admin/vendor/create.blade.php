@extends('layouts.app')
@section('page_title', 'Vendor')

@section('content')
   <div class="page-inner">
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
             echo form_open('admin/vendor/store',$data);
            ?>
                    <!-- .fieldset -->
                    <fieldset>
                        <legend>Vendor</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                            <label for="tf1">Vendor Name</label>
                            <input type="text" class="form-control" name="name" autocomplete="off" required="">
                        </div><!-- /.form-group -->
                        <div class="publisher-actions">
                            <!-- .publisher-tools -->
                            <div class="publisher-tools mr-auto">
                                <div class="btn btn-light btn-icon fileinput-button">
                                </div>
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
