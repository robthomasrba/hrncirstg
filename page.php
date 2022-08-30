<?php
// The header
get_header();

if (is_home() || is_front_page()) :
	get_template_part('content');
else:
	// The content
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post(); ?>
			<?php the_content();
		endwhile;
	endif;
endif;

// The posts
get_footer();
?>
