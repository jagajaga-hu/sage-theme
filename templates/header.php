<header class="banner">
  
  <!-- ここから、ドロワーメニュー -->
  <div class="drawer drawer--top" id="burger">
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
  
  <div id="site_icon"></div>
    <a href="/wordpress/" style="color: #ffffff;">
    <img src="http://52.11.116.50/wp-content/uploads/2016/05/cropped-icon.png" alt="" width="100" height="100">
    JagaJaga</a>
    <?php /* ?>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
          </nav>
    <?php **/ ?>
  </div>

</header>
