<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

function sdigital_add_uiscripts() {
	wp_register_script('sdigital-uicontrol', get_stylesheet_directory_uri() . '/assets/js/uicontrol.js', array('jquery'), null, true);
	wp_enqueue_script('sdigital-uicontrol');
}

add_action( 'wp_enqueue_scripts', 'sdigital_add_uiscripts' );