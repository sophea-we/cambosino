<?php
/**
 * CAMBO-SINO Theme Customizer
 *
 * @package cambosino
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cambosino_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'cambosino_customize_partial_blogname',
		));
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'cambosino_customize_partial_blogdescription',
		));
	}

	// Contact info section
    $wp_customize->add_section( 'cambosino_contact_info', array(
       'title' => 'Contact Info',
       'priority' => 35
    ));

    $wp_customize->add_setting( 'email', array(
        'default' => ''
    ));

    $wp_customize->add_control( 'email', array(
        'label' => 'Email',
        'section' => 'cambosino_contact_info',
        'type' => 'email'
    ));

	$wp_customize->add_setting( 'phone_number', array(
	   'default' => ''
    ));

	$wp_customize->add_control( 'phone_number', array(
	    'label' => 'Phone Number',
        'section' => 'cambosino_contact_info',
        'type' => 'text'
    ));

    $wp_customize->add_setting( 'address', array(
        'default' => ''
    ));

    $wp_customize->add_control( 'address', array(
        'label' => 'Address',
        'section' => 'cambosino_contact_info',
        'type' => 'textarea'
    ));

    $wp_customize->add_setting( 'facebook_url', array(
        'default' => ''
    ));

    $wp_customize->add_control( 'facebook_url', array(
        'label' => 'Facebook URL',
        'section' => 'cambosino_contact_info',
        'type' => 'text'
    ));

    $wp_customize->add_setting( 'instagram_url', array(
        'default' => ''
    ));

    $wp_customize->add_control( 'instagram_url', array(
        'label' => 'Instagram URL',
        'section' => 'cambosino_contact_info',
        'type' => 'text'
    ));

    $wp_customize->add_setting( 'linkedin_url', array(
        'default' => ''
    ));

    $wp_customize->add_control( 'linkedin_url', array(
        'label' => 'Linkedin URL',
        'section' => 'cambosino_contact_info',
        'type' => 'text'
    ));

    // Footer section
    $wp_customize->add_section( 'cambosino_footer', array(
        'title' => 'Footer',
        'priority' => 150
    ));

    $wp_customize->add_setting( 'copyright', array(
        'default' => ''
    ));

    $wp_customize->add_control( 'copyright', array(
        'label' => 'Copyright',
        'section' => 'cambosino_footer',
        'type' => 'text'
    ));

    // General
    $wp_customize->add_section( 'cambosino_general', array(
        'title' => 'General',
        'priority' => 40
    ));

    $wp_customize->add_setting('default-thumb', array(
        'default' => ''
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize, 'default-thumb', array(
                'label' => __('Default Thumbnail', 'cambosino'),
                'section' => 'cambosino_general'
            )
        )
    );
}
add_action( 'customize_register', 'cambosino_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function cambosino_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function cambosino_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function cambosino_customize_preview_js() {
	wp_enqueue_script( 'cambosino-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'cambosino_customize_preview_js' );
