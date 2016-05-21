<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <?php get_template_part('templates/entry-meta'); ?>
        <h2 class="entry-title"><?php the_title(); ?></h2>
        <?php if(get_query_var('page')==0):
        $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large'); ?>
        <div class="entry-eyecatch row">
            <img class="col-xs-12" src="<?php echo $postthumb[0]; ?>" alt="">
        </div>
        <?php endif; ?>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        
        <?php wp_link_pages(array(
            'before' => '<div class="page-navigation"><ul><li>',
            'separetor' => '</li><li>',
            'after' => '</li></ul></div>',
            'pagelink' => '<div class="nav-wrap"><span>%</span></div>'
        )); ?>

    </article>
<?php endwhile; ?>
