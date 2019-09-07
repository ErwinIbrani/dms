@extends('layouts.app')
@section('page_title', 'Group Vendor')

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
                echo form_open('admin/groupvendor/update',$data);
                ?>
                <!-- .fieldset -->
                    <fieldset>
                        <legend>Group Vendor</legend>

                        @if(!empty(validation_errors()))
                            <div class="col-lg-12">
                                <div class="alert alert-warning alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong><?php echo validation_errors(); ?></strong>
                                </div>
                            </div>
                    @endif
                    <!-- .form-group -->
                        <div class="form-group">
                            <label for="tf1">Group Name</label>
                            <input type="hidden" class="form-control" name="id" value="<?= $model->id?>">
                            <input type="text" class="form-control" name="group_name" autocomplete="off" value="<?= $model->group_name ?>">
                        </div><!-- /.form-group -->
                        <div class="publisher-actions">
                            <!-- .publisher-tools -->
                            <div class="publisher-tools mr-auto">
                                <div class="btn btn-light btn-icon fileinput-button">
                                </div>
                            </div>
                            <!-- /.publisher-tools -->
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </fieldset>
                    <?php echo form_close();?>
                </div><!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection