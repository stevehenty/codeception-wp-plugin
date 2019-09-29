<?php

/**
 * Creates a new page with the given slug and content.
 *
 * @param string $name The page name
 *
 * @param string $content
 *
 * @return int|string|WP_Error
 */
function create_page( $name, $content ) {
	$post = array(
		'post_title'   => $name,
		'post_content' => $content,
		'post_excerpt' => $name,
		'post_status'  => 'publish',
		'post_type'    => 'page',
	);

	$post_id = wp_insert_post( $post );

	return $post_id ? $post_id : '';
}

create_page( 'hello', 'Welcome' );
create_page( 'bye', 'Goodbye' );