<!-- ここから、ドロワーメニューのjQuery -->
<script>
$(document).ready(function() {
  $(".drawer").drawer();
});
</script>
<!-- ここまで、ドロワーメニューのjQuery -->

<footer class="content-info custom-footer">
  <div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php dynamic_sidebar('sidebar-search'); ?>
			</div>
		</div>
  </div>
  <hr width="80%">
  <div class="copyright">	
	<a href="/admin">
	Copyright © 2016 JagaJaga. All rights reserved.
	</a>
  </div>
</footer>
