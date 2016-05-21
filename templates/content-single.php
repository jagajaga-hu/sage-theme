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
    <div class="profile-title">
        <span>WRITER PROFILE</span>
    </div>
    <div class="author-profile">
        <?php $authorID = get_the_author_id(); ?>
        <div class="author-avatar">
            <?php echo get_avatar($authorID, 96); ?>
        </div>
        <div class="author-discription">
            <p class="author-name">
                <?php echo get_the_author_meta('first_name')
                . get_the_author_meta('last_name'); ?>
            </p> 
            <p class="author-comment">
                <?php the_author_meta('description', get_the_author_id()); ?>
            </p> 
        </div>
<?php endwhile; ?>
