<?php

// declare function and run in add action
function test_enqueue() {
	wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/test.css', array(), '1.0.0', 'all');
}

// hook that gives connection wordpress execution process to a custom function
add_action('wp_enqueue_scripts', 'test_enqueue');