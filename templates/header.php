<header class="banner">
  
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
      <li><a href="/wordpress/about/">JagaJagaについて</a></li>
      <li><a href="/wordpress/contact/">お問い合わせ</a></li>
      <li><a href="/wordpress/recruit/">ライター募集</a></li>
    </ul>
  </nav>
  </div>
  <!-- ここまで、ドロワーメニュー（これを動かすためのjQueryはfooter.phpで読み込む） -->

  <!-- ここから、デバイス幅が768px以上なら、右上にメニュー表示 -->
  <ul class="only-pc-top-right-menu">
    <!-- ドロワーメニューの中身 -->
    <li><a href="/wordpress/recruit/">ライター募集</a></li>
    <li><a href="/wordpress/contact/">お問い合わせ</a></li>
    <li><a href="/wordpress/about/">JagaJagaについて</a></li>
  </ul>
  <!-- ここまで、デバイス幅が768px以上なら、右上にメニュー表示 -->

  </div>

</header>

