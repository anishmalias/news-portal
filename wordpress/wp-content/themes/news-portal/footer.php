<!--================ start footer Area  =================-->	
        <footer class="footer-area">
            <div class="container">
                <div class="row f_widgets_inner">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget ab_widgets">
                           <img src="<?php bloginfo('template_directory'); ?>/img/footer-logo.png" alt=""> 
                           <p>Technology and gadgets Adapter (MPA) is our favorite iPhone solution, since it lets you use the headphones you’re most comfortable with. It has an iPhone-compatible jack at one end and a microphone module with an Answer/End/Pause button and a female 3.5mm audio jack for connectingheadphones</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="f_title">
                            	<h3>Quick Links</h3>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list">
                                        <li><a href="#">Sitemaps</a></li>
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="#">Archives</a></li>
                                        <li><a href="#">Advertise</a></li>
                                        <li><a href="#">Ad Choice</a></li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Newsletters</a></li>
                                        <li><a href="#">Feedback</a></li>
                                    </ul>
                                </div>										
                            </div>							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-widget m_news_widgets">
                            <div class="f_title">
                            	<h3>Most Viewed News</h3>
                            </div>
                            <div class="m_news">
                                <?php
                                    $new_cat = new WP_Query( array(
                                        'posts_per_page' => 2, 
                                        'meta_key' => 'popular_posts', 
                                        'orderby' => 'meta_value_num', 
                                        'order' => 'ASC' 
                                    ) );
                                ?>
                                <?php if ( $new_cat->have_posts() ) : ?>
                                <?php while ( $new_cat->have_posts() ) : $new_cat->the_post(); ?>
                            	<div class="media">
                            		<div class="d-flex f-media-width">
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
                            			<a href="<?php the_permalink(); ?>"><h4><?php the_title() ?></h4></a>
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
                                <?php endwhile;?>
                                <?php else: ?>
                                <?php endif; ?>
                            	
                            </div>
                        </div>
                    </div>	
                </div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                   	<div class="col-lg-12">
                   		<div class="f_boder"></div>
                   	</div>
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://codehints.in/" target="_blank">CodeHints</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fas fa-rss"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/popper.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/jquery-ui/jquery-ui.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/stellar.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/isotope/isotope-min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
        
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/mail-script.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/lightslider.min.js"></script>
        <script src="<?php echo get_bloginfo('template_directory'); ?>/js/theme.js"></script>
        
    </body>
</html>