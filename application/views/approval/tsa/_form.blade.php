<?php
$data  = [
    'name' => 'candidate-form'
];
echo form_open('approval/approval/store', $data);
?>
<input type="hidden" value="{{ $status->project_id }}" name="project_id">
<input type="hidden" value="{{ $status->document_id }}" name="document_id">
<div class="form-group">
    <label for="lbl3"><span class="badge badge-secondary"><em>Select Type</em></span></label>
    <select class="custom-select d-block w-100" id="state" name="status_approval" required>
        <option value=""> Choose... </option>
        <option value="Accept"> Accept </option>
        <option value="Reject"> Reject </option>
    </select>
</div>

<div class="form-group">
    <label for="lbl3"><span class="badge badge-secondary"><em>Comments</em></span></label>
    <textarea class="form-control" id="lbl3" rows="3" name="note" required></textarea>
</div>

<div class="form-actions">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>
<?php echo form_close();?>