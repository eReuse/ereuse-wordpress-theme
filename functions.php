<?php

/**
 * Enqueue scripts & styles
 */
function ereuse_theme_enqueue_styles() {
	$parent_style  = 'parent-style';
	$parent_themes = Array( $parent_style, 'main-style' );
	$override      = get_stylesheet_directory_uri() . '/override.css';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bootstrap-style', $override );
	wp_enqueue_style( 'bootstrap-theme-style', $override );
	wp_enqueue_style( 'bootstrap-basic-style', $override );
	wp_enqueue_style( 'main-style', $override );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', $parent_themes);


}

add_action( 'wp_enqueue_scripts', 'ereuse_theme_enqueue_styles' );

register_nav_menus( array(
	'footer-menu' => __( 'Footer Menu', 'ereuse-wordpress-theme' ),
) );
