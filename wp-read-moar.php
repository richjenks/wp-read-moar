<?php

/*
Plugin name: Read Moar
Description: Use an extra MORE tag to make visitors click to see full content
Version: 0.0.1
Author: Rich Jenks
Author Uri: https://richjenks.com
*/

add_filter('the_content', function($content) {
	if (is_single()){
		$content = explode('<!--more-->', $content);
		$content = $content[0] . '<p id="read-moar-p"><a id="read-moar-a" href="#continue">Continue reading&hellip;</a></p><div id="continue" style="display: none;">' . $content[1] . '</div>';
	}
	return $content;
});

add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('read-moar', plugins_url('script.js', __FILE__), ['jquery'], null, true);
});