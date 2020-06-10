<?php echo view('./partials/_subheader/subheader-v1.php'); ?>
<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          Lahan
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
          <a href="<?= base_url('/aset-lahan-create');?>" class="btn btn-brand btn-bold btn-upper btn-font-sm">
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
      <div class="kt_datatable" id="data-lahan"></div>
      <!--end: Datatable -->
    </div>
  </div>
</div>

<!-- end:: Content -->


<script>
  "use strict";
// Class definition

var lahanDatatable = function () {
	// Private functions

	// basic demo
	var demo = function () {
    var dataSet = <?= json_encode($lahan) ?>;
		var datatable = $('#data-lahan').KTDatatable({
			// datasource definition
			data: {
				type: 'local',
				source: dataSet,
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
					field: 'kode_lokasi',
					title: 'Kode Lokasi',
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
				},
				{
					field: 'kota_nama',
					title: 'Kota',
				},
				{
					field: 'area_regional',
					title: 'Regional'
				},
				{
					field: 'Actions',
					title: 'Actions',
					sortable: false,
					width: 110,
					overflow: 'visible',
					autoHide: false,
					template: function(row) {
						return '\
            <a href="<?= base_url('aset-lahan-edit-') ?>'+row.lahan_id+'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="See details">\
							<i class="la la-eye"></i>\
						</a>\
						<a href="<?= base_url('aset-lahan-edit-') ?>'+row.lahan_id+'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="<?= base_url('aset-lahan-delete-') ?>'+row.lahan_id+'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
					},
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
</script>


<!--end::Page Scripts -->