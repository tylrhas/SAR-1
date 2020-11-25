<?php

include_once get_template_directory() . '/inc/menu.php';


function post_type_faq() {
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'FAQs', 'Post Type General Name', 'sar-1' ),
			'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'sar-1' ),
			'menu_name'           => __( 'FAQs', 'sar-1' ),
			'all_items'           => __( 'All FAQs', 'sar-1' ),
			'view_item'           => __( 'View FAQ', 'sar-1' ),
			'add_new_item'        => __( 'Add New FAQ', 'sar-1' ),
			'add_new'             => __( 'Add New', 'sar-1' ),
			'edit_item'           => __( 'Edit FAQ', 'sar-1' ),
			'update_item'         => __( 'Update FAQ', 'sar-1' ),
			'search_items'        => __( 'Search FAQs', 'sar-1' ),
			'not_found'           => __( 'Not Found', 'sar-1' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'sar-1' ),
		);
		$args = array(
			'label'               => __( 'faq', 'sar-1' ),
			'description'         => __( 'faq post type', 'sar-1' ),
			'labels'              => $labels,
			// Features this CPT supports in Post Editor
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			// You can associate this CPT with a taxonomy or custom taxonomy. 
			//'taxonomies'          => array( 'FAQ type' ),
			/* A hierarchical CPT is like Pages and can have
			* Parent and child items. A non-hierarchical CPT
			* is like Posts.
			*/	
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 10,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'faq', $args );
}
add_action( 'init', 'post_type_faq', 0 );


function post_type_files() {
	$labels = array(
		'name'                => _x( 'Files', 'Post Type General Name', 'sar-1' ),
		'singular_name'       => _x( 'File', 'Post Type Singular Name', 'sar-1' ),
		'menu_name'           => __( 'Member Files', 'sar-1' ),
		'all_items'           => __( 'All Files', 'sar-1' ),
		'view_item'           => __( 'View File', 'sar-1' ),
		'add_new_item'        => __( 'Add New File', 'sar-1' ),
		'add_new'             => __( 'Add New', 'sar-1' ),
		'edit_item'           => __( 'Edit File', 'sar-1' ),
		'update_item'         => __( 'Update File', 'sar-1' ),
		'search_items'        => __( 'Search Files', 'sar-1' ),
		'not_found'           => __( 'Not Found', 'sar-1' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sar-1' ),
	);
	
	$args = array(
		'label'               => __( 'files', 'twentythirteen' ),
		'description'         => __( 'portfolio post type', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'author', 'comments', 'revisions' ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		//'taxonomies'          => array( 'project type' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'files', $args );

}
add_action( 'init', 'post_type_files', 0 );


function post_type_MemberFaq() {

    // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( 'Member FAQs', 'Post Type General Name', 'sar-1' ),
            'singular_name'       => _x( 'Member FAQ', 'Post Type Singular Name', 'sar-1' ),
            'menu_name'           => __( 'Member FAQs', 'sar-1' ),
            'all_items'           => __( 'All Member FAQs', 'sar-1' ),
            'view_item'           => __( 'View Member FAQ', 'sar-1' ),
            'add_new_item'        => __( 'Add New Member FAQ', 'sar-1' ),
            'add_new'             => __( 'Add New', 'sar-1' ),
            'edit_item'           => __( 'Edit Member FAQ', 'sar-1' ),
            'update_item'         => __( 'Update Member FAQ', 'sar-1' ),
            'search_items'        => __( 'Search Member FAQs', 'sar-1' ),
            'not_found'           => __( 'Not Found', 'sar-1' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'sar-1' ),
        );
        
    // Set other options for Custom Post Type
        
        $args = array(
            'label'               => __( 'member faq', 'sar-1' ),
            'description'         => __( 'member faq post type', 'sar-1' ),
            'labels'              => $labels,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            //'taxonomies'          => array( 'FAQ type' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */	
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 10,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        
        // Registering your Custom Post Type
        register_post_type('member_faq', $args);
    
}
add_action( 'init', 'post_type_MemberFaq', 0 );


/**
 * General Theme Settings
 *
 * @since v1.0
 */
if ( ! function_exists( 'sar_1_setup_theme' ) ) :
	function sar_1_setup_theme() {

		// Theme Support
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		) );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Default Attachment Display Settings
		update_option( 'image_default_align', 'none' );
		update_option( 'image_default_link_type', 'none' );
		update_option( 'image_default_size', 'large' );

		// Custom CSS-Styles of Wordpress Gallery
		add_filter( 'use_default_gallery_style', '__return_false' );

	}
	add_action( 'after_setup_theme', 'sar_1_setup_theme' );
endif;

/**
 * Loading All CSS Stylesheets and Javascript Files
 *
 * @since v1.0
 */
function sar_1_scripts_loader() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// 1. Styles
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', false, $theme_version, 'all' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', false, $theme_version, 'all' ); // main.scss: Compiled Framework source + custom styles

	if ( is_rtl() ) {
		wp_enqueue_style( 'rtl', get_template_directory_uri() . '/assets/css/rtl.css', false, $theme_version, 'all' );
	}

	// 2. Scripts
	wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/assets/js/main.bundle.js', array( 'jquery' ), $theme_version, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sar_1_scripts_loader' );

// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Contact Us', 'woocommerce' ); 
}

add_filter( 'woocommerce_loop_add_to_cart_link', 'replacing_add_to_cart_button', 10, 2 );
function replacing_add_to_cart_button( $button, $product  ) {
    $button_text = __("Contact Us", "woocommerce");
    $button = '<a class="button" href="' . esc_url( get_permalink( get_page_by_title( 'Contact Us' ) ) ). '">' . $button_text . '</a>';

    return $button;
}