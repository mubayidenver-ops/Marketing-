<?php
/**
 * Digital Smart Hub Editorial theme setup.
 *
 * @package DigitalSmartHubEditorial
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function dsh_editorial_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
	add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 240, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'dsh_editorial_setup' );

function dsh_editorial_enqueue_styles() {
	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style(
		'dsh-editorial-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		$theme_version
	);
}
add_action( 'wp_enqueue_scripts', 'dsh_editorial_enqueue_styles' );
