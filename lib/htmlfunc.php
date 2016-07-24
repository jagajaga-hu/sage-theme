<?php

function hot_post($posts_per_page) {
	$args = array(
		'tag_id' => '10',
		'orderby' => 'rand',
		'posts_per_page' => $posts_per_page
	);
	$query = new WP_Query( $args );
	echo '&nbsp;';
	echo '<div class="wpp-article">';
	echo '<span class="ranking">Hot!!</span>';
	echo '</div>';
	echo '<ul class="wpp-list">';
	while( $query->have_posts() ) {
		$query->the_post();
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'ranking');
		$url = get_permalink();
		$title = get_the_title();
		echo '<div class="wpp-article"><div class="wpp-article-img">';
		echo '<a href="'.$url.'" title="'.$title.'">';
		echo '<img src="'.$thumb[0].'" title="'.$title.'" alt="'.$title.'" class="wpp-thumbnail wpp_cached_themb wpp_featured">';
		echo '</a>';
		echo '</div><div class="wpp-article-text">';
		echo '<a href="'.$url.'" title="'.$title.'">';
		echo $title;
		echo '</a>';
		echo '</div></div>';
	}
	echo '</ul>';
	return $query;
}
