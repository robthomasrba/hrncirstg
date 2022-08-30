<?php
/* Featured Images
 ---------------------------------------------------------------------------- */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

/* Sidebars
 ---------------------------------------------------------------------------- */
register_sidebars(30, array('name'=>'Sidebar %d'));

/* Tags
 ---------------------------------------------------------------------------- */
function remove_p_tags() {
	remove_filter( 'the_content', 'wpautop' );
	remove_filter( 'the_excerpt', 'wpautop' );
}

add_action( 'wp_head', 'remove_p_tags' );

/* Projects
 ---------------------------------------------------------------------------- */
function create_projects_post_type() {

	register_post_type( 'projects',
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Project' )
			),
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'projects'),
			'capability_type' => 'post',
			'taxonomies' => array('post_tag','category'),
			'show_in_rest' => true,
		)
	);
}

// Hook
add_action( 'init', 'create_projects_post_type' );

/* Case Studies
 ---------------------------------------------------------------------------- */
function create_case_studies_post_type() {

	register_post_type( 'case_studies',
		array(
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Study' )
			),
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'case-studies'),
			'capability_type' => 'post',
			'show_in_rest' => true,
		)
	);
}

// Hook
add_action( 'init', 'create_case_studies_post_type' );

/* Testimonials
 ---------------------------------------------------------------------------- */
function create_testimonials_post_type() {

	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name' => __( 'Testimonials' ),
				'singular_name' => __( 'Testimonial' )
			),
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testimonials'),
			'capability_type' => 'post',
			'show_in_rest' => true,
		)
	);
}

// Hook
add_action( 'init', 'create_testimonials_post_type' );

/* Leaders
 ---------------------------------------------------------------------------- */
function create_leaders_post_type() {

	register_post_type( 'leaders',
		array(
			'labels' => array(
				'name' => __( 'Leaders' ),
				'singular_name' => __( 'Leader' )
			),
			'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields','page-attributes', ),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testimonials'),
			'capability_type' => 'post',
			'show_in_rest' => true,
		)
	);
}

// Hook
add_action( 'init', 'create_leaders_post_type' );

?>
