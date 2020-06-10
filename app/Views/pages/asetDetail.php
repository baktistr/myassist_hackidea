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
<!-- begin:: Content -->
<div class="kt-container  kt-grid__item kt-grid__item--fluid">
  <div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
      <div class="kt-portlet__head-label">
        <h5 class="kt-section__title">
          Lahan <span class="text-danger"><?= $detail['nama_lahan']; ?> </span>
        </h5>
      </div>
    </div>
    <div class="kt-portlet__body">
      <div class="row">
        <div class="col-lg-6">
          <h5 class="kt-section__title">Detail Sertifikat</h5>
          <dl>
            <dt>ID Areal</dt>
            <dd><?= $detail['id_areal_fix_old']; ?> </dd>
            
            <dt>Lokasi Aset</dt>
            <dd><?= $detail['alamat']; ?> </dd>

            <dt>Provinsi</dt>
            <dd><?= $detail['provinsi_nama']; ?> </dd>

            <dt>Kodya/Kab</dt>
            <dd><?= $detail['kota_nama']; ?> </dd>

            <dt>Kecamatan</dt>
            <dd><?= $detail['kecamatan_nama']; ?> </dd>

            <dt>Kelurahan</dt>
            <dd><?= $detail['desa_nama']; ?> </dd>
          </dl>
        </div>
        <div class="col-lg-6">
          <h5 class="kt-section__title">Lokasi</h5>
          <div id="map"></div>
        </div>
      </div>
      <div class="kt-separator kt-separator--space-lg  kt-separator--border-solid"></div>
      <div class="row">
        <div class="col-lg-6">
          <h5 class="kt-section__title">Detail Sertifikat</h5>
          <dl>
            <dt>ID Areal</dt>
            <dd><?= $detail['id_areal_fix_old']; ?> </dd>
            
            <dt>Lokasi Aset</dt>
            <dd><?= $detail['alamat']; ?> </dd>

            <dt>Provinsi</dt>
            <dd><?= $detail['provinsi_nama']; ?> </dd>

            <dt>Kodya/Kab</dt>
            <dd><?= $detail['kota_nama']; ?> </dd>

            <dt>Kecamatan</dt>
            <dd><?= $detail['kecamatan_nama']; ?> </dd>

            <dt>Kelurahan</dt>
            <dd><?= $detail['desa_nama']; ?> </dd>
          </dl>
        </div>
        <div class="col-lg-6">
          <h5 class="kt-section__title">Lokasi</h5>
          <div id="map"></div>
        </div>
      </div>
    </div>
  </div>
</div>