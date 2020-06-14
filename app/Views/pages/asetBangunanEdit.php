<style type="text/css">
#map {
  width: "100%";
  height: 300px;
}
</style>

<?php echo view('./partials/_subheader/subheader-v1.php'); ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <!--begin::Portlet-->
  <div class="kt-portlet">
    <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">Data Asset Bangunan</h3>
      </div>
    </div>

    <!--begin::Form-->
    <?= session()->getFlashdata('msg') ? $_SESSION['msg'] : ''; ?>
    <form action="<?= base_url('/aset-bangunan-edit-' . $bangunan['gedung_id']);?>" method="post" class="kt-form">
      <div class="kt-portlet__body">

        <div class="form-group">
          <label>ID Areal</label>
          <input type="text" class="form-control" name="id_areal_fix_old" placeholder="Enter id area" value="<?= $bangunan['id_areal_fix_old'];?>">
        </div>
        <div class="form-group">
          <label>Kode Lokasi</label>
          <input type="text" class="form-control" name="kode_lokasi" placeholder="Enter kode lokasi (x-xx-xx-xx)" value="<?= $bangunan['kode_lokasi'];?>">
        </div>
        <div class="form-group">
          <label for="dropdownUrutanGedung">Urutan Gedung</label>
          <select class="form-control" name="urut_gedung" id="dropdownUrutanGedung">
            <option value="<?= $bangunan['urut_gedung'];?>">Current: <?= $bangunan['urut_gedung']; ?></option>
            <option value="1">b</option>
            <option value="1">c</option>
            <option value="1">d</option>
            <option value="1">e</option>
          </select>
        </div>
        <div class="form-group">
          <label>Kode Gedung</label>
          <input type="text" class="form-control" name="kode_gedung" placeholder="Enter kode gedung (x-xx-xx-xx-x)" value="<?= $bangunan['kode_gedung'];?>">
        </div>
        <div class="form-group">
          <label>Nama Gedung</label>
          <input type="text" class="form-control" placeholder="Enter nama gedung" name="nama_gedung" value="<?= $bangunan['nama_gedung'];?>">
        </div>
        <div class="form-group">
          <label>Peruntukan</label>
          <input type="text" class="form-control" placeholder="Enter peruntukan" name="peruntukan" value="<?= $bangunan['peruntukan'];?>">
        </div>
        <div class="form-group">
          <label>Jumlah Lantai</label>
          <input type="number" class="form-control" value="<?= $bangunan['jumlah_lantai'];?>" name="jumlah_lantai">
        </div>
        <div class="form-group">
          <label>Luas Gedung</label>
          <input type="number" class="form-control" value="<?= $bangunan['luas_gedung'];?>" name="luas_gedung">
        </div>
        <div class="form-group">
          <label>NOP</label>
          <input type="text" class="form-control" placeholder="Enter NOP" name="nop" value="<?= $bangunan['nop'];?>">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <div>
              <label>Long</label>
              <input type="text" id="lng" class="form-control" readonly="yes" name="long" value="<?= $bangunan['long'];?>">
            </div>
            <div>
              <label>Lat</label>
              <input type="text" id="lat" class="form-control" readonly="yes" name="lat" value="<?= $bangunan['lat'];?>">
            </div>
          </div>
          <div class="form-group col-md-6">
            <div id="map"></div>
          </div>
        </div>
      </div>
      <div class="kt-portlet__foot">
        <div class="">
          <button type="submit" class="btn btn-primary">Update</button>

          <button type="reset" onclick="window.history.back();" class="btn btn-secondary">Cancel</button>
        </div>
      </div>
    </form>

    <!--end::Form-->
  </div>
</div>

<!-- end:: Content -->
