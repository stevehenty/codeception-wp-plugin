<?php
/*
Plugin Name: Hello Codeception
Description: Displays some text at the bottom of each page.
Author: Steve Henty
Version: 1.0
Author URI: http://stevenhenty.com
*/


add_action( 'wp_footer', function() {
	echo 'Hello Codeception';
} );