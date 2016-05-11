<?php
/**
 * Template Name: JsTile Template
 */
?>

  <!-- ここからjsTileスクリプト（js, css）と、jquery.easing（本当はこれらはmanifest.jsonに書きたい）-->
  <script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/assets/scripts/jquery.easing.1.3.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/tl-style.css" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/style.css" rel="stylesheet" />
  <script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/jstiles.js"></script>
  <!-- ここまでjsTileスクリプト... -->

<!-- 人気記事スライダー -->
<?php echo do_shortcode('[advps-slideshow optset="1"]'); ?>

<ul class="nav nav-tabs">
  <li class="active"><a href="#tab1" data-toggle="tab">ホーム</a></li>
  <li><a href="#tab2" data-toggle="tab">インタビュー</a></li>
  <li><a href="#tab3" data-toggle="tab">北海道</a></li>
  <li><a href="#tab4" data-toggle="tab">ネタ</a></li>
  <li><a href="#tab5" data-toggle="tab">サークル／部活</a></li>
  <li><a href="#tab6" data-toggle="tab">グルメ</a></li>
  <li><a href="#tab7" data-toggle="tab">お問い合わせ</a></li>
  <li><a href="#tab8" data-toggle="tab">JagaJagaとは</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane fade in active" id="tab1">
    <!-- HOMEタブ -->
    <div id="tiles-container">
    	<div class="tl-page" data-tl-template="tempD">
            <?php $counter = 0; ?>
    	    <?php if(have_posts()): while(have_posts()): the_post(); $counter++; ?>
                <div>
                    <article <?php post_class('top_page'); ?>>
    			    <a href="<?php the_permalink(); ?>">
                    <?php if( has_post_thumbnail() ): ?>
                        <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium') ; ?>
                        <img src="<?php echo $postthumb[0]; ?>" alt="">
                    <?php endif; ?>
    				<h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>»続きを読む
                    </a>
                    </article>
                </div>
            <?php endwhile; endif; ?>
            <?php for($i = $counter; $i<25; $i++): ?>
                <div> Dummy! </div>
            <?php endfor; ?>
    	</div>
    </div>
  </div>
  <div class="tab-pane fade" id="tab2">
    ここはタブメニュー2
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

<script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/scripts.js"></script>
