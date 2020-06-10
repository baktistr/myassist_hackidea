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
          Bangunan <span class="text-danger"><?= $bangunan['nama_gedung']; ?></span>
        </h3>
      </div>
    </div>
    <div class="kt-portlet__body">
      <div class="row">
        <div class="col-lg-6">
          <h3>Detail bangunan</h3>
          <dl>
            <dt>Nama bangunan</dt>
            <dd><?= $bangunan['nama_gedung']; ?> </dd>

            <dt>Kode Gedung</dt>
            <dd><?= $bangunan['kode_gedung']; ?> </dd>

            <dt>Peruntukan</dt>
            <dd><?= $bangunan['peruntukan']; ?> </dd>

            <dt>NOP</dt>
            <dd><?= $bangunan['nop']; ?> </dd>

            <dt>Luas Gedung</dt>
            <dd><?= $bangunan['luas_gedung']; ?> </dd>

            <dt>Jumlah Lantai</dt>
            <dd><?= $bangunan['jumlah_lantai']; ?> </dd>
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