<style type="text/css">
#mapLahan {
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
        <h3 class="kt-portlet__head-title">Data Asset Lahan</h3>
      </div>
    </div>

    <!--begin::Form-->
    <?= session()->getFlashdata('msg') ? $_SESSION['msg'] : ''; ?>
    <form class="kt-form" action="<?= base_url('/aset-lahan-edit-' . $lahan['lahan_id']);?>" method="post">
      <div class="kt-portlet__body">

        <div class="form-group">
          <label>ID Areal</label>
          <input type="text" class="form-control" name="id_areal_fix_old" placeholder="Enter id areal"
            value="<?= $lahan['id_areal_fix_old'];?>">

        </div>
        <div class="form-group">
          <label>Nama Lahan</label>
          <input type="text" class="form-control" placeholder="Enter nama lahan" name="nama_lahan"
            value="<?= $lahan['nama_lahan'];?>">
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea class="form-control" id="alamatTextArea" rows="3" name="alamat"><?= $lahan['alamat'];?></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Provinsi</label>
            <input type="text" class="form-control" placeholder="Enter provinsi" name="provinsi_nama"
              value="<?= $lahan['provinsi_nama'];?>">
          </div>
          <div class="form-group col-md-6">
            <label>Kota</label>
            <input type="text" class="form-control" placeholder="Enter nama kota" name="kota_nama"
              value="<?= $lahan['kota_nama'];?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Kecamatan</label>
            <input type="text" class="form-control" placeholder="Enter nama kecamatan" name="kecamatan_nama"
              value="<?= $lahan['kecamatan_nama'];?>">
          </div>
          <div class="form-group col-md-6">
            <label>Desa</label>
            <input type="text" class="form-control" placeholder="Enter nama desa" name="desa_nama"
              value="<?= $lahan['desa_nama'];?>">
          </div>
        </div>
        <div class="form-group">
          <label>Luas Tanah</label>
          <input type="number" class="form-control" name="luas_tanah" value="<?= $lahan['luas_tanah'];?>">
        </div>
        <div class="form-group">
          <label>Luas Gedung</label>
          <input type="number" class="form-control" name="luas_gedung" value="<?= $lahan['luas_gedung'];?>">
        </div>
        <div class="form-group">
          <label>Penggunaan</label>
          <input type="text" class="form-control" placeholder="Enter penggunaan" name="penggunaan"
            value="<?= $lahan['penggunaan'];?>">

        </div>
        <div class="form-group">
          <label for="dropdownSertifikat">Sertifikat</label>
          <select class="form-control" id="dropdownSertifikat" name="sertifikat">
            <option value="<?= $lahan['sertifikat'];?>">Current: <?= $lahan['sertifikat']; ?></option>
            <option value="ADA SERTIFIKAT">ADA SERTIFIKAT</option>
            <option value="TIDAK ADA SERTIFIKAT">TIDAK ADA SERTIFIKAT</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dropdownTakos">Takos</label>
          <select class="form-control" id="dropdownTakos" name="takos_t_f">
            <option value="<?= $lahan['takos_t_f'];?>">Current: <?= $lahan['takos_t_f']; ?></option>
            <option value="TRUE">TRUE</option>
            <option value="FALSE">FALSE</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dropdownPenyimpananSertifikat">Penyimpanan Sertifikat</label>
          <select class="form-control" id="dropdownPenyimpananSertifikat" name="penyimpanan_sertifikat">
            <option value="<?= $lahan['penyimpanan_sertifikat'];?>">Current: <?= $lahan['penyimpanan_sertifikat']; ?>
            </option>
            <option value="TERSIMPAN">TERSIMPAN</option>
            <option value="TIDAK TERSIMPAN">TIDAK TERSIMPAN</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dropdownAreaRegional">Area Regional</label>
          <select class="form-control" id="dropdownAreaRegional" name="area_regional">
            <option value="<?= $lahan['area_regional'];?>">Current: <?= $lahan['area_regional']; ?></option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
          </select>
        </div>
        <div class="form-group">
          <label>Kode Provinsi</label>
          <input type="number" class="form-control" value="<?= $lahan['kode_prov'];?>" name="kode_prov">
        </div>
        <div class="form-group">
          <label>WITEL</label>
          <input type="text" class="form-control" value="<?= $lahan['witel'];?>" placeholder="Enter penggunaan"
            name="witel">
        </div>
        <div class="form-group">
          <label>Kode WITEL</label>
          <input type="number" class="form-control" value="<?= $lahan['kode_witel'];?>" name="kode_witel">
        </div>
        <div class="form-group">
          <label>Kode Lokasi</label>
          <input type="text" class="form-control" placeholder="Enter kode lokasi (x-xx-xx-xx)" name="kode_lokasi"
            value="<?= $lahan['kode_lokasi'];?>">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <div>
              <label>Long</label>
              <input type="text" id="lng" class="form-control" readonly="yes" name="long" value="<?= $lahan['long'];?>">
            </div>
            <div>
              <label>Lat</label>
              <input type="text" id="lat" class="form-control" readonly="yes" name="lat" value="<?= $lahan['lat'];?>">
            </div>
            <small class="text-danger">Jika ingin mengganti nilai di atas, klik pada peta.</small>
          </div>
          <div class="form-group col-md-6">
            <div id="mapLahan"></div>
          </div>
        </div>
      </div>
      <div class="kt-portlet__foot">
        <div class="kt-form__actions">
          <button type="submit" class="btn btn-primary">Update</button>

          <button type="reset" onclick="window.history.back();" class="btn btn-secondary">Cancel</button>
        </div>
      </div>
    </form>

    <!--end::Form-->
  </div>
</div>

<!-- end:: Content -->

<script>
var currentLat = <?= $lahan['lat']; ?>;
var currentLong = <?= $lahan['long']; ?>;
</script>

<script type="text/javascript" src="<?php base_url() ?>assets/js/pages/components/maps/mapLahan.js"></script>