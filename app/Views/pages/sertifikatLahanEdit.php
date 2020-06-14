<?php echo view('./partials/_subheader/subheader-v1.php'); ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <!--begin::Portlet-->
  <div class="kt-portlet">
    <div class="kt-portlet__head">
      <div class="kt-portlet__head-label">
        <h3 class="kt-portlet__head-title">Data Sertifikat</h3>
      </div>
    </div>

    <!--begin::Form-->
    <?= session()->getFlashdata('msg') ? $_SESSION['msg'] : ''; ?>
    <form class="kt-form" action="/sertifikat-lahan-edit-<?= $sertifikat['sertifikat_id']; ?>" method="post" enctype="multipart/form-data">
      <div class="kt-portlet__body">
        <div class="form-group">
          <label>ID Areal</label>
          <input type="text" class="form-control" placeholder="Enter id areal" name="id_areal" value="<?= $sertifikat['id_areal'];?>">
        </div>
        <div class="form-group">
          <label>No Sertifikat</label>
          <input type="text" class="form-control" placeholder="Enter no sertifikat" name="no_sertifikat" value="<?= $sertifikat['no_sertifikat'];?>">
        </div>
        <div class="form-group">
          <label>Lokasi Aset</label>
          <textarea class="form-control" id="lokasiAsetTextarea" name="lokasi_aset" rows="3"><?= $sertifikat['lokasi_aset'];?></textarea>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Provinsi</label>
            <input type="text" class="form-control" name="provinsi" placeholder="Enter provinsi" value="<?= $sertifikat['provinsi'];?>">
          </div>
          <div class="form-group col-md-6">
            <label>Kodya</label>
            <input type="text" class="form-control" placeholder="Enter nama kodya" name="kodya" value="<?= $sertifikat['kodya'];?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Kecamatan</label>
            <input type="text" class="form-control" placeholder="Enter nama kecamatan" name="kecamatan" value="<?= $sertifikat['kecamatan'];?>">
          </div>
          <div class="form-group col-md-6">
            <label>Kelurahan</label>
            <input type="text" class="form-control" placeholder="Enter nama kelurahan" name="kelurahan" value="<?= $sertifikat['kelurahan'];?>">
          </div>
        </div>
        <div class="form-group">
          <label for="dropdownDivisiRegional">Divisi Regional</label>
          <select class="form-control" id="dropdownDivisiRegional" name="divisi_regional">
            <option value="<?= $sertifikat['no_sertifikat'];?>">Current: <?= $sertifikat['divisi_regional'];?></option>
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
          <label>WITEL</label>
          <input type="text" class="form-control" placeholder="Enter WITEL" name="witel" value="<?= $sertifikat['witel'];?>">
        </div>
        <div class="form-group">
          <label>Luas</label>
          <input type="number" class="form-control" placeholder="enter luas" name="luas" value="<?= $sertifikat['luas'];?>">
        </div>
        <div class="form-group">
          <label>SK HAK</label>
          <input type="text" class="form-control" placeholder="Enter SK HAK" name="sk_hak" value="<?= $sertifikat['sk_hak'];?>">
        </div>
        <div class="form-group">
          <label>Jenis Sertifikat</label>
          <input type="text" class="form-control" placeholder="Enter jenis sertifikat" name="jenis" value="<?= $sertifikat['jenis'];?>">
        </div>
        <div class="form-group">
          <label for="dateAkhir">Akhir</label>
          <input class="form-control" type="date" id="dateAkhir" name="akhir" value="<?= $sertifikat['akhir']; ?>">
        </div>
        <div class="form-group">
          <label for="dropdownStatusHGB">Status HGB</label>
          <select class="form-control" id="dropdownStatusHGB" name="status_hgb">
            <option value="<?= $sertifikat['status_hgb']; ?>">Current: <?= $sertifikat['status_hgb'];?></option>
            <option value="Active">Active</option>
            <option value="Expired">Expired</option>
          </select>
        </div>
        <div class="form-group">
          <label>Loker</label>
          <input type="number" class="form-control" name="loker" value="<?= $sertifikat['loker']; ?>">
        </div>
        <div class="form-group">
          <label>Bundel</label>
          <input type="text" class="form-control" placeholder="Enter bundel" name="bundel" value="<?= $sertifikat['bundel']; ?>">
        </div>
        <div class="form-group">
          <label>Halaman</label>
          <input type="text" class="form-control" placeholder="Enter halaman" name="halaman" value="<?= $sertifikat['halaman']; ?>">
        </div>
        <div class="form-group">
          <label for="dropdownStatusPenyimpanan">Status Penyimpanan</label>
          <select class="form-control" id="dropdownStatusPenyimpanan" name="status_penyimpanan">
            <option value="<?= $sertifikat['status_penyimpanan']; ?>">Current: <?= $sertifikat['status_penyimpanan'];?></option>
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
          <button type="submit" class="btn btn-primary">Update</button>

          <button type="reset" onclick="window.history.back();" class="btn btn-secondary">Cancel</button>
        </div>
      </div>
    </form>

    <!--end::Form-->
  </div>
</div>

<!-- end:: Content -->