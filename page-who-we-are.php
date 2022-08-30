<?php
/**
* Template Name: Who We Are
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
				<h2>We Build Spaces for People</h2>
			</div>
		</div>
	</div>
</div>

<div id="main-services">
	<div class="stripes" style="z-index: 1;"></div>
	<div id="main-projects">
		<div id="preconstruction-description" class="container">
			<div class="row main-projects-title">
				<div class="col-lg-12 fade-bottom-up">
					<h2><?php the_field('who_we_are_main_title'); ?></h2>
					<p><?php the_field('who_we_are_main_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
		</div>
	</div>

	<div id="scheduling-gallery" class="container-fluid">
		<div class="row">
			<div class="col-lg-10 fade-left-to-right-leaders">
				<div class="what-we-do-gallery scheduling-gallery">
					<div class="single-project-gallery-images" style="background-image: url(<?php the_field('who_we_are_main_description_image'); ?>);">
					</div>
				</div>
			</div>
			<div class="col col-lg-2 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
		</div>
	</div>

	<div id="safety-description" class="hrncir-descriptions">
		<div class="container">
			<div class="row main-projects-title">
				<div class="col-lg-12 fade-bottom-up-leadership">
					<h2><?php the_field('who_we_are_our_leadership_title'); ?></h2>
					<h4><?php the_field('who_we_are_our_leadership_subitle'); ?></h4>
					<p><?php the_field('who_we_are_our_leadership_description'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div id="main-projects">
		<div class="container-fluid">
			<div class="row">
				<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
				<div class="col-lg-10">
					<div class="row"><?php
						$args = array(
							'post_type' => 'leaders',
							'posts_per_page' => -1,
							'orderby' => 'menu_order',
							'order' => 'ASC',
						);
						$projects_query = new WP_Query( $args );
						while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
						<div id="<?php echo get_the_ID(); ?>" class="leaders-contents" style="display: none";>
							<div class="container">
								<div class="row">
									<div class="col-lg-4">
										<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');" />
										<div class="projects-showcase-description">
											<h6><?php echo str_replace(' ', ' ', get_the_title()); ?></h6>
											<span class="leaders-title"><?php the_excerpt(); ?></span>
										</div>
									</div>
									<div class="col-lg-8 leaders-bio">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 fade-bottom-up fade-bottom-up-leaders-<?php echo get_the_ID(); ?>">
							<div class="projects-showcase-wrapper">
								<div class="projects-showcase-images">
									<div class="projects-images leaders-images" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');"></div><?php

									$images = get_attached_media( 'image', get_the_ID() );
									if ( $images )
									{ ?>
										<ul>
											<?php
											foreach ($images as $image) {
												$image_title = $image->post_title;
												$image_html = wp_get_attachment_image($image->ID, 'large');
												$image_url = wp_get_attachment_url($image->ID, false);
												echo "<a class='fancybox' data-fancybox data-src='#".get_the_ID()."' href='javascript:;' title='$image_title'>$image_title</a>";
											} ?>
										</ul><?php
									} ?>
								</div>
								<div class="projects-showcase-description">
									<h6><?php echo str_replace(' ', '<br />', get_the_title()); ?></h6>
									<span class="leaders-title"><?php the_excerpt(); ?></span>
								</div>
							</div>
						</div><?php
						endwhile;
						wp_reset_postdata();
						wp_reset_query(); ?>
					</div>
				</div>
				<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			</div>
		</div>
	</div>
</div>

<div class="h-dark">
	<div class="container">
		<div class="row get-in-touch">
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			<div class="col-lg-7 get-in-touch-description fade-left-to-right-footer">
				<h2><?php the_field('our_values_title'); ?></h2>
				<div class="get-in-touch-description-cta">
					<p>
						<?php if( get_field('our_values_1_title') ): ?>
							<span><?php the_field('our_values_1_title'); ?></span> - <?php the_field('our_values_1_content'); ?> <br/>
						<?php endif; ?>
						<?php if( get_field('our_values_2_title') ): ?>
						<span><?php the_field('our_values_2_title'); ?></span> - <?php the_field('our_values_2_content'); ?> <br/>
						<?php endif; ?>
						<?php if( get_field('our_values_3_title') ): ?>
						<span><?php the_field('our_values_3_title'); ?></span> - <?php the_field('our_values_3_content'); ?> <br/>
						<?php endif; ?>
						<?php if( get_field('our_values_4_title') ): ?>
						<span><?php the_field('our_values_4_title'); ?></span> - <?php the_field('our_values_4_content'); ?> <br/>
						<?php endif; ?>
						<?php if( get_field('our_values_5_title') ): ?>
						<span><?php the_field('our_values_5_title'); ?></span> - <?php the_field('our_values_5_content'); ?> <br/>
						<?php endif; ?>
					</p>
					<button class="shutter-in-horizontal"><a href="/contact">Work With Us</a></button>
				</div>
			</div>
			<div class="col-12 get-in-touch-hidden d-block d-sm-block d-md-block d-lg-none d-xl-none">
				<img class="img-fluid" src="<?php the_field('who_we_are_our_values_description_image'); ?>" />
			</div>
			<div class="get-in-touch-img our-values-img fade-right-to-left" style="background: url('<?php the_field('who_we_are_our_values_description_image'); ?>');">
			</div>
		</div>
	</div>
</div>
<?php 
$wva_video = get_field('video');
$wva_video_link = $wva_video['video_link'];
if($wva_video_link):
?>
<div class="who-we-are-video-player" style="background: #000;">
	<div class='embed-container'>
		<iframe src='<?php echo $wva_video_link; ?>' frameborder='0' allow='autoplay'webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		
	</div>
</div>
<?php
endif;
?>

<div id="testimonials-container">
	<div id="testimonials-slider"><?php
		$args = array(
			'post_type' => 'testimonials',
			'posts_per_page' => -1,
			'orderby' => 'date',
			'order' => 'ASC',
		);
		$testimonials_query = new WP_Query( $args );
		while ($testimonials_query->have_posts()) : $testimonials_query->the_post(); ?>
		<div class="testimonial-single">
			<div class="testimonial-logo">
				<img src="<?php the_field('company_logo'); ?>" />
			</div>
			<div class="testimonial-wrapper">
				<div class="testimonial-quotes"><img src="<?php bloginfo( 'template_directory' ); ?>/images/testimonials-quotes.png" /></div>
				<div class="testimonial-description"><?php the_content(); ?></div>
				<div class="testimonial-who"><?php echo the_title(); ?> <?php the_field('position'); ?></div>
				<div class="testimonial-gap"></div>
			</div>
		</div><?php
		endwhile;
		wp_reset_postdata();
		wp_reset_query(); ?>
	</div>

	<div class="testimonial-slider-navigation">
		<div class="testimonial-prev">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/left-arrow-line-symbol.svg" />
		</div>
		<div class="testimonial-next">
			<img src="<?php bloginfo( 'template_directory' ); ?>/images/right-arrow-line-symbol.svg" />
		</div>
	</div>
</div>
<?php
endwhile; endif;

// The posts
get_footer();
?>
