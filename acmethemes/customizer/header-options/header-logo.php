<?php
/*adding sections for header logo options*/
$wp_customize->add_section( 'corporate-plus-header-logo', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Logo Options', 'corporate-plus' ),
    'panel'          => 'corporate-plus-header-panel',
) );

/*header logo*/
$wp_customize->add_setting( 'corporate_plus_theme_options[corporate-plus-header-logo]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['corporate-plus-header-logo'],
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'corporate_plus_theme_options[corporate-plus-header-logo]',
        array(
            'label'		=> __( 'Logo', 'corporate-plus' ),
            'section'   => 'corporate-plus-header-logo',
            'settings'  => 'corporate_plus_theme_options[corporate-plus-header-logo]',
            'type'	  	=> 'image',
            'priority'  => 10
        )
    )
);

/*header logo alternative*/
$wp_customize->add_setting( 'corporate_plus_theme_options[corporate-plus-header-alt]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['corporate-plus-header-alt'],
    'sanitize_callback' => 'sanitize_text_field',
) );
$wp_customize->add_control( 'corporate_plus_theme_options[corporate-plus-header-alt]', array(
    'label'		=> __( 'Logo Alt Text', 'corporate-plus' ),
    'section'   => 'corporate-plus-header-logo',
    'settings'  => 'corporate_plus_theme_options[corporate-plus-header-alt]',
    'type'	  	=> 'text',
    'priority'  => 20
) );

/*header logo/text display options*/
$wp_customize->add_setting( 'corporate_plus_theme_options[corporate-plus-header-id-display-opt]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['corporate-plus-header-id-display-opt'],
    'sanitize_callback' => 'corporate_plus_sanitize_select'
) );
$choices = corporate_plus_header_id_display_opt();
$wp_customize->add_control( 'corporate_plus_theme_options[corporate-plus-header-id-display-opt]', array(
    'choices'  	=> $choices,
    'label'		=> __( 'Logo/Site Title-Tagline Display Options', 'corporate-plus' ),
    'section'   => 'corporate-plus-header-logo',
    'settings'  => 'corporate_plus_theme_options[corporate-plus-header-id-display-opt]',
    'type'	  	=> 'radio',
    'priority'  => 30
) );