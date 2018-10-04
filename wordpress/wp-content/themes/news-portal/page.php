<?php /* Template Name: For All post */ ?>

<?php get_header(); ?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2>All Post</h2>
            </div>
        </div>
    </div>
</section>
<section class="news_area single-post-area p_100">
    <div class="container"> 
        <div class="latest_news">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
            $wp_query = new WP_Query($args);
            while ( have_posts() ) : the_post(); ?>
            <div class="media mb-5">
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
        <div class="default-pagination">
            <?php wpbeginner_numeric_posts_nav(); ?>
        </div>
    </div>                               
</section>


<?php get_footer(); ?>