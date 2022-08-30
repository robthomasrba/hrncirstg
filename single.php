<?php
/**
* Template Name: Our Projects
*/

global $wp;

$home_url = home_url($wp->request);

// The header
get_header(); ?>
<div id="projects-hero" data-parallax="scroll" data-image-src="<?php bloginfo( 'template_directory' ); ?>/images/hero-news.jpg">
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
</div>

<div id="main-services" class="blog-posts">
	<div class="stripes" style="z-index: 1;"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
			<div class="col-lg-10">
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-8 single-blog-post-wrapper">
						<span class="tags"><?php the_tags('', ', ', ' | Tags'); ?></span>
						<h4><?php echo the_title(); ?></h4>
						<p><?php echo the_content(); ?></p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-4">
						<div class="social-media social-media-blog-post">
							<div class="share-post">Share:</div>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $home_url; ?>" class="facebook" target="_blank"><span>Share</span></a>
							<a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $home_url; ?>" class="linked-in" target="_blank"><span>Share</span></a>
							<a href="https://twitter.com/intent/tweet?url=<?php echo $home_url; ?>" class="twitter" target="_blank"><span>Share</span></a>
						</div>
						<?php dynamic_sidebar('Sidebar 1');
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 1,
							'orderby' => 'date',
		          'order' => 'DESC',
						);
						$posts_query = new WP_Query( $args );
						while ($posts_query->have_posts()) : $posts_query->the_post();
						?>
						<div class="blog-wrapper">
							<div class="blog-posts-wrapper">
								<span class="tags"><?php the_tags('', ', ', ' | Tags'); ?></span>
								<h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
								<p><?php echo the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="button-posts">Read More</a>
							</div>
						</div><?php
						endwhile;
						wp_reset_postdata();
						wp_reset_query(); ?>
					</div>
				</div>
			</div>
			<div class="col col-lg-1 d-none d-sm-none d-md-none d-lg-block d-xl-block"></div>
		</div>
	</div>
</div><?php

// The posts
get_footer();
?>
