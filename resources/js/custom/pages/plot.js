$(document).ready(function () {

	// print defect depending on type

	$('#plot-street').on('change', e => {

		// const elem = $('#home-list');
		// const street_id = $(e.target).val();

		// elem.empty();

		// $.ajax({
		// 	url: '/data/addresses',
		// 	method: 'GET',
		// }).done(addresses => {

		// 	let temp = addresses.sort((a, b) => a.num_home - b.num_home);

		// 	for (let address of temp) {
		// 		if (address.street_id == street_id) {
		// 			elem.append(`
		// 				<div class="bk-form__num col-sm-auto custom-control custom-checkbox mb-2">
		// 					<input 
		// 						id="${address.id}"
		// 						name="addresses[]"
		// 						type="checkbox"
		// 						class="custom-control-input" 
		// 						value="${address.num_home}"
		// 					>
		// 					<label 
		// 						class="custom-control-label bk-form__label--checkbox" 
		// 						for="${address.id}"
		// 					>
		// 						д.${address.num_home}
		// 					</label>
		// 				</div>
		// 			`);
		// 		}
		// 	}
		// })
	});
});
