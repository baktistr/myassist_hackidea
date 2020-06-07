"use strict";
// Class definition

var sertifikatDatatable = function () {
	// Private functions

	// basic demo
	var demo = function () {

		var datatable = $('#data-sertifikat').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'http://localhost:8080/api/sertifikat',
						method: 'GET',
						map: function (raw) {
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
					field: 'sertifikat_id',
					title: '#',
					type: 'number',
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
					field: 'kodya',
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
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 110,
					overflow: 'visible',
					autoHide: false,
					template: function() {
						return '\
						<div class="dropdown">\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
                                <i class="la la-cog"></i>\
                            </a>\
						  	<div class="dropdown-menu dropdown-menu-right">\
						    	<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
						  	</div>\
						</div>\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
					},
				}
			],
		});

    $('#kt_form_provinsi').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'provinsi');
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
