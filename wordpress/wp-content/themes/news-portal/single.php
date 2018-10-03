<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>News Details</h2>
            </div>
        </div>
    </div>
</section>

<section class="news_area single-post-area p_100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main_blog_details">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="ch-l-post--block">
                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
        					
        					<div class="ch-l-post--content ch-l-post--content__inside">
        						<h4><?php the_title(); ?></h4>
                                <div class="user_details">
                                    <div class="float-left">
                                        <?php the_category(' , '); ?>
                                    </div>
                                    <div class="float-right">
                                        <div class="media">
                                            <div class="media-body">
                                                <h5><?php the_author_posts_link() ?></h5>
                                                <p><?php the_time('M j\<\s\u\p\>S\<\/\s\u\p\>, Y') ?></p>
                                            </div>
                                            <div class="d-flex">
                                                <?php echo get_avatar( get_the_author_meta('user_email'), $size = '40'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry">
                                    <?php the_content(); ?>
                                </div>
                                <div class="news_d_footer">
                                    <a class="" href="javascript:void(0);">
                                        <i class="far fa-comment-alt"></i>
                                        <span>
                                            <?php
                                                if($post->comment_count > 0) { 
                                                    echo $post->comment_count;
                                                    //comments_popup_link('', ' 1 ', '% '); 
                                                }else if($post->comment_count == 0) {
                                                    echo '0';
                                                } 
                                            ?>
                                        </span> Comments
                                    </a>
                                    <div class="news_socail ml-auto">
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </div>
                                </div>
        						
        						
        					</div>
                    
                            <!-- <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p> -->
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                </div>
                <div class="navigation-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
                            </div>
                            <div class="arrow">
                                <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                            </div>
                            <div class="detials">
                                <p>Prev Post</p>
                                <a href="#"><h4>Space The Final Frontier</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                            
                            <div class="detials">
                                <p>Next Post</p>
                                <a href="#"><h4>Telescopes 101</h4></a>
                            </div>
                            <div class="arrow">
                                <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                            </div>
                            <div class="thumb">
                                <a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
                            </div>                                      
                        </div>                                  
                    </div>
                </div>
                <div class="comment-wrap">
                    <?php comments_template(); ?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

