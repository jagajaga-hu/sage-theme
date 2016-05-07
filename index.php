<?php get_template_part('templates/page', 'header'); ?>

<!--<div class="container">-->
<!-- Example row of columns -->
<div class="row">

    <!--******************** 最新記事のタイトル ********************-->
    <div class="col-sm-12">
      <?php query_posts('showposts=1'); ?>
      <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>
          <h1 class="top-tytle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>

    <!--******************** 最新1, 人気記事スライド, 最新2, 最新3 ********************-->
    <div class="col-sm-12">
      <!--********** 最新1, 人気記事スライド **********-->
      <div class="col-sm-8">
      	<!-- 最新記事 -->
        <div class="col-sm-12" style="background-color:#eeeeee;">
	        <?php query_posts('showposts=1'); ?>
	        <?php if(have_posts()): ?>
	          <?php while(have_posts()):the_post(); ?>
	            <a href="<?php the_permalink(); ?>">
	              <?php the_post_thumbnail(array(600)); ?>
	            </a><br>
	            <?php echo mb_substr(get_the_excerpt(), 0, 150); ?>
	            <a href="<?php the_permalink() ?>">»続きを読む</a>
	          <?php endwhile; ?>
	        <?php endif; ?>
        </div>
        <HR width="80%" noshade>
        <!-- 人気記事スライダー -->
        <div class="col-sm-12" style="background-color:#cccccc;">
        	<?php echo do_shortcode('[advps-slideshow optset="1"]'); ?>
        </div>
      </div>
      <!--********** 最新２、最新３ **********-->
      <div class="col-sm-4">
      	<!-- 最新２ -->
      	<div class="col-sm-12" style="background-color:#bbccdd;">
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
        <HR width="80%" noshade>
	      <!-- 最新３ -->
      	<div class="col-sm-12" style="background-color:#ddccbb;">
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
    </div>
    <HR width="80%" noshade>

    <div class="col-sm-12">
      <h3>Ambitious</h3>
			<?php echo do_shortcode('[advps-slideshow optset="4"]'); ?>
    </div>
    <div class="col-sm-12">
      <h3>World</h3>
			<?php echo do_shortcode('[advps-slideshow optset="5"]'); ?>
		</div>

</div>
<!--</div>-->