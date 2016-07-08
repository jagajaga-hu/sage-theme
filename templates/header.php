<?php
	if(is_home()){
		echo "<header class=\"banner\">";
	} else{
		echo "<header class=\"banner header-size\">";
	}
?>
  <div class="site-icon">
  <a href="<?= home_url('/');?>" id="logo">
  <img src="<?php echo get_template_directory_uri(); ?>/icon.png" alt="" width="30" height="30">
  JagaJaga</a><h5 class="no-mobile">- 北大生応援メディア -</h5>

  <!-- ここから、ドロワーメニュー -->
  <div class="drawer drawer--top">
  <!-- ハンバーガーボタン -->
  <button type="button" class="drawer-toggle drawer-hamburger no-pc">
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
  <nav class="drawer-nav">
    <ul class="drawer-menu">
      <!-- ドロワーメニューの中身 -->
	  <?php if(is_home()==False){
		  echo '<li class="single-page-tab"><a href="<?= home_url('/'); ?>#tab0">ホーム</a></li>';
	  }
	  ?>
	  <?php
		  if(is_home()==False){
			  $args = array(
			      'hide_empty' => 1,
			  );
			  $categories = get_categories($args);
			  foreach($categories as $category){
				  if($category->cat_ID!=1){
					  echo '<li class="single-page-tab"><a href="'.home_url('/').'#tab'.$category->cat_ID.'">';
					  echo $category->name.'</a></li>';
				  }
			  }
		  }
	  ?>
      <li><a href="/about/">JagaJagaについて</a></li>
      <li><a href="/contact/">お問い合わせ／ライター募集</a></li>
	  <?php if(is_home()==False){
	  	  echo '<li><a href="'.home_url('/').'">JagaJagaトップへ</a></li>';
	  }?>
    </ul>
  </nav>
  </div>
  <!-- ここまで、ドロワーメニュー（これを動かすためのjQueryはfooter.phpで読み込む） -->
  <div class="formal-link">
    <a href="https://www.facebook.com/JagaJaga.HU/" target="_blank">
	  <img src="<?php echo get_template_directory_uri(); ?>/img/logo-facebook_185.png" alt="" width="30" height="30"></a>
    <a href="https://twitter.com/jagajagahu/" target="_blank">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo-twitter_185.png" alt="" width="30" height="30"></a>
  </div>
  <!-- ここから、デバイス幅が768px以上なら、右上にメニュー表示 -->
  <ul class="only-pc-top-right-menu">
    <li><a href="/about/"><h5>JagaJagaについて</h5></a></li>
    <li><a href="/contact/"><h5>お問い合わせ／ライター募集</h5></a></li>
	<li><a href="https://twitter.com/jagajagahu/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-twitter_185.png" alt="" width="30" height="30"></a></li>
	<li><a href="https://www.facebook.com/JagaJaga.HU/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-facebook_185.png" alt="" width="30" height="30"></a></li>
  </ul>
  <!-- ここまで、デバイス幅が768px以上なら、右上にメニュー表示 -->

  </div>

</header>
