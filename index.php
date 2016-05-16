<!-- 人気記事スライダー -->
<?php //echo do_shortcode('[advps-slideshow optset="1"]'); ?>

<div id="garally">
    <div id="garally-caption">
        北大生はもっと面白い
    </div>
</div>


<nav class="nav-horizontal" id="global-nav">
<div class="mask">
<ul class="nav list">
  <li class="active"><a href="#tab0" data-toggle="tab">ホーム</a></li>
<?php
    $args = array(
        'hide_empty' => 1,
    );
    $categories = get_categories($args);
    foreach($categories as $category){
        echo '<li><a href="#tab'.$category->cat_ID.'" data-toggle="tab">';
        echo $category->name.'</a></li>';
    }
?>
</ul>
</div>
</nav>

<div class="tab-content">
  <!-- ホームタブ{{{ -->
    <div class="tab-pane fade in active" id="tab0">
        <div id="tiles-container">
            <div class="tl-page" data-tl-template="tempD">
                <?php $counter = 0; ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="jstile row">
                    <article <?php post_class('top_page'); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large') ; ?>
                            <?php if($counter>4 || $counter==1): ?>
                                <div class="jstile-img col-xs-12">
                                    <img src="<?php echo $postthumb[0]; ?>" alt="">
                            <?php elseif($counter==0): ?>
                                <div class="col-xs-6 jstile-img">
                                    <img src="<?php echo $postthumb[0]; ?>" alt="">
                            <?php else: ?>
                            <div class="jstile-img col-xs-8">
                                <img src="<?php echo $postthumb[0]; ?>" alt="">
                            <?php endif; ?>
                            </div>
                            <?php if($counter>4 || $counter==1): ?>
                                <div class="jstile-text col-xs-12">
                            <?php elseif($counter==0): ?>
                                <div class="jstile-text col-sm-6">
                            <?php else: ?>
                                <div class="jstile-text col-xs-4">
                            <?php endif; ?>
                                <h2><?php the_title(); ?></h2>
                                <?php the_advanced_excerpt(); ?>
                            </div>
                        </a>
                    </article>
                </div>
            <?php $counter++; endwhile; endif; ?>
            <?php for($i = $counter; $i<25; $i++): ?>
                <div> Dummy! </div>
            <?php endfor; ?>
            </div>
        </div>
    </div>
    <!-- ホームタブ}}} -->
    
    <?php foreach($categories as $category): ?>
    <div class="tab-pane fade" id="tab<?php echo $category->cat_ID; ?>">
        <h2><?php echo $category->name; ?></h2>
    <?php $args = array(
        'category' => $category->cat_ID,
        'orderby' => 'date'
    );
    $category_posts = get_posts($args);
    foreach($category_posts as $post): setup_postdata($post);
    $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
    ?>
        <div class="article-list" data-url="<?php the_permalink(); ?>">
 
            <div class="article-list-left">
                <img src="<?php echo $postthumb[0]; ?>" alt="">
            </div>
            <div class="article-list-right">
                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>»続きを読む
            </div>
        </div> 
    <?php endforeach; ?>
    </div>
    <?php endforeach; ?>
</div>
<script>
$(function() {
        var w = $(window).width();
        var x = 800;
        if (w <= x) {
            $('#sample').css({
                color: 'red'
            });
        }
});
jQuery('.article-list').click(function() {
    location.href = jQuery(this).attr('data-url');
});
</script>


<script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/top_fixed_menu_script/script.js"></script>
