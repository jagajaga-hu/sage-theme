<?php
/**
 * Template Name: Bootstrap Tab Template
 */
?>

  <!-- ここからjsTileスクリプト（js, css）と、jquery.easing（本当はこれらはmanifest.jsonに書きたい）-->
  <script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/assets/scripts/jquery.easing.1.3.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/tl-style.css" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/style.css" rel="stylesheet" />
  <script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/jstiles.js"></script>
  <!-- ここまでjsTileスクリプト... -->


<ul class="nav nav-tabs">
  <li class="active"><a href="#tab1" data-toggle="tab">Home</a></li>
  <li><a href="#tab2" data-toggle="tab">Profile</a></li>
  <li><a href="#tab3" data-toggle="tab">Messages</a></li>
  <li><a href="#tab4" data-toggle="tab">ネタ</a></li>
  <li><a href="#tab5" data-toggle="tab">インタビュー</a></li>
</ul>
 
<div class="tab-content">
  <div class="tab-pane fade in active" id="tab1">
  	<div id="tiles-container">
	<div class="tl-page" data-tl-template="tempD">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>
		</div>
		</div>
  </div>
  <div class="tab-pane fade" id="tab2">Tab2 Content</div>
  <div class="tab-pane fade" id="tab3">Tab3 Content</div>
  <div class="tab-pane fade" id="tab4">ネタ記事でいっぱい</div>
  <div class="tab-pane fade" id="tab5">インタビューのあらし</div>
</div>

