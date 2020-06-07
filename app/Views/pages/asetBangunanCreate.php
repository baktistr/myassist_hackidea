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
		<?= \Config\Services::validation()->listErrors(); ?>
		<form action="<?= base_url('/aset-bangunan-create');?>" method="post" class="kt-form">
      <div class="kt-portlet__body">

        <div class="form-group">
          <label>ID Areal</label>
          <input type="text" class="form-control" name="id_areal" placeholder="Enter id area">

        </div>
        <div class="form-group">
          <label>Kode Lokasi</label>
          <input type="text" class="form-control" name="kode_lokasi" placeholder="Enter kode lokasi (x-xx-xx-xx)">
        </div>
        <div class="form-group">
          <label for="exampleSelect1">Urutan Gedung</label>
          <select class="form-control" name="urutan_gedung" id="exampleSelect1">
            <option>a</option>
            <option value="1">b</option>
            <option value="1">c</option>
            <option value="1">d</option>
            <option value="1">e</option>
          </select>
        </div>
        <div class="form-group">
          <label>Kode Gedung</label>
          <input type="text" class="form-control" name="kode_gedung" placeholder="Enter kode gedung (x-xx-xx-xx-x)">
        </div>
        <div class="form-group">
          <label>Nama Gedung</label>
          <input type="text" class="form-control" placeholder="Enter nama gedung" name="nama_gedung">
        </div>
        <div class="form-group">
          <label>Peruntukan</label>
          <input type="text" class="form-control" placeholder="Enter peruntukan" name="peruntukan">
        </div>
        <div class="form-group">
          <label>Jumlah Lantai</label>
          <input type="number" class="form-control" value="1" name="jumlah_lantai">
        </div>
        <div class="form-group">
          <label>NOP</label>
          <input type="text" class="form-control" placeholder="Enter NOP" name="nop">
        </div>

      </div>
      <div class="kt-portlet__foot">
        <div class="">
          <button id="btn_submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Cancel</button>
        </div>
      </div>
    </form>

    <!--end::Form-->
  </div>
</div>

<!-- end:: Content -->

<script>

// $("#btn_submit").on("click", (e) => {
//   e.preventDefault();
//   let data = $("#submitBangunan").serialize();
//   console.log(data);
//   $.ajax({
//     url: '<?= base_url('/aset-bangunan-create');?>',
//     type: 'post',
//     dataType: 'json',
//     data: JSON.stringify(data),
//     success: (resp) => {
//       console.info(resp)
//     },
//     error: (err) => {
//       console.error(err)
//     }
//   })
// })
</script>