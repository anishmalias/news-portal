<!--================Home Banner Area =================-->

        <section class="home_banner_area">
            
				<div class="home-slider">
					<?php 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged );
					$wp_query = new WP_Query($args);
					while ( have_posts() ) : the_post(); ?>
					<div class="slider-item">
						<div class="container">
							<div class="banner_content text-center">
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
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
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
					</div>
					<?php endwhile; ?>
				</div>
					
        </section>
        <!--================End Home Banner Area =================-->