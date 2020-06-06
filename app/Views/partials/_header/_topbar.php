
<!-- begin:: Topbar -->
<div class="kt-header__topbar">

	<!--begin: Search -->
	<div class="kt-header__topbar-item kt-header__topbar-item--search dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
			<span class="kt-header__topbar-icon"><i class="flaticon2-search-1"></i></span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-lg">

			<?php echo view('partials/_topbar/dropdown/search-dropdown.php'); ?>
		</div>
	</div>

	<!--end: Search -->

	

	<!--begin: Quick Actions -->
	<div class="kt-header__topbar-item dropdown">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
			<span class="kt-header__topbar-icon"><i class="flaticon2-settings"></i></span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

			<?php echo view('partials/_topbar/dropdown/quick-actions-solid.php'); ?>
		</div>
	</div>

	<!--end: Quick Actions -->

	

	

	<!--begin: User -->
	<div class="kt-header__topbar-item kt-header__topbar-item--user">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
			<img alt="Pic" src="assets/media/users/300_21.jpg" />
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-md">

			<?php echo view('partials/_topbar/dropdown/user-light.php'); ?>
		</div>
	</div>

	<!--end: User -->
</div>

<!-- end:: Topbar -->