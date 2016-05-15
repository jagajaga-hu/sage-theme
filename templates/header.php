<header class="banner" style="margin-top: -22px">
  
  <div class="site-icon">
  <a href="/index.php" id="logo">
  <img src="<?php echo get_template_directory_uri(); ?>/icon.png" alt="" width="30" height="30">
  JagaJaga</a><h5 class="no-mobile">- 北大情報プラットフォーム -</h5>

  <!-- ここから、ドロワーメニュー -->
  <div class="drawer drawer--top">
  <!-- ハンバーガーボタン -->
  <button type="button" class="drawer-toggle drawer-hamburger">
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
  <nav class="drawer-nav">
    <ul class="drawer-menu">
      <!-- ドロワーメニューの中身 -->
      <li><a href="/wordpress/contact/">お問い合わせ</a></li>
      <li><a href="/wordpress/about/">JagaJagaについて</a></li>
    </ul>
  </nav>
  </div>
  <!-- ここまで、ドロワーメニュー（これを動かすためのjQueryはfooter.phpで読み込む） -->

  <!-- 検索ボックス -->
  <div class="search-box"><?php dynamic_sidebar('sidebar-search'); ?></div>
    
  </div>

</header>
