これはtemplate-usetabtab.php
<?php
/**
 * Template Name: TabTab Template
 */
?>

<ul id="tab">
<li class="selected"><a href="#tab1">タブ1</a></li>
<li><a href="#tab2">タブ2</a></li>
<li><a href="#tab3">タブ3</a></li>
<li><a href="#tab4">タブ4</a></li>
<li><a href="#tab5">タブ5</a></li>
</ul>
<div id="detail">
<div id="tab1" class="tabbox">
<p>タブ1のコンテンツ。</p>
<!-- #tab1 --></div>
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
