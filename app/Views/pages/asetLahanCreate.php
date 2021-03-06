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
    <form class="kt-form" action="<?= base_url('/aset-lahan-create');?>" method="post">
      <div class="kt-portlet__body">

        <div class="form-group">
          <label>ID Areal</label>
          <input type="text" class="form-control" name="id_areal_fix_old" placeholder="Masukkan id areal">

        </div>
        <div class="form-group">
          <label>Nama Lahan</label>
          <input type="text" class="form-control" placeholder="Masukkan nama lahan" name="nama_lahan" required>
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <textarea class="form-control" id="alamatTextArea" rows="3" name="alamat"></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Provinsi</label>
            <select name="provinsi_nama" id="provinsi_nama" class="form-control">
              <option value="0">-PILIH-</option>
              <?php foreach ($provinsi as $key => $value) { ?>
              <option value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Kota</label>
            <select name="kota_nama" id="kota_nama" class="form-control">
              <option value="0">-PILIH-</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Kecamatan</label>
            <select name="kecamatan_nama" id="kecamatan_nama" class="form-control">
              <option value="0">-PILIH-</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Desa</label>
            <select name="desa_nama" id="desa_nama" class="form-control">
              <option value="0">-PILIH-</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Luas Tanah</label>
          <input type="number" class="form-control" value="1000" name="luas_tanah">
        </div>
        <div class="form-group">
          <label>Luas Gedung</label>
          <input type="number" class="form-control" value="1000" name="luas_gedung">
        </div>
        <div class="form-group">
          <label>Penggunaan</label>
          <input type="text" class="form-control" placeholder="Masukkan penggunaan" name="penggunaan">

        </div>
        <div class="form-group">
          <label for="dropdownSertifikat">Sertifikat</label>
          <select class="form-control" id="dropdownSertifikat" name="sertifikat">
            <option value="ADA SERTIFIKAT">ADA SERTIFIKAT</option>
            <option value="TIDAK ADA SERTIFIKAT">TIDAK ADA SERTIFIKAT</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dropdownTakos">Takos</label>
          <select class="form-control" id="dropdownTakos" name="takos_t_f">
            <option value="TRUE">TRUE</option>
            <option value="FALSE">FALSE</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dropdownPenyimpananSertifikat">Penyimpanan Sertifikat</label>
          <select class="form-control" id="dropdownPenyimpananSertifikat" name="penyimpanan_sertifikat">
            <option value="TERSIMPAN">TERSIMPAN</option>
            <option value="TIDAK TERSIMPAN">TIDAK TERSIMPAN</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dropdownAreaRegional">Area Regional</label>
          <select class="form-control" id="dropdownAreaRegional" name="area_regional">
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
          <input type="number" class="form-control" id="kode_prov" placeholder="Pilih provinsi terlebih dahulu" readonly
            name="kode_prov">
        </div>
        <div class="form-group">
          <label>Witel</label>
          <select name="witel" id="witel" class="form-control">
            <?php foreach($witel as $key => $value) { ?>
            <option value="<?= $value['witel'];?>"> <?= $value['witel']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Kode WITEL</label>
          <input type="number" class="form-control" id="kode_witel" readonly name="kode_witel"
            placeholder="Pilih witel terlebih dahulu">
        </div>
        <div class="form-group">
          <label>Kode Lokasi</label>
          <input type="text" class="form-control" placeholder="Masukkan kode lokasi (x-xx-xx-xx)" name="kode_lokasi">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <div>
              <label>Long</label>
              <input type="text" id="lng" class="form-control" readonly="yes" name="long" required>
            </div>
            <div>
              <label>Lat</label>
              <input type="text" id="lat" class="form-control" readonly="yes" name="lat" required>
            </div>
            <small class="text-danger">Atur lat/long melalui peta.</small>
          </div>
          <div class="form-group col-md-6">
            <div id="mapLahan"></div>
          </div>
        </div>
      </div>
      <div class="kt-portlet__foot">
        <div class="kt-form__actions">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" onclick="window.history.back();" class="btn btn-secondary">Cancel</button>
        </div>
      </div>
    </form>

    <!--end::Form-->
  </div>
</div>

<!-- end:: Content -->

<script>
$(document).ready(function() {
  $("#witel").change(function() {
    var id = $(this).val();
    $.ajax({
      url: "<?= base_url();?>/get-witel-" + id,
      method: "GET",
      async: false,
      dataType: 'json',
      success: (data) => {
        var kd_witel = ''
        for (var i = 0; i < data.length; i++) {
          kd_witel = data[i].id_witel;
        }
        $('#kode_witel').val(kd_witel);
      },
      error: (error) => {
        console.error(error)
      }
    })
  })

  $("#provinsi_nama").change(function() {
    var id = $(this).val();
    $.ajax({
      url: "<?= base_url();?>/get-kota-" + id,
      method: "GET",
      async: false,
      dataType: 'json',
      success: (data) => {
        var html = '';
        var kd_provinsi = ''
        for (var i = 0; i < data.length; i++) {
          kd_provinsi = data[i].province_id
          html += `<option value="${data[i].id}">${data[i].name}</option>`;
        }
        $('#kode_prov').val(kd_provinsi)
        $('#kota_nama').html(html);
      },
      error: (error) => {
        console.error(error)
      }
    })
  })

  $("#kota_nama").change(function() {
    var id = $(this).val();
    $.ajax({
      url: "<?= base_url();?>/get-kecamatan-" + id,
      method: "GET",
      async: false,
      dataType: 'json',
      success: (data) => {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += `<option value="${data[i].id}">${data[i].name}</option>`;
        }
        $('#kecamatan_nama').html(html);
      },
      error: (error) => {
        console.error(error)
      }
    })
  })

  $("#kecamatan_nama").change(function() {
    var id = $(this).val();
    $.ajax({
      url: "<?= base_url();?>/get-desa-" + id,
      method: "GET",
      async: false,
      dataType: 'json',
      success: (data) => {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += `<option value="${data[i].id}">${data[i].name}</option>`;
        }
        $('#desa_nama').html(html);
      },
      error: (error) => {
        console.error(error)
      }
    })
  })
});
</script>

<script type="text/javascript" src="<?php base_url() ?>assets/js/pages/components/maps/mapLahan.js"></script>