<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
  </header>
  <div class="entry-summary">
    <?php echo mb_substr(get_the_excerpt(), 0, 150); ?>
  </div>
</article>
