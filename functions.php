<?php
// Include custom navigation walker classes.
require_once get_template_directory() . '/inc/class-another-step-nav-walker.php';
require_once get_template_directory() . '/inc/class-another-step-nav-walker-header.php';

// Include Customizer registration files.
require_once get_template_directory() . '/inc/customizer/customizer-header.php';
require_once get_template_directory() . '/inc/customizer/customizer-top-bar.php';
require_once get_template_directory() . '/inc/customizer/customizer-social-links.php';
require_once get_template_directory() . '/inc/customizer/customizer-footer.php';
require_once get_template_directory() . '/inc/customizer/customizer-front-page-hero.php';

function get_top_bar_height() {
    $height = 0;

    // $height = get_theme_mod('top_bar_custom_height', 38);

    return apply_filters( 'another_step_theme_top_bar_height', $height );
}

function another_step_theme_setup() {
    register_nav_menus( 
        array(
            'primary' => __('Primary Menu', 'another-step-theme'),
            'quick_links' => __('Quick Links Menu', 'another-step-theme'),
            'our_services' => __('Our Services Menu', 'another-step-theme')
        )    
    );

    add_theme_support( 'custom-logo', array(
        'height'      => 100, // Set an initial recommended height (adjust as needed)
        'width'       => 400, // Set an initial recommended width (adjust as needed)
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action( 'after_setup_theme', 'another_step_theme_setup');

function another_step_theme_widgits_init() {
    // Footer Logo & Description Widget Area
    register_sidebar( array(
        'name'          => __( 'Footer Logo & Description', 'another-step-theme' ),
        'id'            => 'footer_logo_description',
        'description'   => __( 'Add widgets here for the footer logo, description, and social icons. A custom HTML widget works well for this.', 'another-step-theme' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="hidden">',
        'after_title'   => '</h4>',
    ));

    // Footer Get In Touch Widget Area (for multiple offices)
    register_sidebar( array(
        'name'          => __( 'Footer Get In Touch', 'another-step-theme' ),
        'id'            => 'footer_get_in_touch',
        'description'   => __( 'Add widgets here for the "Get In Touch" section, e.g., Text/Custom HTML widgets for each office.', 'another-step-theme' ),
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5 class="font-medium text-white mb-2">', // Use existing h5 styling
        'after_title'   => '</h5>',        
    ));
}
add_action( 'widgits_init', 'another_step_theme_widgits_init' );

function another_step_theme_customize_register($wp_customize) {
    another_step_customize_register_header_settings( $wp_customize );
    another_step_customize_register_top_bar_settings( $wp_customize );
    another_step_customize_register_social_links_settings( $wp_customize );
    another_step_customize_register_footer_settings( $wp_customize );
    another_step_customize_register_front_page_hero_settings( $wp_customize );
}
add_action( 'customize_register', 'another_step_theme_customize_register' );

function another_step_theme_scripts() {
    wp_enqueue_style( 'anotherstep-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'sticky-header', get_template_directory_uri() . '/js/sticky-header.js', array(), '1.0', true );
    wp_enqueue_script( 'pointer-trail', get_template_directory_uri() . '/js/pointer-trail.js', array(), '1.0', true );
    wp_enqueue_script( 'scroll-animation', get_template_directory_uri() . '/js/scroll-animation.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'another_step_theme_scripts' );

?>