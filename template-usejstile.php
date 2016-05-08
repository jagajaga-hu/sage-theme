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
		<div><!-- 0 -->
			<?php query_posts('showposts=1'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(400)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div><!-- 1 -->
			<?php query_posts('showposts=1&offset=1'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div><!-- 2 -->
			<?php query_posts('showposts=1&offset=2'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div><!-- 3 -->
			<?php query_posts('showposts=1&offset=3'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div><!-- 4 -->
			<?php query_posts('showposts=1&offset=4'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div><!--/*
		<div>
			<?php query_posts('showposts=1&offset=5'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div>
			<?php query_posts('showposts=1&offset=6'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div>
			<?php query_posts('showposts=1&offset=7'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
			</div>
		<div>
			<?php query_posts('showposts=1&offset=8'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div>
			<?php query_posts('showposts=1&offset=9'); ?>
			<?php if(have_posts()): ?>
			  <?php while(have_posts()):the_post(); ?>
				<a href="<?php the_permalink(); ?>">
				  <?php the_post_thumbnail(array(150)); ?>
				</a>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<?php echo mb_substr(get_the_excerpt(), 0, 100); ?>
				<a href="<?php the_permalink() ?>">»続きを読む</a>
			  <?php endwhile; ?>
			<?php endif; ?>
		</div>*/-->
	</div>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/scripts.js"></script>