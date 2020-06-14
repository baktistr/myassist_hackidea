<?php echo view('./partials/_subheader/subheader-v1.php'); ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
  <!--begin::Portlet-->
  <div class="kt-portlet">
    <!--begin::Form-->
    <?= session()->getFlashdata('msg') ? $_SESSION['msg'] : ''; ?>
  <form class="kt-form" action="/user-control-edit-<?= $user['user_id'];?>" method="post" enctype="multipart/form-data">
      <div class="kt-portlet__body">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" class="form-control" placeholder="Masukkan nama" name="nama" value="<?= $user['nama'];?>" >
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Masukkan username" name="username" value="<?= $user['username']; ?>">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Masukkan email" name="email" value="<?= $user['email']; ?>">
        </div>
        <div class="form-group">
          <label>Role</label>
          <select name="role" id="role" class="form-control">
            <option value="<?= $user['role']; ?>">Current: <?= $user['role']; ?></option>
            <option value="1">Admin</option>
            <option value="2">AMC</option>
            <option value="3">Treg</option>
            <option value="4">User</option>
          </select>
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