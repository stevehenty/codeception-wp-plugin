<?php

global $wp_rewrite;
$wp_rewrite->set_permalink_structure( '/%postname%/' );
$wp_rewrite->flush_rules();

/**
 * Creates a new post with the given slug and content.
 *
 * @param string $name The post name
 *
 * @param string $content
 *
 * @return int|string|WP_Error
 */
function create_post( $name, $content ) {
	$post = array(
		'post_title'   => $name,
		'post_content' => $content,
		'post_excerpt' => $name,
		'post_status'  => 'publish',
		'post_type'    => 'post',
	);

	$post_id = wp_insert_post( $post );

	return $post_id ? $post_id : '';
}

create_post( 'hello', 'Welcome' );
create_post( 'bye', 'Goodbye' );