
<!-- begin:: Page -->

<?php echo view('partials/_header/base-mobile.php'); ?>
<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">

			<?php echo view('partials/_header/base.php'); ?>
			<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
				<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
					<div class="kt-content kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<?php echo view('partials/_content/base.php'); ?>
					</div>
				</div>
			</div>

			<?php echo view('partials/_footer/base.php'); ?>
		</div>
	</div>
</div>

<!-- end:: Page -->

<!-- begin:: Topbar Offcanvas Panels -->

<?php echo view('partials/_topbar/offcanvas/quick-actions.php'); ?>

<!-- end:: Topbar Offcanvas Panels -->

<?php echo view('partials/_quick-panel.php'); ?>

<?php echo view('partials/_scrolltop.php'); ?>

<?php echo view('partials/_toolbar.php'); ?>

<?php echo view('partials/_demo-panel.php'); ?>