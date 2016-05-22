<div class="aboutus">
    <div class="aboutus-img">
        <img src="http://jagajaga-hu.com/wp-content/uploads/2016/05/aboutus.png">
    </div>
    <?php the_content(); ?>
</div>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
<a href="<?php echo home_url(); ?>"><h3>トップへ</h3></a>
