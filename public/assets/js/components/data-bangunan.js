"use strict";
// Class definition

var bangunanDatatable = function () {
	// Private functions

	// basic demo
	var demo = function () {

		var datatableBangunan = $('#data-bangunan').KTDatatable({
			// datasource definition
			data: {
				// type: 'local',
				// source: 'https://keenthemes.com/keen/tools/preview/api/datatables/datasource/employee.json',
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost:8080/api/bangunan',
						method: 'GET',
						map: function (raw) {
							console.log(raw)
							// sample data mapping
							var dataSet = raw;
							if (typeof raw.data !== 'undefined') {
								dataSet = raw.data;
							}
							return dataSet;
						},
					},
				},
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
					field: 'gedung_id',
					title: '#',
					textAlign: 'center',
				},
				{
					field: 'id_areal_fix_old',
					title: 'ID Areal',
				},
				{
					field: 'urut_gedung',
					title: 'Urut Gedung',
				},
				{
					field: 'kode_gedung',
					title: 'Kode Gedung',
				},
				{
					field: 'nama_gedung',
					title: 'Nama Gedung',
					autoHide: false,
				},
				{
					field: 'lat',
					title: 'Lat',
				},
				{
					field: 'long',
					title: 'Long'
				},
				{
					field: 'jumlah_lantai',
					title: 'Jumlah Lantai',
				},
				{
					field: 'nop',
					title: 'Nop'
				}
			],
		});

    $('#kt_form_status').on('change', function() {
      datatableBangunan.search($(this).val().toLowerCase(), 'status');
    });

    $('#kt_form_type').on('change', function() {
      datatableBangunan.search($(this).val().toLowerCase(), 'type');
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
	bangunanDatatable.init();
});
