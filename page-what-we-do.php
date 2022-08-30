<?php
/**
* Template Name: What We Do
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
				<h2>The HRNCIR Approach</h2>
			</div>
		</div>
	</div>
</div>
<div id="preconstruction-description-top"></div>
<div id="what-we-do-wrapper">
	<nav class="navbar navbar-expand sticky-top projects-nav">
		<div class="stripes"></div>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#projects-nav">
	    <span class="navbar-toggler-icon"></span>
	  </button>
		<div class="navbar-collapse collapse" id="projects-nav">
	    <ul class="navbar-nav">
	    	<li class="nav-item active">
	      	<a class="nav-link" href="#preconstruction-description-top">Preconstruction</a>
	      </li>
	      <li class="nav-item">
	      	<a class="nav-link" href="#construction-description-top">Construction</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#scheduling-description-top">Scheduling</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#safety-description-top">Safety</a>
	      </li>
			</ul>
	  </div>
	</nav>

	<div id="main-projects">
		<div id="preconstruction-description" class="container">
			<div class="row main-projects-title">
				<div class="col-lg-12">
					<h2><?php the_field('preconstruction_services_title'); ?></h2>
					<h4><?php the_field('preconstruction_services_subheadline'); ?></h4>
					<p><?php the_field('preconstruction_services_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
		</div>
	</div>

	<div id="preconstruction-gallery" class="container-fluid">
		<div class="row">
			<div class="col-lg-10">
				<div class="what-we-do-gallery preconstruction-gallery">
					<div class="slider-border-right"></div>
					<div class="home-projects-description project-fade-right-to-left">
						<h2><?php the_field('preconstruction_slider_title'); ?></h2>
						<ul>
							<?php the_field('preconstruction_slider_description'); ?>
						</ul>
						<div class="home-projects-description-cta">
							<button class="shutter-in-horizontal"><a href="/contact">Get In Touch</a></button>
						</div>
						<div class="project-slider-navigation">
							<div class="prev preconstruction-prev">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/left-arrow-line-symbol.svg" />
							</div>
							<div class="next preconstruction-next">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/right-arrow-line-symbol.svg" />
							</div>
							<div id="construction-description-top"></div>
						</div>
					</div>
			  	<div id="preconstruction-gallery-slider">
						<?php
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
						</div><?php
							}
						} ?>
					</div>
				</div>
			</div>
			<div class="col col-lg-2 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
		</div>
	</div>

	<div id="construction-description" class="hrncir-descriptions">
		<div class="container">
			<div class="row main-projects-title">
				<div class="col-lg-12">
					<h2><?php the_field('construction_services_title'); ?></h2>
					<h4><?php the_field('construction_services_subheadline'); ?></h4>
					<p><?php the_field('construction_services_description'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div id="construction-gallery" class="container-fluid">
		<div class="row">
			<div class="col col-lg-2 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			<div class="col-lg-10">
				<div class="what-we-do-gallery what-we-do-gallery-alternate construction-gallery">
					<div class="slider-border-left"></div>
					<div class="home-projects-description home-projects-description-alternate project-fade-left-to-right">
						<h2><?php the_field('construction_slider_title'); ?></h2>
						<ul>
							<?php the_field('construction_slider_description'); ?>
						</ul>
		        <div class="home-projects-description-cta">
		          <button class="shutter-in-horizontal"><a href="/contact">Get In Touch</a></button>
		        </div>
						<div class="project-slider-navigation">
							<div class="prev construction-prev">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/left-arrow-line-symbol.svg" />
							</div>
							<div class="next construction-next">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/right-arrow-line-symbol.svg" />
							</div>
							<div id="scheduling-description-top"></div>
						</div>
					</div>
					<div id="construction-gallery-slider">
						<?php
						$construction_args = array(
							'post_type' => 'page',
							'pagename' => 'Construction Approach',
							'posts_per_page' => 1
						);

						$construction_query = new WP_Query($construction_args);

						while ($construction_query->have_posts()) :
							$construction_query->the_post(); // echo get_the_ID();

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
						</div><?php
								}
							}
						endwhile;
						wp_reset_postdata();
						wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="scheduling-description" class="hrncir-descriptions">
		<div class="container">
			<div class="row main-projects-title">
				<div class="col-lg-12">
					<h2><?php the_field('scheduling_services_title'); ?>Scheduling Services</h2>
					<h4><?php the_field('scheduling_services_subheadline'); ?></h4>
					<p><?php the_field('scheduling_services_description'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div id="scheduling-gallery" class="container-fluid">
		<div class="row">
			<div class="col-lg-10">
				<div class="what-we-do-gallery scheduling-gallery">
					<div class="slider-border-right"></div>
					<div class="home-projects-description project-fade-right-to-left">
						<h2><?php the_field('scheduling_slider_title'); ?></h2>
						<ul>
							<?php the_field('scheduling_slider_description'); ?>
						</ul>
						<div class="home-projects-description-cta">
							<button class="shutter-in-horizontal"><a href="/contact">Get In Touch</a></button>
						</div>
						<div class="project-slider-navigation">
							<div class="prev scheduling-prev">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/left-arrow-line-symbol.svg" />
							</div>
							<div class="next scheduling-next">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/right-arrow-line-symbol.svg" />
							</div>
							<div id="safety-description-top"></div>
						</div>
					</div>
					<div id="scheduling-gallery-slider"><?php
					$scheduling_query_args = array(
						'post_type' => 'page',
						'pagename' => 'Scheduling Approach',
						'posts_per_page' => 1
					);

					$scheduling_query = new WP_Query($scheduling_query_args);

					while ($scheduling_query->have_posts()) :
						$scheduling_query->the_post(); // echo get_the_ID();

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
						</div><?php
							}
						}
					endwhile;
					wp_reset_postdata();
					wp_reset_query(); ?>
					</div>
				</div>
			</div>
			<div class="col col-lg-2 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
		</div>
	</div>

	<div id="safety-description" class="hrncir-descriptions">
		<div class="container">
			<div class="row main-projects-title">
				<div class="col-lg-12">
					<h2><?php the_field('safety_title'); ?></h2>
					<h4><?php the_field('safety_subheadline'); ?></h4>
					<p><?php the_field('safety_description'); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div id="safety-gallery" class="container-fluid">
		<div class="row">
			<div class="col col-lg-2 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			<div class="col-lg-10">
				<div class="what-we-do-gallery what-we-do-gallery-alternate safety-gallery">
					<div class="slider-border-left"></div>
					<div class="home-projects-description home-projects-description-alternate project-fade-right-to-left">
						<h2><?php the_field('safety_slider_title'); ?></h2>
						<ul>
							<?php the_field('safety_slider_description'); ?>
						</ul>
						<div class="home-projects-description-cta">
							<button class="shutter-in-horizontal"><a href="/contact">Get In Touch</a></button>
						</div>
						<div class="project-slider-navigation">
							<div class="prev safety-prev">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/left-arrow-line-symbol.svg" />
							</div>
							<div class="next safety-next">
								<img src="<?php bloginfo( 'template_directory' ); ?>/images/right-arrow-line-symbol.svg" />
							</div>
						</div>
					</div>
					<div id="safety-gallery-slider"><?php
					$safety_query_args = array(
						'post_type' => 'page',
						'pagename' => 'Safety Approach',
						'posts_per_page' => 1
					);

					$safety_query = new WP_Query($safety_query_args);

					while ($safety_query->have_posts()) :
						$safety_query->the_post(); // echo get_the_ID();

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
						</div><?php
							}
						}
					endwhile;
					wp_reset_postdata();
					wp_reset_query(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="cs-description" class="hrncir-descriptions">
		<div class="container">
			<div class="row main-projects-title">
				<div class="col-lg-12">
					<h2>Case Studies</h2>
				</div>
			</div>
		</div>
	</div>

	<div id="main-projects">
		<div class="container-fluid">
			<div class="row">
				<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
				<div class="col-lg-10">
					<div class="row">
						<?php
						$args = array(
							'post_type' => 'case_studies',
							'posts_per_page' => -1,
							'orderby' => 'date',
							'order' => 'ASC',
						);
						$projects_query = new WP_Query( $args );
						while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
						<div class="col-xl-4 col-lg-6 col-md-6">
							<div class="projects-showcase-wrapper">
								<div class="projects-showcase-images">
									<div class="projects-images" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');"></div><?php

									$images = get_attached_media( 'image', get_the_ID() );

									/* $featured_image_id = get_post_thumbnail_id(); */
									/*
									if ( has_post_thumbnail() ) {
										// Remove the featured image from the images array
										unset($images[ $featured_image_id ] );
									}
									*/

									if ( $images )
									{ ?>
									<ul>
										<?php
										foreach ($images as $image) {
											$image_title = $image->post_title;
											$image_html = wp_get_attachment_image($image->ID, 'large');
											$image_url = wp_get_attachment_url($image->ID, false);
											echo "<a class='fancybox' data-fancybox='".get_the_ID()."' href='$image_url' title='$image_title'>$image_title</a>";
										} ?>
									</ul><?php
									} ?>
								</div>
								<div class="projects-showcase-description">
									<h6><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h6>
									<span class="read-more"><a href="<?php the_permalink(); ?>"><?php echo "Read More"; ?></a></span>
								</div>
							</div>
						</div><?php
						endwhile; ?>
					</div>
				</div>
				<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			</div>
		</div>
	</div>
</div>
<?php
endwhile; endif;

// The posts
get_footer();
?>
