<!-- 人気記事スライダー -->
<?php //echo do_shortcode('[advps-slideshow optset="1"]'); ?>

<nav class="nav-horizontal" id="global-nav">
<div class="mask">
<ul class="nav list">
  <li class="active"><a href="#tab1" data-toggle="tab">ホーム</a></li>
  <li><a href="#tab2" data-toggle="tab">インタビュー</a></li>
  <li><a href="#tab3" data-toggle="tab">北海道</a></li>
  <li><a href="#tab4" data-toggle="tab">ネタ</a></li>
  <li><a href="#tab5" data-toggle="tab">サークル／部活</a></li>
  <li><a href="#tab6" data-toggle="tab">グルメ</a></li>
</ul>
</div>
</nav>

<div class="tab-content">
  <!-- ホームタブ{{{ -->
  <div class="tab-pane fade in active" id="tab1">
    <div id="tiles-container">
    	<div class="tl-page" data-tl-template="tempD">
            <?php $counter = 0; ?>
    	    <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="jstile row">
                    <article <?php post_class('top_page'); ?>>
    			    <a href="<?php the_permalink(); ?>">
                    <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium') ; ?>
                    <?php if($counter>4 || $counter==1): ?>
                        <div class="jstile-img col-xs-12">
                            <img src="<?php echo $postthumb[0]; ?>" alt="">
                    <?php else: ?>
                        <div class="jstile-img col-xs-8">
                            <img src="<?php echo $postthumb[0]; ?>" alt="">
                    <?php endif; ?>
                    </div>
                    <?php if($counter>4 || $counter==1): ?>
                        <div class="jstile-text col-xs-12">
                    <?php else: ?>
                        <div class="jstile-text col-xs-4">
                    <?php endif; ?>
    				<h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>»続きを読む
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
  <div class="tab-pane fade" id="tab2">
    <h2>インタビュー</h2>
        <p id="sample">デバイス幅に応じて文字の色が変わるサンプル。できた。</p>
        <?php
        $args = array( 'numberposts' => 'all','category' => 5, 'orderby' => 'desc');    
        $rand_posts = get_posts( $args );    
        foreach( $rand_posts as $post ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        <?php endforeach; ?>
  </div>
  <div class="tab-pane fade" id="tab3">
    ここはタブメニュー3
  </div>
  <div class="tab-pane fade" id="tab4">
    ここはタブメニュー4
  </div>
  <div class="tab-pane fade" id="tab5">
    ここはタブメニュー5
  </div>
  <div class="tab-pane fade" id="tab6">
    ここはタブメニュー6
  </div>
  <div class="tab-pane fade" id="tab7">
    ここはタブメニュー7
  </div>
  <div class="tab-pane fade" id="tab8">
    <h3>まいねーむいず</h3> <h1>JaJaga</h1>
  </div>
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
</script>


<script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/scripts.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/top_fixed_menu_script/script.js"></script>
