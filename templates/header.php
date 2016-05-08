<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><h2 class="logo" style="margin-top: 5px; margin-bottom: 5px;"><?php bloginfo('name'); ?></h2><!--メニューは固定ページとかカテゴリーとか作ってから（http://bazubu.com/how-to-setup-wp-navigation-menu-23785.html）--></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
