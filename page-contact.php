<?php
/**
* Template Name: Contact
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
				<h2>Let's Work Together</h2>
			</div>
		</div>
	</div>
</div>

<div id="main-services" class="contact-wrapper">
	<div class="stripes" style="z-index: 1;"></div>
	<div id="main-projects">
		<div id="preconstruction-description" class="container">
			<div class="row main-projects-title">
				<div class="col-lg-12 fade-bottom-up">
					<h2>Contact Us</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="contact-icons">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/contact-in-person.png" />
					</div>
					<div class="contact-types">
						<h6>In Person</h6>
						<p id="contact-person">3710 Rawlins St., Suite 850<br />Dallas, TX 75219</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="contact-icons">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/contact-by-phone.png" />
					</div>
					<div class="contact-types">
						<h6>By Phone</h6>
						<p>214.821.4100</p>
					</div>
				</div>
				<div class="col-xl-4 col-lg-12 col-md-12">
					<div class="contact-icons">
						<img src="<?php bloginfo( 'template_directory' ); ?>/images/contact-by-email.png" />
					</div>
					<div class="contact-types">
						<h6>By Email</h6>
						<p><a href="mailto:info@hrncir-construction.com">info@hrncir-construction.com</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
endwhile; endif;

// The posts
get_footer();
?>
