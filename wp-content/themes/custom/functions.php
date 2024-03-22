<?php
/**
 * Custom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Custom
 * @since Custom 1.0
 */

/**
 * Enqueue header stylesheets.
 */
function custom_theme_enqueue_styles() {
 	wp_enqueue_style( 'custom-theme-header-style', get_theme_file_uri('css/header.css') );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_enqueue_styles' );