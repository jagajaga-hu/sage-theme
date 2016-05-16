<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h2 class="entry-title"><?php the_title(); ?></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><ul>' . __('', 'sage'),
                           'after' => '</ul></nav>',
                           'link_before' => '<li>',
                           'link_after' => '</li>',
                           'next_or_number' => 'next',
                           'nextpagelink' => __('次へ︎'),
                           'previouspagelink' => __('前へ')]); ?>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><ul>' . __('', 'sage'),
                           'after' => '</ul></nav>',
                           'link_before' => '<li>',
                           'link_after' => '</li>']); ?>
    </footer>
  </article>
<?php endwhile; ?>
