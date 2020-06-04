$(document).ready(function () {

	$('.bk-btn-del').on('click', function (e) {

		var data_id = $(e.target).data('id');
		var data_tname = $(e.target).data('table-name');

		switch (data_tname) {

			// START namespace "info" 	
			case 'position':
				$('#bk-delete-form').attr('action', '/info/positions/' + data_id);
				break;

			case 'plot':
				$('#bk-delete-form').attr('action', '/info/plots/' + data_id);
				break;

			case 'address':
				$('#bk-delete-form').attr('action', '/info/addresses/' + data_id);
				break;

			case 'street':
				$('#bk-delete-form').attr('action', '/info/streets/' + data_id);
				break;

			case 'branch':
				$('#bk-delete-form').attr('action', '/info/branches/' + data_id);
				break;

			case 'organization':
				$('#bk-delete-form').attr('action', '/info/organizations/' + data_id);
				break;

			case 'defect':
				$('#bk-delete-form').attr('action', '/info/defects/' + data_id);
				break;
			// END namespace "info" 

			// START namespace "admin" 
			case 'user':
				$('#bk-delete-form').attr('action', '/admin/users/' + data_id);
				break;
			// END namespace "admin" 

			// START namespace "pages" 
			case 'worker':
				$('#bk-delete-form').attr('action', '/workers/' + data_id);
				break;

			case 'bid':
				$('#bk-delete-form').attr('action', '/bids/' + data_id);
				break;

			case 'log':
				$('#bk-delete-form').attr('action', '/bids/logs/' + data_id);
				break;

			case 'job':
				$('#bk-delete-form').attr('action', '/jobs/' + data_id);
				break;
				
			case 'promiser':
				$('#bk-delete-form').attr('action', '/promisers/' + data_id);
				break;

			case 'brief':
				$('#bk-delete-form').attr('action', '/briefs/' + data_id);
				break;
			// END namespace "pages" 

			default:
				break;
		}
		
	});
});
