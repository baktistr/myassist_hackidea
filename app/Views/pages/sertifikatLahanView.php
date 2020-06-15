<style type="text/css">
#map {
  width: "100%";
  height: 300px;
}

;

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
          Sertifikat <span class="text-danger"><?= $sertifikat['no_sertifikat']; ?></span>
        </h3>
      </div>
    </div>
    <div class="kt-portlet__body">
      <div class="row">
        <div class="col-lg-6">
          <h3>Detail sertifikat</h3>
          <dl>
            <dt>No sertifikat</dt>
            <dd><?= $sertifikat['no_sertifikat']; ?> </dd>

            <dt>Lokasi Aset</dt>
            <dd><?= $sertifikat['lokasi_aset']; ?> </dd>

            <dt>Nama Provinsi</dt>
            <dd><?= $sertifikat['provinsi']; ?> </dd>

            <dt>Kodya</dt>
            <dd><?= $sertifikat['kodya']; ?> </dd>

            <dt>Kecamatan</dt>
            <dd><?= $sertifikat['kecamatan']; ?> </dd>

            <dt>Kelurahan</dt>
            <dd><?= $sertifikat['kelurahan']; ?> </dd>
          </dl>
        </div>
        <div class="col-lg-6">
          <h3>Lokasi</h3>
          <div id="map"></div>
        </div>
      </div>
      <div class="row">

      </div>
    </div>
  </div>
</div>

<?php if(isset($lahan)) { ?>
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
        <div class="col-lg-12">
          <table class="table table-head-noborder" id="table-lahan">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Lahan</th>
                <th>Alamat</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Lat</th>
                <th>Long</th>
                <th>Takos</th>
                <th>Luas Tanah</th>
                <th>Luas Gedung</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td><?= $lahan['nama_lahan']; ?></td>
                <td><?= $lahan['alamat']; ?></td>
                <td><?= $lahan['provinsi_nama']; ?></td>
                <td><?= $lahan['kota_nama']; ?></td>
                <td><?= $lahan['kecamatan_nama']; ?></td>
                <td><?= $lahan['desa_nama']; ?></td>
                <td><?= $lahan['lat']; ?></td>
                <td><?= $lahan['long']; ?></td>
                <td><?= $lahan['takos_t_f']; ?></td>
                <td><?= $lahan['luas_tanah']; ?></td>
                <td><?= $lahan['luas_gedung']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">

      </div>
    </div>
  </div>
</div>
<?php } ?>

<script>
$(document).ready(function() {
  var t = $('#table-lahan').DataTable({
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
