
<div class="right_sidebar">
	<aside class="r_widgets news_widgets">
		<div class="main_title2">
			<h2>Most Popular News</h2>
		</div>
		<?php
		    $new_cat = new WP_Query( array(
		    'posts_per_page' => 1, 
		    'meta_key' => 'popular_posts', 
		    'orderby' => 'meta_value_num', 
		    'order' => 'ASC' 
		    ) );
		?>
		<?php if ( $new_cat->have_posts() ) : ?>
		<?php while ( $new_cat->have_posts() ) : $new_cat->the_post(); ?>
		<div class="choice_item">
			<a href="<?php the_permalink(); ?>">
            	<?php if ( has_post_thumbnail($post->ID) ) {
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);                                
                ?>
            	<img class="img-fluid" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />

       			<?php } else { ?>
            		<img src="<?php bloginfo('template_directory'); ?>/img/default-image.png" alt="<?php the_title(); ?>" />
        		<?php } ?> 
        	</a>
			<div class="choice_text">
				<div class="date">
					<?php foreach((get_the_category()) as $category): ?> 		
						<a class="gad_btn" href="<?php echo get_category_link($category->cat_ID); ?>" title="<?php echo $category->cat_name ?>"><?php echo $category->cat_name ?></a>
					<?php endforeach; ?> 
					<a href="#"><i class="far fa-calendar"></i><?php the_time('M j\<\s\u\p\>S\<\/\s\u\p\>, Y') ?></a>
					<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>
						<?php
                            if($post->comment_count > 0) { 
                            echo $post->comment_count;
                            }else if($post->comment_count == 0) {
                                echo '0';
                            } 
                        ?>
					</a>
				</div>
				<a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
				<p>
	                <?php 
						$content = get_the_content();
						$content = preg_replace("/<img[^>]+\>/i", "", $content); 		
						$content = preg_replace("/<iframe[^>]+\>/i", "", $content);             
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]>', $content);
						$trimmed_content = wp_trim_words( $content, 15 ); 
						echo $trimmed_content;
	                ?>
				</p>
			</div>
		</div>
		<?php endwhile;?>
        <?php else: ?>
        <?php endif; ?>
		<?php wp_reset_postdata(); ?>
			<div class="news_slider owl-carousel">
				<?php
                    $new_loop = new WP_Query( array(
                    'posts_per_page' => 15, 
                    'meta_key' => 'popular_posts', 
                    'orderby' => 'meta_value_num', 
                    'order' => 'ASC' 
                    ) );
                ?>

                <?php if ( $new_loop->have_posts() ) : ?>
				<?php while ( $new_loop->have_posts() ) : $new_loop->the_post(); ?>

				<div class="item">
					<div class="choice_item">
						<div class="siderbar-slider-image">
							<a href="<?php the_permalink(); ?>">
	                        	<?php if ( has_post_thumbnail($post->ID) ) {
	                                $thumb_id = get_post_thumbnail_id();
	                                $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);                                
	                            ?>
	                        	<img class="img-fluid" src="<?php echo $thumb_url[0]; ?>" alt="<?php the_title(); ?>" />

	                   			<?php } else { ?>
	                        		<img src="<?php bloginfo('template_directory'); ?>/img/default-image.png" alt="<?php the_title(); ?>" />
	                    		<?php } ?> 
	                    	</a>
                    	</div>
						<div class="choice_text">
							
								<a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title() ?>"><h4 class="truncate"><?php the_title() ?></h4></a>

							<div class="date">
								<a href="#"><i class="far fa-calendar"></i><?php the_time('M j\<\s\u\p\>S\<\/\s\u\p\>, Y') ?></a>
								<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>
									<?php
                                        if($post->comment_count > 0) { 
                                        echo $post->comment_count;
                                        }else if($post->comment_count == 0) {
                                            echo '0';
                                        } 
                                    ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile;?>
                <?php else: ?>
                <?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
	</aside>
	<aside class="r_widgets add_widgets text-center">
		<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/blog/add-1.jpg" alt="">
	</aside>
	<aside class="r_widgets social_widgets">
		<div class="main_title2">
			<h2>Social Networks</h2>
		</div>
		<ul class="list">
			<li><a href="#"><i class="fa fa-facebook"></i> 983Likes <span>Like our page</span></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i> 983Followers <span>Follow Us</span></a></li>
			<li><a href="#"><i class="fa fa-youtube-play"></i> 9835Subscriber <span>Subscribe</span></a></li>
			<li><a href="#"><i class="fa fa-vimeo"></i> 59874Subscriber <span>Subscribe</span></a></li>
			<li><a href="#"><i class="fa fa-pinterest"></i> 36958Followers <span>Follow Us</span></a></li>
			<li><a href="#"><i class="fa fa-rss"></i>RSS Subscribe <span>Subscribe</span></a></li>
		</ul>
	</aside>
	<aside class="r_widgets newsleter_widgets">
		<div class="main_title2">
			<h2>Newsletter</h2>
		</div>
		<div class="nsl_inner">
			<i class="fa fa-envelope"></i>
			<h4>Subscribe to our Newsletter</h4>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua adipisicing</p>
			<div class="form-group d-flex flex-row">
				<div class="input-group">
					<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
				</div>
				<a href="#" class="bbtns">Subcribe</a>
			</div>	
		</div>
	</aside>
</div>