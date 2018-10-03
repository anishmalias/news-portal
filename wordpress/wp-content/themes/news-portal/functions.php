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

	// Enable Better Comments

	require_once( get_template_directory() .'/functions/better-comments.php' );
	function wpb_move_comment_field_to_bottom( $fields ) {
		$comment_field = $fields['comment'];
		unset( $fields['comment'] );
		$fields['comment'] = $comment_field;
		return $fields;
	}
	add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

	// Modify Comments feilds

	function modify_comment_form_fields($fields){
	    $fields['author'] = '<p class="comment-form-author">' . '<input id="author" class="form-control" placeholder="Your Name" name="author" type="text" value="' .esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.( $req ? '<span class="required">*</span>' : '' )  .'</p>';
	    $fields['email'] = '<p class="comment-form-email">' . '<input id="email" class="form-control" placeholder="Your Email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />'  .( $req ? '<span class="required">*</span>' : '' ) .'</p>';
	    $fields['url'] = '<p class="comment-form-url">' .'<input id="url" name="url" class="form-control" placeholder="Website" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /> ' .'</p>';    
	    return $fields;
	}
	add_filter('comment_form_default_fields','modify_comment_form_fields');

	function wpsites_modify_comment_form_text_area($arg) {
	    $arg['comment_field'] = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="1" class="form-control" placeholder="'. _x( 'Comments', 'noun' ) .'" aria-required="true"></textarea></p>';
	    return $arg;
	}

	add_filter('comment_form_defaults', 'wpsites_modify_comment_form_text_area');

	function as_adapt_comment_form( $arg ) {
	    $arg['class_submit'] = 'primary-btn submit_btn';
	    // return the modified array
	    return $arg;
	}
	// run the comment form defaults through the newly defined filter
	add_filter( 'comment_form_defaults', 'as_adapt_comment_form' );
?>