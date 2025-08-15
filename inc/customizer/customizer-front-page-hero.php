<?php
/**
 * Another Step Theme Customizer: Front Page Hero Settings.
 *
 * @package Another_Step_Theme
 */

/**
 * Register Front Page Hero Settings (e.g., description).
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 */

function another_step_customize_register_front_page_hero_settings( $wp_customize ) {
    // Add a section for the Front Page Hero Section
    $wp_customize->add_section('front_page_hero_section', array(
        'title' => __('Front Page Hero Section', 'another-step-theme'),
        'priority' => 40,
    ));

    // Hero Background Image
    $wp_customize->add_setting('front_page_hero_background_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label' => __('Background Image', 'another-step-theme'),
        'section' => 'front_page_hero_section',
        'settings' => 'front_page_hero_background_image',
    )));

    // Hero Headline
    $wp_customize->add_setting( 'front_page_hero_headline', array(
        'default'           => 'Your Awesome Headline Here',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'front_page_hero_headline', array(
        'label'       => __( 'Headline', 'another-step-theme' ),
        'section'     => 'front_page_hero_section',
        'settings'    => 'front_page_hero_headline',
        'type'        => 'text',
    ));

    // Hero Subheadline
    $wp_customize->add_setting('front_page_hero_subheadline', array(
        'default'           => 'A compelling subheadline to grab attention.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('front_page_hero_subheadline', array(
        'label'       => __( 'Subheadline', 'another-step-theme' ),
        'section'     => 'front_page_hero_section',
        'settings'    => 'front_page_hero_subheadline',
        'type'        => 'textarea',        
    ));

    // Hero Button 1 Text
    $wp_customize->add_setting( 'front_page_hero_button_text_1', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'front_page_hero_button_text_1', array(
        'label'       => __( 'Button 1 Text', 'another-step-theme' ),
        'section'     => 'front_page_hero_section',
        'settings'    => 'front_page_hero_button_text_1',
        'type'        => 'text',
    ));

    // Hero Button 1 URL
    $wp_customize->add_setting( 'front_page_hero_button_url_1', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'front_page_hero_button_url_1', array(
        'label'       => __( 'Button 1 URL', 'another-step-theme' ),
        'section'     => 'front_page_hero_section',
        'settings'    => 'front_page_hero_button_url_1',
        'type'        => 'url',
    ));

    // Hero Button 2 Text
    $wp_customize->add_setting( 'front_page_hero_button_text_2', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'front_page_hero_button_text_2', array(
        'label'       => __( 'Button 2 Text', 'another-step-theme' ),
        'section'     => 'front_page_hero_section',
        'settings'    => 'front_page_hero_button_text_2',
        'type'        => 'text',
    ));

    // Hero Button 2 URL
    $wp_customize->add_setting( 'front_page_hero_button_url_2', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'front_page_hero_button_url_2', array(
        'label'       => __( 'Button 2 URL', 'another-step-theme' ),
        'section'     => 'front_page_hero_section',
        'settings'    => 'front_page_hero_button_url_2',
        'type'        => 'url',
    ));
}