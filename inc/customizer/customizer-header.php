<?php
/**
 * Another Step Theme Customizer: Header Settings.
 *
 * @package Another_Step_Theme
 */

/**
 * Register Header CTA Button Customizer Options.
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 */
function another_step_customize_register_header_settings( $wp_customize ) {
    $wp_customize->add_section( 'another_step_header_settings', array(
        'title'    => __( 'Header Settings', 'another-step-theme' ),
        'priority' => 80,
    ));

    // Header CTA Button Text
    $wp_customize->add_setting( 'header_cta_text', array(
        'default'           => __( 'Donate Now', 'another-step-theme' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ) );
    $wp_customize->add_control( 'header_cta_text_control', array(
        'label'    => __( 'Header CTA Button Text', 'another-step-theme' ),
        'section'  => 'another_step_header_settings',
        'type'     => 'text',
        'settings' => 'header_cta_text',
    ));

    // Header CTA Button URL
    $wp_customize->add_setting( 'header_cta_url', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control( 'header_cta_url_control', array(
        'label'    => __( 'Header CTA Button URL', 'another-step-theme' ),
        'section'  => 'another_step_header_settings',
        'type'     => 'url',
        'settings' => 'header_cta_url',
    ));
}