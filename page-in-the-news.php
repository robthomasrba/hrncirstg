<?php
/**
* Template Name: Our Projects
*/

// The header
get_header();

// The content
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
			$hero_image = get_the_post_thumbnail_url(get_the_ID(),'full');
?>
<div id="projects-hero" data-parallax="scroll" data-image-src="<?php echo $hero_image; ?>">
	<div class="container">
		<div class="row">
			<div class="col-12 d-block d-sm-block d-md-none d-lg-none d-xl-none">
				<img class="img-fluid" src="<?php echo $hero_image; ?>" />
			</div>
			<div class="col-lg-7 hero-description fade-left-to-right">
				<h2>Press Releases & Articles</h2>
			</div>
		</div>
	</div>
</div><?php
endwhile; endif; ?>

<div id="main-services" class="blog-posts">
	<div class="stripes" style="z-index: 1;"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			<div class="col-lg-10">
				<div class="row blog-wrapper">
					<?php
					$count_posts = 0;
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => -1,
						'orderby' => 'date',
	          'order' => 'ASC',
						'category_name' => 'uncategorized'
					);
					$posts_query = new WP_Query( $args );
					while ($posts_query->have_posts()) : $posts_query->the_post();
					if ($count_posts == 5) : ?>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="sidebar-inside-posts">
							<?php dynamic_sidebar('Sidebar 1'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
		</div>
	</div>

	<div class="h-dark h-dark-inside-blog-posts">
		<div class="container">
			<div class="row get-in-touch"><?php
				$featured_post_args = array(
					'post_type' => 'post',
					'posts_per_page' => 1,
					'category_name' => 'featured'
				);

				$featured_post_query = new WP_Query($featured_post_args);

				while ($featured_post_query->have_posts()) :
					$featured_post_query->the_post(); // echo get_the_ID();

					// Display the featured image
					$featured_image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_url($featured_image_id, false); ?>
				<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
				<div class="col-lg-7 get-in-touch-description fade-left-to-right-footer">
					<h2><?php echo the_title(); ?></h2>
					<div class="get-in-touch-description-cta">
						<p><?php echo the_excerpt(); ?></p>
						<button class="shutter-in-horizontal"><a href="<?php the_permalink(); ?>">Read More</a></button>
					</div>
				</div>
				<div class="col-12 get-in-touch-hidden d-block d-sm-block d-md-block d-lg-none d-xl-none">
					<img class="img-fluid" src="<?php echo $image_url; ?>" />
				</div>
				<div class="get-in-touch-img our-values-img fade-right-to-left" style="background: url('<?php echo $image_url; ?>');">
				</div><?php
				endwhile;
				wp_reset_postdata();
				wp_reset_query(); ?>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			<div class="col-lg-10">
				<div class="row blog-wrapper"><?php
					else : ?>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="blog-posts-wrapper">
							<span class="tags"><?php the_tags('', ', ', ' | Tags'); ?></span>
							<h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
							<p><?php echo the_excerpt(); ?></p>
							<button class="shutter-in-horizontal blog-read-more"><a href="<?php the_permalink(); ?>">Read More</a></button>
						</div>
					</div><?php
					endif;
					$count_posts++;
					endwhile;
					wp_reset_postdata();
					wp_reset_query(); ?>
				</div>
			</div>
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
		</div>
	</div>
</div><?php

// The posts
get_footer();
?>
