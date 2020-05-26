$(document).ready(function () {

	$('.bk-crud__btn--del').on('click', function (e) {

		var data_id = $(e.target).data('id');
		var data_tname = $(e.target).data('table-name');
		
		// console.log(data_tname);

		// field for checking 
		// $('#bk-delete-input').val(data_id);

		switch (data_tname) {
			case 'type':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/info/types/' + data_id);
				break;
			
			case 'position':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/info/positions/' + data_id);
				break;

			case 'street':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/info/streets/' + data_id);
				break;

			case 'branch':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/info/branches/' + data_id);
				break;

			case 'organization':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/info/organizations/' + data_id);
				break;

			case 'role':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/admin/roles/' + data_id);
				break;

			case 'user':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/admin/users/' + data_id);
				break;

			case 'worker':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/workers/' + data_id);
				break;
				
			case 'job':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/jobs/' + data_id);
				break;
				
			case 'promiser':
				// set action to tag <form> 
				$('#bk-delete-form').attr('action', '/promisers/' + data_id);
				break;

			default:
				break;
		}
		
	});
});
