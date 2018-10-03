<div class="comments-area">
	<ol class="commentlist">

	    <?php wp_list_comments( array(

	    	'callback' => 'better_comments'

	    )); ?>

	</ol>
</div>
<div class="comment-form">
	<?php comment_form(); ?>
</div>

