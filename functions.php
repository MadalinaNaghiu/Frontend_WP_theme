<?php 
if ( ! function_exists( 'iap_setup' ) ) :
	function iap_setup() {
		// add support for featured image
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'featured-image', 220, 180 ); 
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'iaptheme' ),
				'secondary'  => __( 'Secondary Menu', 'iaptheme' ),
			)
		);
	}
add_action( 'after_setup_theme', 'iap_setup' );
endif; // iap_setup
/**
 * Enqueues scripts and styles.
 */
if ( ! function_exists( 'iap_scripts' ) ) :
	function iap_scripts() {
		
		wp_enqueue_style( 'pt_serif_font', 'https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i', array(), false, 'all' );
		wp_enqueue_style( 'bootstrap-grid', get_stylesheet_directory_uri() . '/css/bootstrap-grid.css', array(), false, 'all' );
		wp_enqueue_style( 'main-style', get_stylesheet_uri() , array(), false, 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'iap_scripts' );
endif;