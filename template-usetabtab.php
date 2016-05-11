これはtemplate-usetabtab.php
<?php
/**
 * Template Name: TabTab Template
 */
?>

  <!-- ここからjsTileスクリプト（js, css）と、jquery.easing（本当はこれらはmanifest.jsonに書きたい）-->
  <script type="text/javascript"src="<?php echo get_template_directory_uri(); ?>/assets/scripts/jquery.easing.1.3.js"></script>
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/tl-style.css" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/style.css" rel="stylesheet" />
  <script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/jstiles.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/jsTileTemplate/scripts.js"></script>
  <!-- ここまでjsTileスクリプト... -->


<ul id="tab">
<li class="selected"><a href="#tab1">タブ1</a></li>
<li><a href="#tab2">タブ2</a></li>
<li><a href="#tab3">タブ3</a></li>
<li><a href="#tab4">タブ4</a></li>
<li><a href="#tab5">タブ5</a></li>
</ul>
<div id="detail">
<div id="tab1" class="tabbox">
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
        </div>
        <div><!-- 5 -->
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
        <div><!-- 6 -->
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
        <div><!-- 7 -->
            記事８
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
        <div><!-- 8 -->
            記事９
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
        <div><!-- 9 -->
            記事１０
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
        </div>
        <div><!-- 10 -->
            記事１１
            <?php query_posts('showposts=1&offset=10'); ?>
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
        <div>記事１２</div>
        <div>記事１３</div>
        <div>記事１４</div>
        <div>記事１５</div>
        <div>記事１６</div>
        <div>記事１７</div>
        <div>記事１８</div>
        <div>記事１９</div>
        <div>記事２０</div>
        <div>記事２１</div>
        <div>記事２２</div>
        <div>記事２３</div>
        <div>記事２４</div>
        <div>記事２５</div>
    </div>
</div>

</div>
<div id="tab2" class="tabbox">
<p>タブ2のコンテンツ。</p>
<!-- #tab2 --></div>
<div id="tab3" class="tabbox">
<p>タブ3のコンテンツ。</p>
<!-- #tab3 --></div>
<div id="tab4" class="tabbox">
<p>タブ4のコンテンツ。</p>
<!-- #tab4 --></div>
<div id="tab5" class="tabbox">
<p>タブ5のコンテンツ。</p>
<!-- #tab5 --></div>
<!-- #detail --></div>


<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
