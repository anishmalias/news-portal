<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="google-site-verification" content="8UeiofC42IIbyMF26po9sm_teSV9oqaUuuZbLsW21z4" />
<title><?php bloginfo('name'); { echo ' | '; } if(wp_title('', false)) {} else { echo bloginfo('description'); }wp_title(''); ?></title>

<meta name="description" content="Codehints, Anish M Alias, HTML, HTML5, CSS, CSS3, Jquery, Wordpress, Android, SASS, LESS, Angular">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/img/fav-icon.png" />


<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/vendors/linericon/style.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/vendors/lightbox/simpleLightbox.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/vendors/animate-css/animate.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/vendors/jquery-ui/jquery-ui.css">
<!-- main css -->
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/responsive.css">

<body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="top_menu">
            	<div class="container">
            		<div class="float-left">
						<a href="#">Wednesday, March 14, 2018</a>
					</div>
					<div class="float-right">
						<ul class="list header_social">
							<li><a href="#"><i class="fab fa-facebook"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fab fa-behance"></i></a></li>
						</ul>
					</div>
            	</div>
            </div>
            <div class="logo_part">
            	<div class="container">
            		<div class="float-left">
						<a class="logo" href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt=""></a>
					</div>
					<div class="float-right">
						<div class="header_magazin">
							<img src="<?php bloginfo('template_directory'); ?>/img/header-magazin.png" alt="">
						</div>
					</div>
            	</div>
            </div>
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<div class="container_inner">
							<!-- Brand and toggle get grouped for better mobile display -->
							<a class="navbar-brand logo_h" href="index.html"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt=""></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
								<?php wp_nav_menu(); ?>
								<ul class="nav navbar-nav navbar-right ml-auto">
									<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
								</ul>
							</div> 
						</div>
					</div>
				</nav>
			</div>
        </header>
        <!--================Header Menu Area =================-->