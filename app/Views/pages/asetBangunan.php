<?php echo view('./partials/_subheader/subheader-v1.php'); ?>
<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
<?= session()->getFlashdata('msg') ? $_SESSION['msg'] : ''; ?>
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          Bangunan
        </h3>
      </div>
      <div class="kt-portlet__head-toolbar">
        <div class="kt-portlet__head-wrapper">          
          <?php if ($_SESSION['token']['role'] != 'user') { ?>
          <a href="<?= base_url('/aset-bangunan-create');?>" class="btn btn-brand btn-bold btn-upper btn-font-sm">
            <i class="la la-plus"></i>
            New Record
          </a>
          <?php } ?>
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

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModal">Konfirmasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda yakin ingin menghapus data ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a id="urlDelete" class="btn btn-primary">Hapus</a>
          </div>
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
					title: 'No.',
					textAlign: 'center',
				},
				{
					field: 'id_areal_fix_old',
					title: 'ID Areal',
				},
				{
					field: 'kode_gedung',
					title: 'Kode Gedung',
				},
				{
					field: 'nama_gedung',
					title: 'Nama Gedung',
				},
				{
					field: 'peruntukan',
					title: 'Peruntukan',
				},
				{
					field: 'jumlah_lantai',
					title: 'Jumlah Lantai'
				},
				{
					field: 'luas_gedung',
					title: 'Luas Gedung',
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
						<a href="<?= base_url('aset-bangunan-view-') ?>'+row.gedung_id+'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="See Details">\
							<i class="la la-eye"></i>\
            </a>\
            <?php if ($_SESSION['token']['role'] === 'admin' || $_SESSION['token']['role'] === 'amc') { ?>
						<a href="<?= base_url('aset-bangunan-edit-') ?>'+row.gedung_id+'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
							<i class="la la-edit"></i>\
            </a>\
            <?php } ?>
            <?php if ($_SESSION['token']['role'] != 'user' && $_SESSION['token']['role'] != 'treg') { ?>
						<a id="'+row.gedung_id+'" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete"  data-toggle="modal" data-target="#deleteModal">\
							<i class="la la-trash"></i>\
						</a>\
            <?php } ?>
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
<script type="text/javascript">
  $(document).on("click", ".btn-clean", function () {    
    var clickedBtnID = $(this).attr('id');
    $("#urlDelete").attr("href", "<?= base_url('/aset-bangunan-delete-') ?>"+clickedBtnID);
   });
</script>
<!-- end:: Content -->