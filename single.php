<nav class="nav-horizontal single-page-nav" id="global-nav">
<div class="mask">
<ul class="nav list">
<li class="single-page-tab"><a href="<?= home_url('/'); ?>#tab0">ホーム</a></li>
<?php
    $args = array(
        'hide_empty' => 1,
    );
    $categories = get_categories($args);
    foreach($categories as $category){
        if( $category->cat_ID!=1 ){
            echo '<li class="single-page-tab"><a href="'.home_url('/').'#tab'.$category->cat_ID.'">';
            echo $category->name.'</a></li>';
        }
    }
?>
</ul>
</div>
</nav>

<div class="article-in-single-page">
<?php get_template_part('templates/content-single', get_post_type()); ?>
</div>

<!-- タブメニューが画面トップで固定されるようにするためのスクリプト -->
<script src="<?php echo get_template_directory_uri(); ?>/top_fixed_menu_script/script.js"></script>
