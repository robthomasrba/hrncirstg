<?php
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
				<h2><?php echo the_title(); ?></h2>
			</div>
		</div>
	</div>
</div>

<div id="main-projects">
	<div class="stripes"></div>
	<div class="container">
		<div class="row main-projects-title">
			<div class="col-lg-12">
				<h2><?php the_field('subtitle'); ?></h2>
				<p><?php the_field('single_project_description'); ?></p>
			</div>
		</div>
	</div>
</div>

<!--
<div id="single-project-gallery"><?php
	$images = get_attached_media( 'image', get_the_ID() );
	if ( $images )
	{
		// Remove the featured image from the images array
		$featured_image_id = get_post_thumbnail_id();

		if ( has_post_thumbnail() ) {
			unset($images[ $featured_image_id ]);
		}

		foreach ($images as $image) {
			$image_title = $image->post_title;
			$image_html = wp_get_attachment_image($image->ID, 'large');
			$image_url = wp_get_attachment_url($image->ID, false); ?>
	<div class="single-project-gallery-images" style="background-image: url(<?php echo $image_url; ?>);">
		<div class="home-projects-description project-fade-right-to-left">
			<h2><?php echo $image_title; ?></h2>
			<div class="project-slider-navigation">
				<div class="prev">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/left-arrow-line-symbol.svg" />
				</div>
				<div class="next">
					<img src="<?php bloginfo( 'template_directory' ); ?>/images/right-arrow-line-symbol.svg" />
				</div>
			</div>
		</div>
	</div><?php
		}
	} ?>
</div>
--><?php
	endwhile;
endif;

// The posts
get_footer();
?>
