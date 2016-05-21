<!-- 人気記事スライダー -->
<?php //echo do_shortcode('[advps-slideshow optset="1"]'); ?>


<?php echo do_shortcode("[huge_it_slider id='1']"); ?>

<nav class="nav-horizontal" id="global-nav">
<div class="mask">
<ul class="nav list">
  <li><a href="#tab0" data-toggle="tab">ホーム</a></li>
<?php
    $args = array(
        'hide_empty' => 1,
    );
    $categories = get_categories($args);
    foreach($categories as $category){
        if($category->cat_ID!=1){
            echo '<li><a href="#tab'.$category->cat_ID.'" data-toggle="tab">';
            echo $category->name.'</a></li>';
        }
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
                            <?php if(wp_is_mobile()):
                                $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homethumbnail_mobile');
                            else:
                                $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'homethumbnail');
                            endif; ?>
                            <?php if($counter>4 || $counter==1): ?>
                                <div class="col-xs-3 col-sm-12 jstile-img">
                                    <img src="<?php echo $postthumb[0]; ?>" alt="">
                            <?php else: ?>
                                <div class="col-xs-3 col-sm-6 jstile-img">
                                    <img src="<?php echo $postthumb[0]; ?>" alt="">
                            <?php endif; ?>
                            </div>
                            <?php if($counter>4 || $counter==1): ?>
                                <div class="col-xs-9 col-sm-12 jstile-text">
                            <?php else: ?>
                                <div class="col-xs-9 col-sm-6 jstile-text">
                            <?php endif; ?>
                                <h2><?php the_title(); ?></h2>
                                <?php /**the_advanced_excerpt();**/ ?>
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
                <span class="date"><?php the_time('Y.m.d'); ?></span>
                <span class="tag tag_awarded">殿堂入り</span>
                <span class="tag tag_hot">HOT</span>
                <h1><?php the_title(); ?></h1>
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
