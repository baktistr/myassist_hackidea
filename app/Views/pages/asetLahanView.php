<style type="text/css">
#map {
  width: "100%";
  height: 300px;
}

dt::after {
  content: ":";
}
</style>

<?php echo view('./partials/_subheader/subheader-v1.php'); ?>
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">
          Lahan <span class="text-danger"><?= $lahan['nama_lahan']; ?></span>
        </h3>
      </div>
    </div>
    <div class="kt-portlet__body">
      <div class="row">
        <div class="col-lg-6">
          <dl>
            <dt>Nama Lahan</dt>
            <dd><?= $lahan['nama_lahan']; ?> </dd>

            <dt>Alamat</dt>
            <dd><?= $lahan['alamat']; ?> </dd>

            <dt>Nama Provinsi</dt>
            <dd><?= $lahan['provinsi_nama']; ?> </dd>

            <dt>Kota</dt>
            <dd><?= $lahan['kota_nama']; ?> </dd>

            <dt>Kecamatan</dt>
            <dd><?= $lahan['kecamatan_nama']; ?> </dd>

            <dt>Desa</dt>
            <dd><?= $lahan['desa_nama']; ?> </dd>
          </dl>
        </div>
        <div class="col-lg-6">
          <h3>Lokasi</h3>
          <div id="map"></div>
        </div>
      </div>
    </div>
  </div>

  <?php if(isset($sertifikat)) { ?>
  <div class="kt-portlet">
    <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">Detail Sertifikat</h3>
      </div>
    </div>
    <div class="kt-portlet__body">

      <!--begin::Section-->
      <div class="kt-section">
        <div class="kt-section__info">
          Data dibawah merupakan data sertifikat dari informasi lahan di atas:
        </div>
        <div class="kt-section__content">
          <table class="table table-head-noborder" id="table-sertifikat">
            <thead>
              <tr>
                <th>No</th>
                <th>No. Sertifikat</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kota/Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kelurahan</th>
                <th>Luas</th>
                <th>Hak</th>
                <th>Akhir</th>
                <th>Penyimpanan</th>
                <th>Download</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($sertifikat as $key => $value) { ?>
              <tr>
                <td></td>
                <td><?= $value['no_sertifikat']; ?></td>
                <td><?= $value['lokasi_aset']; ?></td>
                <td><?= $value['provinsi']; ?></td>
                <td><?= $value['kodya'];?></td>
                <td><?= $value['kecamatan'];?></td>
                <td><?= $value['kelurahan'];?></td>
                <td><?= $value['luas'];?></td>
                <td><?= $value['sk_hak'];?></td>
                <td><?= $value['akhir'];?></td>
                <td><?= $value['status_penyimpanan'];?></td>
                <td><?= $value['status_penyimpanan'];?></td>
              </tr>
              <?php };?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!--end::Form-->
  </div>
  <?php } ?>
</div>

<script>
$(document).ready(function() {
  var t = $('#table-sertifikat').DataTable({
    "columnDefs": [{
      "searchable": false,
      "orderable": false,
      "targets": 0
    }],
    "order": [
      [1, 'asc']
    ]
  });

  t.on('order.dt search.dt', function() {
    t.column(0, {
      search: 'applied',
      order: 'applied'
    }).nodes().each(function(cell, i) {
      cell.innerHTML = i + 1;
    });
  }).draw();
});
</script>