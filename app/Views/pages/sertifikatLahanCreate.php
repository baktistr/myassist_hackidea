<?php echo view('./partials/_subheader/subheader-v1.php'); ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <!--begin::Portlet-->
  <div class="kt-portlet">

    <!--begin::Form-->
    <?= session()->getFlashdata('msg') ? $_SESSION['msg'] : ''; ?>
    <form class="kt-form" action="/sertifikat-lahan-create" method="post" enctype="multipart/form-data">
      <div class="kt-portlet__body">
        <div class="form-group">
          <label>ID Areal</label>
          <input type="text" class="form-control" placeholder="Enter id areal" name="id_areal">
        </div>
        <div class="form-group">
          <label>No Sertifikat</label>
          <input type="text" class="form-control" placeholder="Enter no sertifikat" name="no_sertifikat">
        </div>
        <div class="form-group">
          <label>Lokasi Aset</label>
          <textarea class="form-control" id="lokasiAsetTextarea" name="lokasi_aset" rows="3"></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Provinsi</label>
            <select name="provinsi" id="provinsi_nama" class="form-control">
              <option value="0">-PILIH-</option>
              <?php foreach ($provinsi as $key => $value) { ?>
              <option value="<?= $value['id']; ?>"><?= $value['name']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Kodya</label>
            <select name="kodya" id="kota_nama" class="form-control">
              <option value="0">-PILIH-</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Kecamatan</label>
            <select name="kecamatan" id="kecamatan_nama" class="form-control">
              <option value="0">-PILIH-</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label>Kelurahan</label>
            <select name="kelurahan" id="desa_nama" class="form-control">
              <option value="0">-PILIH-</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="dropdownDivisiRegional">Divisi Regional</label>
          <select class="form-control" id="dropdownDivisiRegional" name="divisi_regional">
            <option value="DIVISI REGIONAL 1">DIVISI REGIONAL 1</option>
            <option value="DIVISI REGIONAL 2">DIVISI REGIONAL 2</option>
            <option value="DIVISI REGIONAL 3">DIVISI REGIONAL 3</option>
            <option value="DIVISI REGIONAL 4">DIVISI REGIONAL 4</option>
            <option value="DIVISI REGIONAL 5">DIVISI REGIONAL 5</option>
            <option value="DIVISI REGIONAL 6">DIVISI REGIONAL 6</option>
            <option value="DIVISI REGIONAL 7">DIVISI REGIONAL 7</option>
          </select>
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
          <label>Luas</label>
          <input type="number" class="form-control" value="1000" placeholder="enter luas" name="luas">
        </div>
        <div class="form-group">
          <label>SK HAK</label>
          <input type="text" class="form-control" placeholder="Enter SK HAK" name="sk_hak">
        </div>
        <div class="form-group">
          <label>Jenis Sertifikat</label>
          <input type="text" class="form-control" placeholder="Enter jenis sertifikat" name="jenis">
        </div>
        <div class="form-group">
          <label for="dateAkhir">Akhir</label>
          <input class="form-control" type="date" value="2037-01-18" id="dateAkhir" name="akhir">
        </div>
        <div class="form-group">
          <label for="dropdownStatusHGB">Status HGB</label>
          <select class="form-control" id="dropdownStatusHGB" name="status_hgb">
            <option value="Active">Active</option>
            <option value="Expired">Expired</option>
          </select>
        </div>
        <div class="form-group">
          <label>Loker</label>
          <input type="number" class="form-control" value="2144" name="loker">
        </div>
        <div class="form-group">
          <label>Bundel</label>
          <input type="text" class="form-control" placeholder="Enter bundel" name="bundel">
        </div>
        <div class="form-group">
          <label>Halaman</label>
          <input type="text" class="form-control" placeholder="Enter halaman" name="halaman">
        </div>
        <div class="form-group">
          <label for="dropdownStatusPenyimpanan">Status Penyimpanan</label>
          <select class="form-control" id="dropdownStatusPenyimpanan" name="status_penyimpanan">
            <option value="Ada">Ada</option>
            <option value="Tidak Ada">Tidak Ada</option>
          </select>
        </div>
        <div class="form-group">
          <label>Scan Sertifikat</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="scanSertifikat" name="scan_sertifikat">
            <label class="custom-file-label" for="scanSertifikat">Pilih berkas sertifikat</label>
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
  $("#provinsi_nama").change(function() {
    var id = $(this).val();
    $.ajax({
      url: "<?= base_url();?>/get-kota-" + id,
      method: "GET",
      async: false,
      dataType: 'json',
      success: (data) => {
        var html = '';
        for (var i = 0; i < data.length; i++) {
          html += `<option value="${data[i].id}">${data[i].name}</option>`;
        }
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
