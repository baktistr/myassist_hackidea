<?php echo view('./partials/_subheader/subheader-v1.php'); ?>
<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
  <?= session()->getFlashdata('msg') ? $_SESSION['msg'] : ''; ?>
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          User Control
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
          <a href="<?= base_url('/user-control-create');?>" class="btn btn-brand btn-bold btn-upper btn-font-sm">
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
      <div class="kt_datatable" id="data-user"></div>
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
            <button type="button" class="btn btn-primary">Hapus</button>
          </div>
        </div>
      </div>
    </div>

<script>

var bangunanDatatable = function() {
  // Private functions

  // basic demo
  var demo = function() {
    var dataSet = JSON.parse('<?= json_encode($user) ?>');
    var datatableBangunan = $('#data-user').KTDatatable({
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
      columns: [{
          field: 'user_id',
          title: '#',
          textAlign: 'center',
        },
        {
          field: 'nama',
          title: 'Nama',
        },
        {
          field: 'username',
          title: 'Username',
        },
        {
          field: 'role',
          title: 'Role',
        },
        {
          field: 'email',
          title: 'Email',
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
						<a href="<?= base_url('user-control-edit-') ?>' + row.user_id + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="<?= base_url('user-control-delete-') ?>' + row.user_id +'" id="btnHapus" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete"  data-toggle="modal" data-target="#deleteModal">\
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
    init: function() {
      demo();
    }
  };
}();

jQuery(document).ready(function() {
  bangunanDatatable.init();
});
</script>
<!-- end:: Content -->