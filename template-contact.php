<?php
/**
 * Template Name: Contact Template
 */
?>
<div class="col-lg-10 col-lg-offset-1">

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

</div>