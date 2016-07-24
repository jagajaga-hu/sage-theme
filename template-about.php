<?php
/**
 * Template Name: About page template
 */
?>

<?php
	$hotpost = hotpost(1);
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
