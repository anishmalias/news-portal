<?php
function better_comments( $comment, $args, $depth ) {
	global $post;
	$author_id = $post->post_author;
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments. ?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'twenties' ); ?></span> <?php comment_author_link(); ?></div>
	<?php
		break;
		default :
		// Proceed with normal comments. ?>
	<li id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" <?php comment_class('clr'); ?>>
			<div class="single-comment justify-content-between d-flex">
				<div class="user justify-content-between d-flex">
					<div class="thumb">
						<?php echo get_avatar( $comment, 60 ); ?>
					</div>
					<div class="desc">
						<h5><?php comment_author_link(); ?></h5>
						<p class="date">
						<?php printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
							esc_url( get_comment_link( $comment->comment_ID ) ),
							get_comment_time( 'c' ),
							sprintf( _x( '%1$s', '1: date', 'twenties' ), get_comment_date('M j\<\s\u\p\>S\<\/\s\u\p\>, Y') )
						); ?> <?php esc_html_e( 'at', 'twenties' ); ?> <?php comment_time(); ?>
						</p><!-- .comment-date -->
						<div class="comment-content entry clr">
							<?php comment_text(); ?>
						</div>
					</div>
				</div>
				<div class="reply-btn">
					<?php comment_reply_link( array_merge( $args, array(
						'reply_text' => esc_html__( 'Reply', 'twenties' ),
						'depth'      => $depth,
						'max_depth'	 => $args['max_depth'] )
					) ); ?>
				</div>
			</div><!-- .comment-author -->
			<div class="comment-details clr">
				<header class="comment-meta">
					
					
				</header><!-- .comment-meta -->
				<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'twenties' ); ?></p>
				<?php endif; ?>
				
			</div><!-- .comment-details -->
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch; // End comment_type check.
}