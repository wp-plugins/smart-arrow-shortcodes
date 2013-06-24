<?php
/*
Plugin Name: Smart Arrow Shortcodes
Plugin URI: http://wpblogexperts.com/plugins
Author: Ishan Sharma
Author URI: http://ishan.co
Description: Adds [arl] and [arr] shotcodes. They add left/right arrows to your posts.
Version: 1.1
License: GPLv2
*/

function smartarrowleft()
{
	return "&larr;";
}

function smartarrowright()
{
	return "&rarr;";
}

add_shortcode('arl', 'smartarrowleft');
add_shortcode('arr', 'smartarrowright');
?>