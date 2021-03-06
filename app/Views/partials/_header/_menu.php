<!-- begin: Header Menu -->
<button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
  <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
    <div class="kt-menu__nav ">
      <div
        class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel <?= $subheader == 'Dashboard' ? 'kt-menu__item--here' : ''; ?>">
        <a href="<?= base_url('/dashboard');?>" class="kt-menu__link"><span
            class="kt-menu__link-text">Dashboard</span></i></a>
      </div>

      <div
        class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel <?= $subheader == 'Data Asset Lahan' ? 'kt-menu__item--here' : ''; ?>">
        <a href="<?= base_url('/aset-lahan');?>" class="kt-menu__link"><span class="kt-menu__link-text">Aset
            Lahan</span></a>
      </div>
      <div
        class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel <?= $subheader == 'Data Asset Bangunan' ? 'kt-menu__item--here' : ''; ?>">
        <a href="<?= base_url('/aset-bangunan');?>" class="kt-menu__link "><span class="kt-menu__link-text">Aset
            Bangunan</span></a>
      </div>
      <div
        class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel <?= $subheader == 'Data Sertifikat' ? 'kt-menu__item--here' : ''; ?>">
        <a href="<?= base_url('/sertifikat-lahan');?>" class="kt-menu__link "><span
            class="kt-menu__link-text">Sertifikat</span></a>
      </div>
      <?php if ($_SESSION['token']['role'] === 'admin') { ?>
      <div
        class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel <?= $subheader == 'User Control' ? 'kt-menu__item--here' : ''; ?>">
        <a href="<?= base_url('/user-control');?>" class="kt-menu__link "><span
            class="kt-menu__link-text">User Control</span></a>
      </div>
      <?php } ?>
      <!-- <div
        class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel <?= $subheader == 'User Control' ? 'kt-menu__item--here' : ''; ?>">
          <img src="<?php base_url() ?>assets/media/logos/brand-logo-crop.png" class="kt-header__brand-logo-default" style="height: 100%;"/>
      </div> -->
    </div>
  </div>
</div>

<!-- end: Header Menu -->