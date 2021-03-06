================News Area =================-->
        <section class="news_area p_120 pb-0">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-8">
        				<div class="main_title2">
							<h2>Latest News</h2>
							<a href="?page_id=31" class="gad_btn">View All</a>
						</div>
        				<div class="latest_news">
							<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
							$args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged );
							$wp_query = new WP_Query($args);
							while ( have_posts() ) : the_post(); ?>
        					<div class="media">
        						<div class="d-flex cp-l-latest__thumb">
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
        						<div class="media-body">
        							<div class="choice_text mt-0">
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
										<a href="<?php the_permalink(); ?>"><h4> <?php the_title() ?></h4></a>
										<!-- <?php $content = get_the_content();
                                        	$trimmed_content = wp_trim_words( $content, 60 ); 
                                        ?> -->
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

                           
        				 <div class="tavel_food mt-100">
        					<div class="main_title2">
								<h2>Travel and food</h2>
							</div>
							<div class="row">
        						<div class="col-sm-6">
        							<div class="choice_item">
										<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/blog/popular-post/pp-9.jpg" alt="">
										<div class="choice_text">
											<div class="date">
												<a class="gad_btn" href="#">Gadgets</a>
												<a href="#"><i class="far fa-calendar"></i>>March 14, 2018</a>
												<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
											</div>
											<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
											<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
										</div>
									</div>
        						</div>
        						<div class="col-sm-6">
        							<div class="choice_item">
										<img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/blog/popular-post/pp-10.jpg" alt="">
										<div class="choice_text">
											<div class="date">
												<a class="gad_btn" href="#">Gadgets</a>
												<a href="#"><i class="far fa-calendar"></i>>March 14, 2018</a>
												<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
											</div>
											<a href="news-details.html"><h4>Technical Support 10 with Dealing With</h4></a>
											<p>It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights</p>
										</div>
									</div>
        						</div>
        					</div>
        				</div> 
        				
        			</div>
        			<div class="col-lg-4">
        				<?php get_sidebar(); ?>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End News Area =================-->
        
        <!--================Product List Area =================-->
        <section class="product_list_area p_100">
        	<div class="container">
        		<div class="row product_list_inner">
        			<div class="col-lg-4">
        				<div class="main_title2">
        					<h2>Best Product Deals</h2>
        				</div>
        				<div class="product_list">
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-1.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Video Games Playing With Imagination That surprise you</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-2.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>A Discount Toner Cartridge Is Better Than Ever And You Will Save</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-3.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Microsoft Patch Management For Home Users</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-4.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Asus Laptops Are Still Part Of The Dell Family</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="main_title2">
        					<h2>Tech Culture</h2>
        				</div>
        				<div class="product_list">
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-5.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Will The Democrats Be Able To Reverse The Online Gambling Ban</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-6.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>For Women Only Your Computer Usage Could Cost You Your Job</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-7.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Converter Ipod Video Taking Portable Video Viewing To A Whole Level</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-8.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Sony Laptops Are Still Part Of The Sony Family</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="main_title2">
        					<h2>Brilliant Ideas</h2>
        				</div>
        				<div class="product_list">
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-9.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Las Vegas How To Have Non Gambling Related Fun</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-10.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Website Hosting Reviews Free The Best Resource For Website</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-11.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>Compatible Inkjet Cartridge Which One Will You Choose</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        					<div class="media">
        						<div class="d-flex">
        							<img src="<?php bloginfo('template_directory'); ?>/img/product/product-12.jpg" alt="">
        						</div>
        						<div class="media-body">
        							<div class="choice_text">
										<a href="#"><h4>How To Protect Your Computer Wery Useful Tips</h4></a>
										<div class="date">
											<a href="#"><i class="far fa-calendar"></i>March 14, 2018</a>
											<a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
										</div>
									</div>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Product List Area =================