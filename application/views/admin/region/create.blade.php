@extends('layouts.app')
@section('page_title', 'Region')

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
             echo form_open('admin/region/store',$data);
            ?>
                    <!-- .fieldset -->
                    <fieldset>
                        <legend>Region</legend>

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
                            <label for="tf1">Name</label>
                            <input type="text" class="form-control" name="name" autocomplete="off">
                        </div>
                       </div>
                        <div class="col-lg-6">
                           <div class="form-group">
                               <label for="tf1">Code</label>
                               <input type="text" class="form-control" name="code" autocomplete="off">
                           </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tf1">Char</label>
                                <input type="text" class="form-control" name="char" autocomplete="off">
                            </div>
                        </div>
                     </div>

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