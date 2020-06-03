"use strict";
// Class definition

var sertifikatDatatable = function () {
	// Private functions

	// basic demo
	var demo = function () {

		var datatable = $('#data-sertifikat').KTDatatable({
			// datasource definition
			data: {
				type: 'local',
				source: 'https://keenthemes.com/keen/tools/preview/api/datatables/datasource/employee.json',
				pageSize: 10,
			},

			// layout definition
			layout: {
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: false // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#generalSearch')
			},
			autoColumns: true,

			// columns definition
			columns: [
				{
					field: 'id',
					title: '#',
					sortable: false,
					type: 'number',
					selector: {class: 'kt-checkbox--solid'},
					textAlign: 'center',
				},
				{
					field: 'id_areal',
					title: 'ID Areal',
				},
				{
					field: 'no_sertifikat',
					title: 'No. Sertifikat',
				},
				{
					field: 'lokasi_aset',
					title: 'Lokasi Asset',
				},
				{
					field: 'provinsi',
					title: 'Provinsi',
					autoHide: false,
				},
				{
					field: 'kotamadya',
					title: 'Kotamadya',
				},
				{
					field: 'kecamatan',
					title: 'Kecamatan'
				},
				{
					field: 'kelurahan',
					title: 'Kelurahan',
				},
				{
					field: 'div_regional',
					title: 'Divisi Reg'
				}
			],
		});

    $('#kt_form_status').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'status');
    });

    $('#kt_form_type').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'type');
    });

    $('#kt_form_status,#kt_form_type').selectpicker();

	};

	return {
		// public functions
		init: function () {
			demo();
		}
	};
}();

jQuery(document).ready(function () {
	sertifikatDatatable.init();
});