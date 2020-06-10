<style type="text/css">
#map {
  width: "100%";
  height: 300px;
};
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
          <h3>Detail Lahan</h3>
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
      <div class="row">

      </div>
    </div>
  </div>
</div>