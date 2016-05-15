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
				<?php dynamic_sidebar('sidebar-category'); ?>
			</div>
			<div class="col-sm-4">
				<?php dynamic_sidebar('sidebar-meta'); ?>
			</div>
		</div>
  </div>
</footer>

<!--/*<?php echo do_shortcode('[maxmegamenu location=footer_navigation]'); ?>*/-->
