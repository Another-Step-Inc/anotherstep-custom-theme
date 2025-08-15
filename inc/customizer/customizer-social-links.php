<?php
/**
 * Another Step Theme Customizer: Social Links Settings.
 *
 * @package Another_Step_Theme
 */

/**
 * Register Social Links Settings (e.g., description).
 *
 * @param WP_Customize_Manager $wp_customize Customizer instance.
 */

function another_step_customize_register_social_links_settings( $wp_customize ) {
    $wp_customize->add_section('another_step_social_links_settings', array(
        'title'       => __( 'Social Links', 'another-step-theme' ),
        'priority'    => 90,
        'description' => __( 'Enter the full URLs for your social media profiles.', 'another-step-theme' ),        
    ));

    // Facebook
    $wp_customize->add_setting('another_step_social_facebook', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('another_step_social_facebook_control', array(
        'label'             => __('Facebook URL', 'another-step-theme'),
        'section'           => 'another_step_social_links_settings',
        'type'              => 'url',
        'settings'          => 'another_step_social_facebook'
    ));

    // Twitter
    $wp_customize->add_setting('another_step_social_instagram', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('another_step_social_instagram_control', array(
        'label'             => __('Twitter URL', 'another-step-theme'),
        'section'           => 'another_step_social_links_settings',
        'type'              => 'url',
        'settings'          => 'another_step_social_instagram'
    ));

    // YouTube
    $wp_customize->add_setting('another_step_social_youtube', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('another_step_social_youtube_control', array(
        'label'             => __('YouTube URL', 'another-step-theme'),
        'section'           => 'another_step_social_links_settings',
        'type'              => 'url',
        'settings'          => 'another_step_social_youtube'
    ));

    // LinkedIn
    $wp_customize->add_setting('another_step_social_linkedin', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control('another_step_social_linkedin_control', array(
        'label'             => __('LinkedIn URL', 'another-step-theme'),
        'section'           => 'another_step_social_links_settings',
        'type'              => 'url',
        'settings'          => 'another_step_social_linkedin'
    ));
}