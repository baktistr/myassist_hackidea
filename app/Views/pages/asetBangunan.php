<?php echo view('./partials/_subheader/subheader-v1.php'); ?>
<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          Bangunan
        </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
        <div class="kt-portlet__head-wrapper">
          <div class="dropdown dropdown-inline">
            <button type="button" class="btn btn-secondary btn-bold btn-upper btn-font-sm dropdown-toggle"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="la la-download"></i> Export
            </button>
            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">

              <!--begin::Nav-->
              <ul class="kt-nav">
                <li class="kt-nav__head">
                  Choose Export Type
                  <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right"
                    title="Click to learn more..."></i>
                </li>
                <li class="kt-nav__separator"></li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-drop"></i>
                    <span class="kt-nav__link-text">xlsx</span>
                  </a>
                </li>
                <li class="kt-nav__item">
                  <a href="#" class="kt-nav__link">
                    <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                    <span class="kt-nav__link-text">pdf</span>
                  </a>
                </li>
              </ul>

              <!--end::Nav-->
            </div>
          </div>
          &nbsp;
          <a href="<?= base_url('/aset-bangunan-create');?>" class="btn btn-brand btn-bold btn-upper btn-font-sm">
            <i class="la la-plus"></i>
            New Record
          </a>
        </div>
      </div>
    </div>
    <div class="kt-portlet__body">

      <!--begin: Search Form -->
      <div class="kt-form kt-fork--label-right kt-margin-t-20 kt-margin-b-10">
        <div class="row align-items-center">
          <div class="col-xl-8 order-2 order-xl-1">
            <div class="row align-items-center">
              <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                <div class="kt-input-icon kt-input-icon--left">
                  <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                  <span class="kt-input-icon__icon kt-input-icon__icon--left">
                    <span><i class="la la-search"></i></span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
            <a href="#" class="btn btn-default kt-hidden">
              <i class="la la-cart-plus"></i> New Order
            </a>
            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
          </div>
        </div>
      </div>

      <!--end: Search Form -->
    </div>
    <div class="kt-portlet__body kt-portlet__body--fit">

      <!--begin: Datatable -->
      <div class="kt_datatable" id="data-bangunan"></div>

      <!--end: Datatable -->
    </div>
  </div>
</div>

<script>
"use strict";
// Class definition

var bangunanDatatable = function () {
	// Private functions

	// basic demo
	var demo = function () {
		var dataSet = JSON.parse('<?= json_encode($bangunan) ?>');
		var datatableBangunan = $('#data-bangunan').KTDatatable({
			// datasource definition
			data: {
				type: 'local',
				source: dataSet,
				// type: 'remote',
				// source: {
				// 	read: {
				// 		url: 'http://localhost:8080/api/bangunan',
				// 		method: 'GET',
				// 		map: function (raw) {
				// 			console.log(raw)
				// 			// sample data mapping
				// 			var dataSet = raw;
				// 			if (typeof raw.data !== 'undefined') {
				// 				dataSet = raw.data;
				// 			}
				// 			return dataSet;
				// 		},
				// 	},
				// },
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
						<a href="<?= base_url('aset-bangunan-edit-') ?>" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
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

</script>
<!-- end:: Content -->