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

<!-- 最新1,2,3,4,5 -->
<div id="tiles-container">
	<div class="tl-page" data-tl-template="tempD">
	    <?php if(have_posts()): while(have_posts()): the_post(); ?>
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
	</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/scripts.js"></script>
