<?php get_header(); ?>

<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="transform: translateY(-35.6255px);"></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2><?php single_cat_title(); ?></h2>
            </div>
        </div>
    </div>
</section>
<section class="choice_area p_100">
    <div class="container">
        <div class="row choice_inner">
        <?php
            // The Loop
            while ( have_posts() ) : the_post(); ?>

            <div class="col-lg-3 col-md-6">
                <div class="choice_item">
                    <div class="choice-item__avatar">
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
                        <a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-placement="top" title="<?php the_title() ?>"><h4 class="truncate"><?php the_title() ?></h4></a>
                        <p>
                            <?php 
                                $content = get_the_content();
                                $content = preg_replace("/<img[^>]+\>/i", "", $content); 		
                                $content = preg_replace("/<iframe[^>]+\>/i", "", $content);             
                                $content = apply_filters('the_content', $content);
                                $content = str_replace(']]>', ']]>', $content);
                                $trimmed_content = wp_trim_words( $content, 5 ); 
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
<?php endif; ?>
<?php get_footer(); ?>