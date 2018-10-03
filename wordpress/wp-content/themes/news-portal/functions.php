<?php	

	add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
	function enqueue_child_theme_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	}
	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 ); function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) { $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html ); return $html; }
	// enable menu
	add_theme_support( 'menus' );   

	// featured images
	add_theme_support( 'post-thumbnails' );



?>