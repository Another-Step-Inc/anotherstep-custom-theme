<?php
/**
 * Another Step Theme Customizer: Footer Settings.
 *
 * @package Another_Step_Theme
 */

/**
 * Register Footer General Settings (e.g., description).
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 */
function another_step_customize_register_footer_settings( $wp_customize ) {
    // Add a section for Footer customization
    $wp_customize->add_section('another_step_footer_settings', array(
        'title' => __('Footer Settings', 'another-step-theme'),
        'priority' => 120,
    ));

    // Footer Logo
    $wp_customize->add_setting('another_step_footer_logo_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'another_step_footer_logo_image_control', array(
        'label' => __('Footer Logo', 'another-step-theme'),
        'section' => 'another_step_footer_settings',
        'settings' => 'another_step_footer_logo_image',
    )));

    // Footer Sub description
    $wp_customize->add_setting('another_step_footer_subdescription', array(
        'default'           => 'A compelling sub description/mission to grab attention.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('another_step_footer_subdescription_control', array(
        'label'       => __( 'Subheadline', 'another-step-theme' ),
        'section'     => 'another_step_footer_settings',
        'settings'    => 'another_step_footer_subdescription',
        'type'        => 'textarea',        
    ));
    
    // Main Office Details
    $wp_customize->add_setting( 'another_step_footer_main_office_heading', array(
        'default'           => __( 'Main Office', 'another-step-theme' ),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'another_step_footer_main_office_heading_control', array(
        'label'    => __( 'Main Office Heading', 'another-step-theme' ),
        'section'  => 'another_step_footer_settings',
        'settings' => 'another_step_footer_main_office_heading',
        'type'     => 'text',
    ));

    $wp_customize->add_setting( 'another_step_footer_main_office_address', array(
        'default'           => '455 West Orchard Street, Kings Mountain, NC 280867',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control( 'another_step_footer_main_office_address_control', array(
        'label'    => __( 'Main Office Address', 'another-step-theme' ),
        'section'  => 'another_step_footer_settings',
        'settings' => 'another_step_footer_main_office_address',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting( 'another_step_footer_main_office_phone', array(
        'default'           => '+088 (249) 647-27-10',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'another_step_footer_main_office_phone_control', array(
        'label'    => __( 'Main Office Phone', 'another-step-theme' ),
        'section'  => 'another_step_footer_settings',
        'settings' => 'another_step_footer_main_office_phone',
        'type'     => 'text',
    ));

    $wp_customize->add_setting( 'another_step_footer_main_office_email', array(
        'default'           => 'mainoffice@example.com',
        'sanitize_callback' => 'sanitize_email',
    ) );
    $wp_customize->add_control( 'another_step_footer_main_office_email_control', array(
        'label'    => __( 'Main Office Email', 'another-step-theme' ),
        'section'  => 'another_step_footer_settings',
        'settings' => 'another_step_footer_main_office_email',
        'type'     => 'email',
    ));


    // Satellite Office Details
    $wp_customize->add_setting( 'another_step_footer_satellite_office_heading', array(
        'default'           => __( 'Satellite Office', 'another-step-theme' ),
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'another_step_footer_satellite_office_heading_control', array(
        'label'    => __( 'Satellite Office Heading', 'another-step-theme' ),
        'section'  => 'another_step_footer_settings',
        'settings' => 'another_step_footer_satellite_office_heading',
        'type'     => 'text',
    ));

    $wp_customize->add_setting( 'another_step_footer_satellite_office_address', array(
        'default'           => '123 Elm Street, City, State ZIP Code',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control( 'another_step_footer_satellite_office_address_control', array(
        'label'    => __( 'Satellite Office Address', 'another-step-theme' ),
        'section'  => 'another_step_footer_settings',
        'settings' => 'another_step_footer_satellite_office_address',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting( 'another_step_footer_satellite_office_phone', array(
        'default'           => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'another_step_footer_satellite_office_phone_control', array(
        'label'    => __( 'Satellite Office Phone', 'another-step-theme' ),
        'section'  => 'another_step_footer_settings',
        'settings' => 'another_step_footer_satellite_office_phone',
        'type'     => 'text',
    ));

    $wp_customize->add_setting( 'another_step_footer_satellite_office_email', array(
        'default'           => 'satellite@example.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control( 'another_step_footer_satellite_office_email_control', array(
        'label'    => __( 'Satellite Office Email', 'another-step-theme' ),
        'section'  => 'another_step_footer_settings',
        'settings' => 'another_step_footer_satellite_office_email',
        'type'     => 'email',
    ));
}