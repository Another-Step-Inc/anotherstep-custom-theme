<?php
/**
 * Another Step Theme Customizer: Top Bar Settings.
 *
 * @package Another_Step_Theme
 */

/**
 * Register Top Bar Settings (e.g., description).
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 */

function another_step_customize_register_top_bar_settings( $wp_customize ) {
    // Add a section for the top bar
    $wp_customize->add_section( 'top_bar_section', array(
        'title' => __( 'Top Bar', 'another-step-theme'),
        'priority' => 30,
    ));

    // Add a setting for the left phone text
    $wp_customize->add_setting( 'top_bar_phone_number', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for the left phone text
    $wp_customize->add_control( 'top_bar_phone_number', array(
        'label' => __('Phone Number', 'another-step-theme'),
        'section' => 'top_bar_section',
        'type' => 'text',
    ));

    // Add a setting for the middle text
    $wp_customize->add_setting( 'top_bar_middle_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Add a control for the middle text
    $wp_customize->add_control( 'top_bar_middle_text', array(
        'label' => __('Middle Text', 'another-step-theme'),
        'section' => 'top_bar_section',
        'type' => 'text',
    ));
}