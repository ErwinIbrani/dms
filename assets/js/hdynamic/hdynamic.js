$(document).ready(function () {
	let i = 1;
	let limit = 3;
	let childLength = 0;
	let confirmationText = 'Are you sure want to delete this item?';
	let elementRemoveBtn = '<span class="btn mt-2 btn-subtle-danger" id="dynamic-delete-action">Delete</span>';

	$('#dynamic-add-button').on('click', function () {
		i++;
		childLength = $('#child-node').children().length;

		if (childLength < limit) {
			$('#parent-node').clone()
				.attr('id', 'child-node-' + i)
				.find("input:text").val("").end()
				.appendTo('#child-node')
				.find('#dynamic-action').append(elementRemoveBtn)
				.find('#dynamic-delete-action')
				.attr('data-ref', 'child-node-'+i);
		}
	});

	$(document).on('click', '#dynamic-delete-action' ,function () {
		event.preventDefault();
		let ref = $('#dynamic-delete-action').data('ref');
		let hasConfirm = confirm(confirmationText);

		if(hasConfirm) {
			$('#child-node').find('#'+ref).remove();
		}
	});
});
