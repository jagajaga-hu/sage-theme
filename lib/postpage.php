<?php

namespace Roots\Sage\PostPage;


function next_func($atts, $content = null){
	/*return "<div class=\"next-page\">次へ：「" . $content . "」</div>";*/
	$next_page_link = wp_link_pages(array(
		'before' => '<div class="nextpage">',
		'after' => '</div>',
		'next_or_number' => 'next',
		'nextpagelink' => __($content),
		'echo' => 0
	));
	return $next_page_link;
}
add_shortcode('next', 'Roots\Sage\PostPage\next_func');
