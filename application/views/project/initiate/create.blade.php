@extends('layouts.app')
@section('page_title', 'Initiate')

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
                echo form_open('admin/city/store',$data);
                ?>
				<!-- .fieldset -->
					<fieldset>
						<legend>Initiate</legend>

						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="tf1">Project Name</label>
									<select name="project_id" id="state" class="custom-select select2" required>
										<option value="" selected="selected">Select Project Name</option>
                                        <?php
                                        foreach ($projects as $project) {
                                            echo"<option value='$project->id'> $project->wbs_id / $project->iro_number </option>";
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
                                            echo"<option value='$user_pic->id'> $user_pic->email </option>";
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
													<select name="addmore[][approval_id]" id="statess" class="custom-select select2"  required="">
														<option value="" selected="selected">Select Approval User IBS</option>
                                                        <?php
                                                        foreach ($users_pic as $user_pic) {
                                                            echo"<option value='$user_pic->id'> $user_pic->email </option>";
                                                        }
                                                        ?>
													</select>
												</div>
											</td>
											<td>
												<div class="form-group">
													<label for="tf1">Document Approval/Review/Submit</label>
													<select name="addmore[][document_setting_id]" id="statess" class="custom-select select2" required="">
														<option value="" selected="selected">Select Document </option>
                                                        <?php
                                                        foreach ($document_settings as $role) {
                                                            echo"<option value='$role->id'> $role->document_name  / $role->group_name /  $role->document_type</option>";
                                                        }
                                                        ?>
													</select>
												</div>
											</td>

											<td>
												<div class="form-group">
													<label for="tf1">Layer</label>
													<select  name="addmore[][layer]" class="custom-select select2"  required="">
														<option value="" selected="selected">Layer</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
													</select>
												</div>
											</td>
											<td>
												<div class="form-group">
													<button type="button" name="add" id="add" class="btn btn-success">Add</button>
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
            var i=1;

            $('#add').click(function(){
                i++;
                $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added">' +
                    '<td>' + '<select name="addmore[][user_ibs_id]" id="statess" class="custom-select select2" required>\n' +
                    '<option value="" selected="selected">Select User IBS</option> <?php foreach ($userIbs as $user) {
                        echo"<option value=".$user->id."> $user->email </option>";
                    }
                        ?></select></td>' +
                    '<td><select name="addmore[][role_ibs_id]" id="statess" class="custom-select select2" required>\n' +
                    '<option value="" selected="selected">Select Role</option><?php foreach ($ibs_users as $role) {
                        echo "<option value=".$role->id."> $role->name </option>";
                    }
                        ?></select></td>' +
                    '<td><select  name="addmore[][layer]" class="custom-select select2" required>\n' +
                    '    <option value="" selected="selected">Layer</option>\n' +
                    '    <option value="1">1</option>\n' +
                    '    <option value="2">2</option>\n' +
                    '    <option value="3">3</option>\n' +
                    '    <option value="4">4</option>\n' +
                    '    <option value="5">5</option>\n' +
                    '    <option value="6">6</option>\n' +
                    '    </select></td>' +
                    '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $(document).on('click', '.btn_remove', function(){
                var button_id = $(this).attr("id");
                $('#row'+button_id+'').remove();
            });

        });
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2/select2.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/select2/select2.min.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            $(".select2").select2();
        });
	</script>
@endsection