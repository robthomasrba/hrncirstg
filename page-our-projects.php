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
				<h2>Representative Projects</h2>
			</div>
		</div>
	</div>
</div>

<div id="main-projects">
	<nav class="navbar navbar-expand sticky-top projects-nav">
		<div class="stripes"></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#projects-nav">
      <span class="navbar-toggler-icon"></span>
    </button>
		<div class="navbar-collapse collapse" id="projects-nav">
      	<ul class="navbar-nav">
        <li class="nav-item active">
        	<a class="nav-link nav-link-tenant" data-filter=".tenant-spaces" id="tenant-spaces">Tenant Spaces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-capital" data-filter=".capital-improvement" id="capital-improvement">Capital Improvement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-special" data-filter=".special-projects" id="special-projects">Special Projects</a>
        </li>
		</ul>
    </div>
	</nav>
	<div class="container">
		<div class="row main-projects-title">
			<div class="col-lg-12">
<!-- 					<h2>All Projects</h2> -->
					
					<div id="cat-tenant-spaces" class="active-cc cat-content">
						<h2><?php echo get_field('tenant_spaces_heading'); ?></h2>
						<p><?php echo get_field('tenant_spaces_description'); ?></p> 
					</div>
					<div id="cat-capital-improvement" class="cat-content">
						<h2><?php echo get_field('capital_improvement_heading'); ?></h2>
						<p><?php echo get_field('capital_improvement_description'); ?></p>
					</div>
					<div id="cat-special-projects" class="cat-content">
						<h2><?php echo get_field('special_projects_heading'); ?></h2>
						<p><?php echo get_field('special_projects_description'); ?></p>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			<div class="col-lg-10">
				<div class="row sort-projects">
					<?php
					$args = array(
						'post_type' => 'projects',
						'posts_per_page' => -1,
						'orderby' => 'date',
	          'order' => 'ASC',
					);
					$projects_query = new WP_Query( $args );
					while ($projects_query->have_posts()) : $projects_query->the_post(); ?>
					<div class="col-xl-4 col-lg-6 col-md-6 mix <?php
					$posttags = get_the_tags();
					if ($posttags) {
					  foreach($posttags as $tag) {
					    echo $tag->slug . ' ';
					  }
					}
					?>">
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
								<span><?php the_field('subtitle'); ?></span>
							</div>
						</div>
					</div><?php
					endwhile; ?>
				</div>
			</div>
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
		</div>
	</div>
</div><?php

// The posts
get_footer();
?>


<script>
jQuery(document).ready(function(){
    jQuery("#projects-nav a").click(function(){
    		jQuery('.active-cc').removeClass('active-cc');
        var catID = jQuery(this).attr("id");
        var catContent = '#cat-' + catID ;
        jQuery(catContent).addClass('active-cc');
        
    });
});
</script>


<style>
	
.active-cc.cat-content{display: block;}	
.cat-content{display: none;}
</style>