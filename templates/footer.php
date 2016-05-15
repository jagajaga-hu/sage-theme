<!-- ここから、ドロワーメニューのjQuery -->
<script>
$(document).ready(function() {
  $(".drawer").drawer();
});
</script>
<!-- ここまで、ドロワーメニューのjQuery -->

<footer class="content-info">
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php dynamic_sidebar('sidebar-search'); ?>
			</div>
			<div class="col-sm-4">
				<?php if(is_user_logged_in()) : ?>
				<a href="<?php echo wp_logout_url(); ?>">ログアウト</a>
				<?php else : ?>
				<a href="<?php echo wp_login_url(); ?>">ログイン</a>
				<?php endif; ?>
			</div>
			<div class="col-sm-4">
				<?php dynamic_sidebar('sidebar-meta'); ?>
			</div>
		</div>
  </div>
</footer>
