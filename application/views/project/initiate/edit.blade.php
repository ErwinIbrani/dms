@extends('layouts.app')
@section('page_title', 'Initiate')

@section('content')
    <div class="page-inner">
        <div style="text-align: right"><?=  $breadcrumb ?></div>
        <br/>
        <div class="page-section">
            <div id="base-style" class="card">
                <!-- .card-body -->
                <div class="card-body">
                    <!-- .form -->
                <?php
                $data  = [
                    'name' => 'initiate'
                ];
                echo form_open('project/Initiate/update',$data);
                ?>
                <!-- .fieldset -->
                    <fieldset>
                        <legend>Initiate</legend>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="tf1">Project Name</label>
                                    <input type="hidden" value="{{ $model->id }}" name="id" />
                                    <select name="project_id" id="state" class="custom-select select2" required>
                                        <option value="" selected="selected">Select Project Name</option>
                                        <?php
                                        foreach ($projects as $project) {
                                            echo "<option value='$project->id'";
                                            echo (int)$model->project_id === (int)$project->id ? 'selected': '';
                                            echo ">$project->wbs_id </option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label  for="selDefault">PIC Project</label>
                                    <select name="pic_id" id="state" class="custom-select select2" required>
                                        <option value="" selected="selected">Select PIC IBS</option>
                                        <?php
                                        foreach ($users_pic as $user_pic) {
                                            echo "<option value='$user_pic->id'";
                                            echo (int)$model->pic_id === (int)$user_pic->id ? 'selected': '';
                                            echo ">$user_pic->email </option>";
                                        }
                                        ?>
                                    </select>

                                </div>
                            </div>

                            <hr style="border-top: 1px dashed #8c8b8b;background-color: #f0f0f0;width: 100%;">

                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="tf1">User Approval/Review/Submit</label>
                                                    <select name="approval_id" id="statess" class="custom-select select2"  required="">
                                                        <option value="" selected="selected">Select Approval User IBS</option>
                                                        <?php
                                                        foreach ($users_pic as $user_pic) {
                                                            echo "<option value='$user_pic->id'";
                                                            echo (int)$model->approval_id === (int)$user_pic->id ? 'selected': '';
                                                            echo ">$user_pic->email </option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="tf1">Document Approval/Review/Submit</label>
                                                    <select name="document_setting_id" id="statess" class="custom-select select2" required="">
                                                        <option value="" selected="selected">Select Document </option>
                                                        <?php
                                                        $ci =& get_instance();
                                                        $ci->load->model('Group_Model');
                                                       // $name = $ci->Group_Model->findIn($document_setting->group_id)->result();

                                                        $document_setting = [];
                                                        foreach ($document_settings as $document_setting) {
                                                            echo "<option value='$document_setting->id'";
                                                            echo (int)$model->document_setting_id === (int)$document_setting->id ? 'selected': '';
                                                            echo ">$document_setting->document_name /  $document_setting->document_type </option>";
                                                        }

                                                        ?>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <label for="tf1">Layer</label>
                                                    <select  name="layer" class="custom-select select2"  required="">
                                                        <option value="" selected="selected">Layer</option>
                                                        <?php
                                                        if ($model->layer == 1)
                                                            echo "<option value='1' selected> 1 </option>";
                                                        else echo "<option value='1'> 1 </option>";

                                                        if ($model->layer == 2)
                                                            echo "<option value='2' selected> 2 </option>";
                                                        else echo "<option value='2'> 2 </option>";

                                                        if ($model->layer == 3)
                                                            echo "<option value='3' selected> 3 </option>";
                                                        else echo "<option value='3'> 3 </option>";
                                                       ?>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="publisher-actions">
                            <!-- .publisher-tools -->
                            <div class="publisher-tools mr-auto">
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
@section('footer')
@endsection