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

include('custom-shortcodes.php');

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

function sdigital_customizer_register( $wp_customize ) {
	$wp_customize->add_setting( 'sdigital_setting_phone' , array(
		'default'   => '(000) 000-0000',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'sdigital_setting_address' , array(
		'default'   => '1172 Murphy Avenue, Suite #208 San Jose, CA',
		'transport' => 'refresh',
	));

	$wp_customize->add_setting( 'sdigital_setting_email' , array(
		'default'   => 'hello@salazardigital.net',
		'transport' => 'refresh',
	));

	$wp_customize->add_section( 'sdigital_menusettings_section' , array(
		'title'      => __( 'Salazar Digital Menu Settings' ),
		'priority'   => 10,
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdigital_setting_phone_control', array(

		'label'          => __( 'Phone Number' ),
		'section'        => 'sdigital_menusettings_section',
		'settings'       => 'sdigital_setting_phone',
		'type'           => 'text'

	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdigital_setting_email_control', array(

		'label'          => __( 'Email' ),
		'section'        => 'sdigital_menusettings_section',
		'settings'       => 'sdigital_setting_email',
		'type'           => 'text'

	)));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sdigital_setting_address_control', array(

		'label'          => __( 'Address' ),
		'section'        => 'sdigital_menusettings_section',
		'settings'       => 'sdigital_setting_address',
		'type'           => 'text'

	)));

}

add_action( 'customize_register', 'sdigital_customizer_register' );