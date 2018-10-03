<?php get_header(); ?>

<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'paged' => $paged );
$wp_query = new WP_Query($args);
while ( have_posts() ) : the_post(); ?>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="transform: translateY(-35.6255px);"></div>
        <div class="container">
            <div class="banner_content text-center">
                <h2><?php single_cat_title(); ?></h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="news-details.html">News Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="choice_area p_100">
    <div class="container">
        <div class="main_title2">
            <h2>Editor’s Choice</h2>
        </div>
        <div class="row choice_inner">
            <div class="col-lg-3 col-md-6">
                <div class="choice_item">
                    <img class="img-fluid" src="http://192.168.4.243/news-portal/wordpress/wp-content/themes/news-portal/img/blog/choice/choice-1.jpg" alt="">
                    <div class="choice_text">
                        <div class="date">
                            <a class="gad_btn" href="#">Gadgets</a>
                            <a href="#"><i class="far fa-calendar"></i>2018</a>
                            <a href="#"><i class="far fa-comment-alt" aria-hidden="true"></i>05</a>
                        </div>
                        <a href="news-details.html"><h4>Myspace Layouts The Missing Element already</h4></a>
                        <p>Planning to visit Las Vegas or any other vacational resort where casinos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
<?php endwhile; ?>
<?php get_footer(); ?>