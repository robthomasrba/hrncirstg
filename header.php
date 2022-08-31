<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" /><?php
	if ( is_home() || is_front_page() ) : ?>
	<meta name="description" content="" /><?php
	endif; ?>
	<title><?php
	if (is_front_page() || is_home()) {
    echo get_bloginfo('name').' | '. get_bloginfo('description');
  }
	else {
  	echo wp_title('');
  } ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css2?family=Aleo:wght@400;700&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://use.typekit.net/wtc4yxi.css"> -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Main navigation: Start -->
	<div id="main-navigation">
		<nav class="navbar navbar-expand-lg fixed-top">
				<!-- Mobile navigation -->
				<a class="navbar-brand" href="/">
					<img alt="HRNCIR Construction" src="<?php bloginfo( 'template_directory' ); ?>/images/HRNCIR-Construction-Logo.svg">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

				<!-- Main menu -->
				<div class="collapse navbar-collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
			      <li class="nav-item <?php if (is_page('our-projects')) { echo 'active'; } ?>">
			        <a class="nav-link text-center" href="/our-projects">
								Our Projects <?php if (is_page('our-projects')) : ?><span class="sr-only">(current)</span><?php endif; ?>
							</a>
			      </li>
			      <li class="nav-item <?php if (is_page('what-we-do')) { echo 'active'; } ?>">
			        <a class="nav-link text-center" href="/what-we-do">
								What We Do <?php if (is_page('what-we-do')) : ?><span class="sr-only">(current)</span><?php endif; ?>
							</a>
			      </li>
			      <li class="nav-item <?php if (is_page('who-we-are')) { echo 'active'; } ?>">
			        <a class="nav-link text-center" href="/who-we-are">
								Who We Are <?php if (is_page('who-we-are')) : ?><span class="sr-only">(current)</span><?php endif; ?>
							</a>
			      </li>
			      <li class="nav-item <?php if (is_page('in-the-news')) { echo 'active'; } ?>">
			        <a class="nav-link text-center" href="/in-the-news">
								In The News <?php if (is_page('in-the-news')) : ?><span class="sr-only">(current)</span><?php endif; ?>
							</a>
			      </li>
			      <li class="nav-item main-menu-contact <?php if (is_page('contact')) { echo 'active'; } ?>">
			        <a class="nav-link text-center" href="/contact">
								Contact <?php if (is_page('contact')) : ?><span class="sr-only">(current)</span><?php endif; ?>
							</a>
			      </li>
					</ul>
				</div>
				<!-- Main menu: End -->
		</nav>
	</div><?php
  if (is_home() || is_front_page()) : ?>
	<div id="home-hero" data-parallax="scroll" data-image-src="<?php the_field('hero_image'); ?>" class="hover-zoom"> 
	  <div class="container">
	    <div class="row">
				<div class="col-12 d-block d-sm-block d-md-none d-lg-none d-xl-none">
					<img class="img-fluid " src="<?php the_field('hero_image'); ?>" />
				</div>
	      <div data-aos="fade-up" class="col-lg-7 hero-description fade-left-to-right">
	        <h2><?php the_field('hero_title'); ?></h2>
					<div class="hero-description-cta">
		        <p><?php the_field('hero_description'); ?></p>
						<a href="/who-we-are"><button class="shutter-in-horizontal"><?php the_field('hero_button_text'); ?></button></a>
					</div>
	      </div>
	    </div>
	  </div>
	</div><?php
	endif; ?>