"use strict";
// Class definition

var lahanDatatable = function () {
	// Private functions

	// basic demo
	var demo = function () {

		var datatable = $('#data-lahan').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost:8080/api/lahan',
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
					field: 'lahan_id',
					title: '#',
					textAlign: 'center',
				},
				{
					field: 'id_areal_fix_old',
					title: 'ID Areal',
				},
				{
					field: 'nama_lahan',
					title: 'Nama Lahan',
				},
				{
					field: 'alamat',
					title: 'Alamat',
				},
				{
					field: 'provinsi_nama',
					title: 'Provinsi',
					autoHide: false,
				},
				{
					field: 'kota_nama',
					title: 'Kota',
				},
				{
					field: 'kecamatan_nama',
					title: 'Kecamatan'
				},
				{
					field: 'desa_nama',
					title: 'Desa',
				},
				{
					field: 'penggunaan',
					title: 'Penggunaan'
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
	lahanDatatable.init();
});
