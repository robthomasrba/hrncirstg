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
<?php
$single_image = get_field('middle_section_image',get_the_ID());
if($single_image):
?>
<div class="single-image-sec">
	<div class="single-image-wrap">
		<img src="<?php echo $single_image; ?>">
	</div>
</div>
<?php endif; ?>

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
</div><?php
	endwhile;
endif;
?>
<?php
$git_image = get_field('get_in_touch',get_the_ID());
?>
<div id="get-in-touch" class="git-project-sec">
  <div class="container">
    <div class="row get-in-touch">
		<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
      	<div class="col-lg-7 get-in-touch-description fade-left-to-right-footer">
	        <h2>Get In Touch.</h2>
			<div class="get-in-touch-description-cta">
		        <p>If you’re interested in learning more about HRNCIR Construction, please get in touch.</p>
				<button class="shutter-in-horizontal"><a href="<?php echo site_url('contact'); ?>">Contact Us</a></button>
			</div>
      	</div>
		<div class="col-12 get-in-touch-hidden d-block d-sm-block d-md-block d-lg-none d-xl-none">
			<?php 
			if($git_image):
			?>
			<img class="img-fluid" src="<?php echo $git_image; ?>" />
			<?php 
			else:
			?>
			<img class="img-fluid ma" src="<?php bloginfo( 'template_directory' ); ?>/images/home-get-in-touch.jpg" />
			<?php
			endif;
			?>
		</div>
		<?php 
		if($git_image):
		?>
 	 	<div class="get-in-touch-img fade-right-to-left" style="background-image: url('<?php echo $git_image ;?>');"></div>
 	 	<?php 
		else:
		?>
 	 	<div class="get-in-touch-img fade-right-to-left" style="background-image: url('/wp-content/themes/hrncir/images/home-get-in-touch.jpg');"></div>
 	 	<?php
		endif;
		?>
    </div>
  </div>
</div>

<?php
// The posts
get_footer();
?>

<style type="text/css">
	
#single-project-gallery .home-projects-description{right: initial;background: transparent;top: 600px;}	
#single-project-gallery .project-slider-navigation{position: relative;bottom: initial;}
#single-project-gallery .project-slider-navigation .prev{display: flex;align-items: center;justify-content: center;}
#single-project-gallery .project-slider-navigation .next{display: flex;align-items: center;justify-content: center;}
.git-sec{display: none;}

.single-image-wrap img{
    height: 650px;
    width: 100%;
    object-fit: cover;
}
.single-image-sec {
    margin-bottom: 120px;
}

</style>