<!-- 人気記事スライダー -->
<?php //echo do_shortcode('[advps-slideshow optset="1"]'); ?>

<!-- 最新1,2,3,4,5 -->
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
<script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/scripts.js"></script>
