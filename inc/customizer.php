<?php
/**
 * WordPress Customizer Example Theme Customizer
 *
 * @package WordPress_Customizer_Example
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wordpress_customizer_example_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
		// Create a new settings section.
	$wp_customize->add_section(
		'custom_customizer_logos',
		array(
			'title' => __( 'Logos', 'wordpress-customizer-example' ),
			'priority' => 30,
		)
	);

	// Add the header logo setting.
	$wp_customize->add_setting(
		'header_logo',
		array(
			'default' => '',
			'transport' => 'postMessage',
		)
	);

	// Add the header logo control.
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'custom_customizer_logos_header',
			array(
				'label' => __( 'Header Logo (replaces text)', 'wordpress-customizer-example' ),
				'section' => 'custom_customizer_logos',
				'settings' => 'header_logo', // Must match the setting name.
				'priority' => 1,
			)
		)
	);

	// Add the footer logo setting.
	$wp_customize->add_setting(
		'footer_logo',
		array(
			'default' => '',
			'transport' => 'postMessage',
		)
	);

	// Add the footer logo control.
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'custom_customizer_logos_footer',
			array(
				'label' => __( 'Footer Logo', 'wordpress-customizer-example' ),
				'section' => 'custom_customizer_logos',
				'settings' => 'footer_logo', // Must match the setting name.
				'priority' => 2,
			)
		)
	);
}
add_action( 'customize_register', 'wordpress_customizer_example_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wordpress_customizer_example_customize_preview_js() {
	wp_enqueue_script( 'wordpress_customizer_example_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wordpress_customizer_example_customize_preview_js' );
