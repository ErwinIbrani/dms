<div class="modal modal-alert fade" id="uploadBap" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="userGroupFromLabel" aria-hidden="true">
	<!-- .modal-dialog -->
	<div class="modal-dialog" role="document">
		<!-- .modal-content -->
		<div class="modal-content">
			<!-- .modal-header -->
			<div class="modal-header">
				<h5 id="userGroupFromLabel" class="modal-title">
					Upload Document </h5>
			</div><!-- /.modal-header -->
			<!-- .modal-body -->
			<div class="modal-body">
				{!! form_open('/vendor/candidate/document/bap/uploadbap/'.$document->id, array('id'=> 'form-bap', 'enctype'=>"multipart/form-data")) !!}

				<div class="form-group">

					<div class="form-group">
						<label for="upload_bap">Upload BAP</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="upload_bap" name="upload_bap">
							<label class="custom-file-label" for="upload_bap">Choose file</label>
						</div>
					</div>
				</div>
				{!! form_close() !!}
			</div><!-- /.modal-body -->
			<!-- .modal-footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info" onclick="document.getElementById('form-bap').submit()">Submit</button>
			</div><!-- /.modal-footer -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
