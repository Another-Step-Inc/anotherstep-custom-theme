<!DOCTYPE html>
<html style="scroll-behavior: smooth;" <?php language_attributes( ); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head( ); ?>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            margin-top: 0 !important;
        }

        body {
            magin-top: <?php echo esc_attr( get_top_bar_height() ); ?>px;
        }

        .pointer-trail {
            position: fixed;
            top: 0;
            bottom: 0;
            inset-inline-start: 0;
            inset-inline-end: 0;
            border-radius: 50%;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            visibility: hidden;
            text-align: center;
        }

        .cursor-outer {
            -webkit-margin-start: -12px;
            margin-inline-start: -12px;
            margin-top: -12px;
            width: 30px;
            height: 30px;
            border: 1px solid blue;
            background-color: blue;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            pointer-events: none;
            z-index: 10000000;
            opacity: 0.34;
            -webkit-transition: all 0.4s ease-out 0s;
            transition: all 0.4s ease-out 0s;
        }

        .cursor-inner {
            -webkit-margin-start: -3px;
            margin-start: -3px;
            margin-top: -3px;
            width: 10px;
            height: 10px;
            pointer-events: none;
            z-index: 10000001;
            background-color: blue;
            opacity: 1;
            -webkit-transition: all 0.24s ease-out 0s;
            transition: all 0.24s ease-out 0s;
        }

        .cursor-outer.cursor-hover {
            opacity: 0.14;
        }

        .cursor-inner.cursor-hover {
            -webkit-margin-start: -10px;
            margin-inline-start: -10px;
            margin-top: -10px;
            width: 30px;
            height: 30px;
            background-color: transparent;
            border: 1px solid #686363;
            opacity: 0;
        }

        .top-bar {
            position: relative; /* Or fixed, depending on if you want it sticky too */
            z-index: 101; /* Make sure it's higher than the sticky header's z-index (which is 100) */
            background-color: #0F75BB; /* Or your desired background */
            padding: 0 0; /* Adjust padding */
            font-size: 0.9rem;
            color: #6b7280;
            inset-inline-start: 0px;
            inset-inline-end: 0px;
        }

        .sticky-header {
            position: sticky;
            top: <?php echo esc_attr( get_top_bar_height() ); ?>px;
            left: 0;
            width: 100%;
            z-index: 100;
            transition: padding 0.3s ease-in-out, height 0.3s ease-in-out, font-size 0.3s ease-in-out; 
        }

        .sticky-header.scrolled {
            padding-top: 10px; /* Example: smaller padding */
            padding-bottom: 10px; /* Example: smaller padding */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15); /* More prominent shadow */
        }

        .sticky-header.scrolled .site-title {
            font-size: 1.5rem
        }

        /* Styles for the scrolled header (adjust as needed) */
        .sticky-header.scrolled .main-navigation a {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }

        .sticky-header.scrolled .main-navigation ul ul {
            top: auto;
            margin-top: 0;
        }

        .sticky-header.scrolled .main-navigation ul li:hover > ul {
            top: 2.5rem; /* Adjust based on scrolled header height */
        }

        .sticky-header.scrolled .main-navigation ul ul li a {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }

        /* Initial header styles */
        .site-header {
            background-color: rgba(255, 255, 255, 0.9); /* Add a slight transparency */
            padding-top: 1rem;
            padding-bottom: 1rem;
            height: auto; /* Initial height */
        }

        .site-title {
            font-size: 2rem; /* Initial font size */
            font-weight: bold;
        }

        .main-navigation ul {
            list-style: none; /* Remove bullet points */
            padding: 0;
            margin: 0;
            display: flex; /* Make the list items flow horizontally */
            align-items: center; /* Vertically align items in the header */
        }

        .main-navigation li {
            margin-left: 1rem; /* Add spacing between links */
        }

        .main-navigation li:first-child {
            margin-left: 0; /* Remove left margin from the first item */
        }

        .main-navigation a {
            display: inline-block; /* Allows padding and margins on the link */
            padding: 1rem; /* Adjust vertical and horizontal padding */
            text-decoration: none;
            color: #333; /* Adjust link color */
        }

        .main-navigation a:hover {
            color: #007bff; /* Adjust hover color */
        }

        /* Submenu styles (adjust as needed for horizontal layout if you change it) */
        .main-navigation ul ul {
            position: absolute;
            top: 75%;
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #ccc;
            padding: 0;
            min-width: 150px;
            z-index: 101;
            display: none;
        }

        .main-navigation ul li:hover > ul {
            display: block;
        }

        .main-navigation ul ul li {
            margin-left: 0; /* Remove left margin for submenu items */
        }

        .main-navigation ul ul li a {
            display: block;
            padding: 0.75rem 1rem;
            text-decoration: none;
            color: #333;
            white-space: nowrap;
        }

        .main-navigation ul ul li a:hover {
            background-color: #f0f0f0;
        }

        .site-content {
            padding-top: 0;
            inset-inline-start: 0px;
            inset-inline-end: 0px;
        }

        .site-branding .custom-logo-link {
            display: inline-block; /* Ensure it respects width and height */
            max-width: 150px; /* Adjust this value to your desired maximum width */
            height: auto; /* Maintain aspect ratio */
        }

        .site-branding .custom-logo {
            width: 100%; /* Make the image scale within its container */
            height: auto;
        }

        /* Optional: You can also set a specific height if you prefer */
        .site-branding .custom-logo-link {
            min-height: 50px; /* Adjust this value to your desired height */
            width: auto;
        }

        /* Custom CSS to handle the background overlay and specific details */
        .footer-cta {
            background-image: url('https://via.placeholder.com/1200x300/222'); /* Replace with your actual background image */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .footer-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: 1;
        }

        .footer-cta > div {
            position: relative;
            z-index: 2;
        }

        /* Newsletter input styling */
        .newsletter-form input[type="email"] {
            @apply flex-grow p-3 border border-[#808080] bg-[#232020] text-white rounded-md focus:outline-none focus:ring-2 focus:ring-[#0E75BC]; /* Medium Gray border, Dark Gray background, Blue focus ring */
        }

        .newsletter-form button[type="submit"]:hover {
            color: white; /* Text color remains white (or change if needed for contrast) */
        }

        .newsletter-form button[type="submit"]:hover::before {
            width: 300%; /* Expand to cover the button */
            height: 300%; /* Expand to cover the button */
        }

        /* Newsletter submit button styling */
        .btn-all{
            /* Tailwind base styles for the specific look from the image */
            @apply px-6 py-3 bg-[#F9EF21] text-white rounded-full font-semibold transition-colors duration-300 whitespace-nowrap; /* Changed background, rounded, and added transition */

            /* Hover state */
            @apply hover:bg-[#0E75BC]; /* Blue on hover */
        }

        /* Specific styles for the "wiggle" arrow, if it's a background image or SVG */
        .footer-top {
            background-image: url('https://via.placeholder.com/200x200?text=Wiggle+Arrow'); /* Replace with your actual SVG/image */
            background-repeat: no-repeat;
            background-position: 5% 90%; /* Adjust position as needed */
            background-size: 80px; /* Adjust size as needed */
        }

        /* Custom underline effect for titles */
        .footer-title::after {
            content: "";
            display: block;
            width: 40px; /* Length of the underline */
            height: 2px; /* Thickness of the underline */
            background-color: #F9EF21; /* Accent color */
            margin-top: 10px;
        }

        /* Newsletter input and button */
        .newsletter-form input[type="email"] {
            @apply flex-grow p-3 border border-gray-700 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-500;
        }
        .newsletter-form button[type="submit"] {
            @apply px-6 py-3 bg-yellow-500 text-gray-900 rounded-md font-semibold hover:bg-yellow-600 transition duration-300;
        }

        /* Adjust social icon size and spacing if needed */
        .social-icons a {
            @apply w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-yellow-500 transition-colors duration-300;
            background-color: rgba(255,255,255,0.1); /* Semi-transparent background */
        }

        /* Media query for screens smaller than a certain width (e.g., 768px for tablets) */
    @media (max-width: 768px) {
        .site-branding .site-title {
            font-size: 1.5rem; /* Smaller logo/title on tablet */
            margin-bottom: 0.1rem;
        }

        .site-branding .site-description {
            font-size: 0.9rem; /* Smaller tagline on tablet */
        }
    }

    /* Media query for even smaller screens (e.g., 480px for phones) */
    @media (max-width: 480px) {
        .site-branding .site-title {
            font-size: 1.2rem; /* Even smaller logo/title on phone */
            margin-bottom: 0; /* Less space on phone */
        }

        .site-branding .site-description {
            font-size: 0.8rem; /* Even smaller tagline on phone */
            line-height: 1.2; /* Improve readability if it wraps */
        }

        /* Optional: Adjust overall header padding on small screens */
        .sticky-header .container {
            padding-left: 1rem;
            padding-right: 1rem;
        }
    }
    </style>    
</head>
<body <?php body_class( 'body' ); ?>>
    <div class="w-full">
        <div class="top-bar py-[9px] px-[80px] text-white text-sm">
            <div class="container mx-auto flex justify-between items-center">
                <div class="left-content">
                    <?php if ( get_theme_mod( 'top_bar_phone_number' ) ) : ?>
                        <a href="tel:<?php echo preg_replace( '/[^0-9+]/', '', esc_html( get_theme_mod( 'top_bar_phone_number' ) ) ); ?>" class="hover:text-gray-800">
                            <i class="fa fa-phone text-lg text-[#FFFFFF] mr-2"></i>
                            <?php echo esc_html( get_theme_mod( 'top_bar_phone_number' ) ); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="middle-content flex items-center space-x-4">
                    <?php if ( get_theme_mod( 'top_bar_middle_text' ) ) : ?>
                        <span><?php echo esc_html( get_theme_mod( 'top_bar_middle_text' ) ); ?></span>
                    <?php endif; ?>
                </div>
                <div class="right-content flex items-center space-x-4">
                    <div class="social-icons flex flex-row">
                        <?php if ( get_theme_mod( 'another_step_social_facebook' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'another_step_social_facebook' ) ); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-yellow-500 transition-colors duration-300"><i class="fa fa-facebook-f text-sm"></i><span class="sr-only">Facebook</span></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'another_step_social_instagram' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'another_step_social_instagram' ) ); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-yellow-500 transition-colors duration-300"><i class="fa fa-instagram text-sm"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'another_step_social_youtube' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'another_step_social_youtube' ) ); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-yellow-500 transition-colors duration-300"><i class="fa fa-youtube text-sm"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'another_step_social_linkedin' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'another_step_social_linkedin' ) ); ?>" target="_blank" rel="noopener noreferrer" class="w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-yellow-500 transition-colors duration-300"><i class="fa fa-linkedin text-sm"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <header class="site-header sticky-header py-4 shadow-md z-50">
            <div class="container mx-auto px-4 flex items-center justify-between">
                <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    if ( is_front_page() && is_home() ) :
                        echo '<h1 class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a></h1>';
                    else :
                        echo '<p class="site-title"><a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . esc_html( get_bloginfo( 'name' ) ) . '</a></p>';
                    endif;
                    echo '<p class="site-description">' . esc_html( get_bloginfo( 'description' ) ) . '</p>';
                }
                ?>
                </div>

                <nav class="main-navigation hidden md:block flex-grow">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'container'      => false,
                            'menu_class'     => 'flex justify-center space-x-1 lg:space-x-2',
                            'fallback_cb'    => false,
                            'walker'         => new Another_Step_Custom_Nav_Walker_Header(),
                        )
                    );
                    ?>
                </nav>
                <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <div class="flex items-center text-[#232020] text-sm">
                        <i class="fa fa-phone text-lg text-[#232020] mr-2"></i>
                        <div>
                            <span class="block text-xs font-semibold"><?php _e('Call Us Now', 'another-step-theme'); ?></span>
                            <span class="block font-bold text-base">(845)-268-8200</span>
                        </div>
                    </div>

                    <button class="text-[#232020] hover:text-[#F9EF21] transition-colors duration-300 focus:outline-none">
                        <i class="fa fa-magnifying-glass text-lg"></i>
                    </button>

                    <a href="<?php echo esc_url( get_theme_mod( 'header_cta_url', '#' ) ); ?>"
                    class="bg-[#F9EF21] text-[#232020] px-8 py-3 rounded-full font-semibold hover:bg-yellow-600 transition-colors duration-300">
                            <?php echo esc_html( get_theme_mod( 'header_cta_text', __( 'Donate Now', 'another-step-theme' )) ); ?> &rarr;
                    </a>
                </div>

                <button id="mobile-menu-toggle" class="md:hidden p-2 focus:outline-none text-[#232020]">
                    <span class="block w-6 h-0.5 bg-[#232020] my-1 transition-all duration-300 ease-in-out"></span>
                    <span class="block w-6 h-0.5 bg-[#232020] my-1 transition-all duration-300 ease-in-out"></span>
                    <span class="block w-6 h-0.5 bg-[#232020] my-1 transition-all duration-300 ease-in-out"></span>
                </button>
            </div>

            <div id="mobile-menu" class="hidden md:hidden bg-white w-full absolute top-full left-0 shadow-lg py-4">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex flex-col items-center space-y-4 w-full',
                    'fallback_cb'    => false,
                    'walker'         => new Another_Step_Custom_Nav_Walker_Header(),
                ) );
                ?>
            </div>
        </header>
         <main class="site-content w-full">