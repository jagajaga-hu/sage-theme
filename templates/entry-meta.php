<?php $category = get_the_category(); ?>
<span class="enrty-date"><?php echo get_post_time('Y.m.d'); ?></span>
<span class="entry-category"><?php echo $category[0]->cat_name; ?></span>
