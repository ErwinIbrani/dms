<div class="modal modal-alert fade" id="uploadBak" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="userGroupFromLabel" aria-hidden="true">
	<!-- .modal-dialog -->
	<div class="modal-dialog" role="document">
		<!-- .modal-content -->
		<div class="modal-content">
			<!-- .modal-header -->
			<div class="modal-header">
				<h5 id="userGroupFromLabel" class="modal-title">
					KOM CME </h5>
			</div><!-- /.modal-header -->
			<!-- .modal-body -->
			<div class="modal-body">
				{!! form_open('/admin/usergroup/store', array('id'=> 'user-group-form')) !!}

				<div class="form-group">

					<div class="form-group">
						<label for="tf1">Upload BAK</label>
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="tf3">
							<label class="custom-file-label" for="tf3">Choose file</label>
						</div>
					</div>
				</div>
				{!! form_close() !!}
			</div><!-- /.modal-body -->
			<!-- .modal-footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info" onclick="document.getElementById('user-group-form').submit()">Submit</button>
			</div><!-- /.modal-footer -->
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
