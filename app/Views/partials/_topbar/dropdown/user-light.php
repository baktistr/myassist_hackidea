<div class="kt-user-card-v4 kt-user-card-v4--skin-light kt-notification-item-padding-x">
	<div class="kt-user-card-v4__avatar">

		<!--use "kt-rounded" class for rounded avatar style-->
		<img class="kt-rounded-" alt="Pic" src="assets/media/users/300_25.jpg" />

		<!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
		<span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
	</div>
	<div class="kt-user-card-v4__name">
		<?= $_SESSION['nama']; ?>
		<small><?= $_SESSION['role']; ?></small>
	</div>
</div>
<ul class="kt-nav kt-margin-b-10">
	<li class="kt-nav__custom kt-space-between">
		<a href="<?= base_url('/logout');?>" class="btn btn-label-brand btn-upper btn-sm btn-bold">Sign Out</a>
	</li>
</ul>