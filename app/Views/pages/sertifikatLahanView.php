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
          Sertifikat <span class="text-danger"><?= $sertifikat['nama_sertifikat']; ?></span>
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