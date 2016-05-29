<div class="aboutus">
    <div class="aboutus-img">
        <img src="<?php echo get_template_directory_uri(); ?>/aboutus.png">
    </div>
    <?php the_content(); ?>
</div>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
<a href="<?php echo home_url(); ?>"><h3 class="aboutus">トップへ</h3></a>
