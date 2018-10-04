<?php get_header(); ?>
<?php
// Set the Current Author Variable $curauth
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="transform: translateY(-35.726px);"></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2><?php echo $curauth->nickname; ?></h2>
                <div class="author__avatar">
                        <?php echo get_avatar( $curauth->user_email , '150 '); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="choice_area p_100">
    <div class="container">
            
        <div class="main_title2">
            <h2>Posts by <?php echo $curauth->nickname; ?></h2>
        </div> 

        <div class="author-profile-card">
            <p><strong>Website:</strong> <a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a><br />
            <strong>Bio:</strong> <?php echo $curauth->user_description; ?></p>
        </div>
                 
        <div class="row choice_inner">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
            <?php endwhile;  
        
                 
        else: ?>
        <p><?php _e('No posts by this author.'); ?></p>
            
        <?php endif; ?>

        <div class="default-pagination">
            <!-- <?php wpbeginner_numeric_posts_nav(); ?> -->
        </div>
    </div>
</section>
<?php get_footer(); ?>