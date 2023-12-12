<?php
/**
 * Theme functions file
 *
 * @since 20231212
 * @author Josh Robbs <josh@joshrobbs.com>
 * @package JWR_Theme_2024
 */

namespace JWR_Theme_2024;

defined( 'ABSPATH' ) || exit;

/**
 * Theme setup
 *
 * @since 20231212
 * @return void
 */
function setup() {
	\add_theme_support( 'post-thumbnails' );
	\add_theme_support( 'html5', array( 'gallery', 'style', 'search-form', 'caption', 'script' ) );

	\register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'jwr-theme-2024' ),
			'footer'  => __( 'Footer Menu', 'jwr-theme-2024' ),
			'social'  => __( 'Social Menu', 'jwr-theme-2024' ),
		)
	);
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );

/**
 * Enqueue scripts and styles
 *
 * @return void
 */
function enqueue_scripts() {
	wp_enqueue_style(
		'jwr-theme-2024',
		get_stylesheet_directory_uri() . '/css/app.css',
		array(),
		filemtime( get_stylesheet_directory() . '/css/app.css' )
	);
}

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts' );
