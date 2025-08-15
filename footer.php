    </main>
        <section class="footer-cta py-12 px-4 md:px-0 relative">
            <div class="container mx-auto relative z-10 flex flex-col md:flex-row items-center bg-[#EC1F28] text-white rounded-xl p-6 md:p-8 shadow-lg max-w-4xl -mb-20">
                <div class="md:w-1/3 text-center md:text-left mb-6 md:mb-0">
                    <span class="block text-sm font-semibold mb-2">Newsletter</span>
                    <h3 class="text-2xl md:text-3xl font-bold leading-tight">Sign Up To Get Latest Update</h3>
                </div>
                <div class="md:w-2/3 flex flex-col sm:flex-row items-center newsletter-form">
                    <input type="email" placeholder="Enter Your Email" class="w-full p-3 border-none bg-white bg-opacity-10 text-white placeholder-white rounded-full focus:outline-none focus:ring-2 focus:ring-[#0E75BC] transition-all duration-300">
                    <button type="submit" class="btn-all px-6 py-3 bg-[#F9EF21] text-white rounded-full font-semibold transition-colors duration-300 whitespace-nowrap hover:bg-[#0E75BC]">Subscribe Now →</button>
                </div>
            </div>
        </section>
        <footer class="bg-[#232020] text-white py-24 footer-top">
            <div class="container mx-auto px-4 md:px-0">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-6 pt-16">
                    <div class="col-span-1 lg:col-span-1">
                        <?php if ( is_active_sidebar('another_step_footer_logo_description') ) : ?>
                            <?php dynamic_sidebar( 'another_step_footer_logo_description' ); ?>
                        <?php else : ?>
                            <div class="mb-2">
                                <?php if ( get_theme_mod( 'another_step_footer_logo_image_control' ) ) : ?>                
                                    <img src="<?php echo esc_url(get_theme_mod( 'another_step_footer_logo_image_control' )); ?>" alt="">
                                <?php else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/another_step_logo_white.png' ); ?>" alt="<?php bloginfo( 'name' ); ?> Logo">
                                <?php endif; ?>
                            </div>
                            <p class="text-gray-300 text-sm leading-relaxed mb-6">
                                <?php echo esc_html( get_theme_mod( 'another_step_footer_subdescription' ) ); ?>
                            </p>
                            <div class="social-icons flex space-x-3">
                                <?php if ( get_theme_mod( 'another_step_social_facebook' ) ) : ?>
                                    <a href="<?php echo esc_url(get_theme_mod( 'another_step_social_facebook' )); ?>" class="w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-[#F9EF21] transition-colors duration-300" href="#" aria-label="Facebook"><i class="fa fa-facebook-f text-sm"></i></a>
                                <?php endif; ?>
                                <?php if ( get_theme_mod( 'another_step_social_instagram' ) ) : ?>
                                    <a href="<?php echo esc_url(get_theme_mod( 'another_step_social_instagram' )); ?>" class="w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-[#F9EF21] transition-colors duration-300" href="#" aria-label="Twitter"><i class="fa fa-instagram text-sm"></i></a>
                                <?php endif; ?>
                                <?php if ( get_theme_mod( 'another_step_social_linkedin' ) ) : ?>
                                    <a href="<?php echo esc_url(get_theme_mod( 'another_step_social_linkedin' )); ?>" class="w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-[#F9EF21] transition-colors duration-300" href="#" aria-label="Vimeo"><i class="fa fa-youtube text-sm"></i></a>
                                <?php endif; ?>
                                <?php if ( get_theme_mod( 'another_step_social_youtube' ) ) : ?>
                                    <a href="<?php echo esc_url(get_theme_mod( 'another_step_social_youtube' )); ?>" class="w-8 h-8 flex items-center justify-center rounded-full text-white hover:bg-[#F9EF21] transition-colors duration-300" href="#" aria-label="LinkedIn"><i class="fa fa-linkedin text-sm"></i></a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-span-1 lg:col-span-1">
                        <h4 class="footer-title text-lg font-semibold mb-6">Quick Links</h4>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'quick_links',
                            'container'      => false,
                            'menu_class'     => 'text-gray-300 text-sm space-y-3',
                            'fallback_cb'    => false,
                            'add_li_class'   => '',
                            'add_link_class' => 'hover:text-[#F9EF21] transition-colors duration-300',
                            'walker'         => new Another_Step_Custom_Nav_Walker(),
                        ));
                        ?>
                    </div>

                    <div class="col-span-1 lg:col-span-1">
                        <h4 class="footer-title text-lg font-semibold mb-6">Our Services</h4>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'our_services',
                            'container'      => false,
                            'menu_class'     => 'text-gray-300 text-sm space-y-3',
                            'fallback_cb'    => false,
                            'add_li_class'   => '',
                            'add_link_class' => 'hover:text-[#F9EF21] transition-colors duration-300',
                            'walker'         => new Another_Step_Custom_Nav_Walker(),
                        ));
                        ?>
                    </div>

                    <div class="col-span-1 lg:col-span-2">
                        <h4 class="footer-title text-lg font-semibold mb-6">Get In Touch</h4>
                        <div class="space-y-6"> <div>
                                <h5 class="font-medium text-white mb-2"><?php echo esc_html( get_theme_mod( 'another_step_footer_main_office_heading' ) ); ?></h5> <ul class="text-gray-300 text-sm space-y-3">
                                    <li class="flex items-start">
                                        <i class="fa fa-map-marker text-[#F9EF21] mr-3 mt-1"></i>
                                        <span><?php echo esc_html( get_theme_mod( 'another_step_footer_main_office_address' ) ); ?></span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fa fa-phone text-[#F9EF21] mr-3"></i>
                                        <span><?php echo esc_html( get_theme_mod( 'another_step_footer_main_office_phone' ) ); ?></span>
                                    </li>
                                    <li class="flex items-center">
                                        <i class="fa fa-envelope text-[#F9EF21] mr-3"></i>
                                        <span><?php echo esc_html( get_theme_mod( 'another_step_footer_main_office_email' ) ); ?></span>
                                    </li>
                                </ul>
                            </div>

                            <div>
                                <h5 class="font-medium text-white mb-2"><?php echo esc_html( get_theme_mod( 'another_step_footer_satellite_office_heading' ) ); ?></h5> <ul class="text-gray-300 text-sm space-y-3">
                                    <li class="flex items-start">
                                        <i class="fa fa-map-marker text-[#F9EF21] mr-3 mt-1"></i>
                                        <span><?php echo esc_html( get_theme_mod( 'another_step_footer_satellite_office_address' ) ); ?></span> </li>
                                    <li class="flex items-center">
                                        <i class="fa fa-phone text-[#F9EF21] mr-3"></i>
                                        <span><?php echo esc_html( get_theme_mod( 'another_step_footer_satellite_office_phone' ) ); ?></span> </li>
                                    <li class="flex items-center">
                                        <i class="fa fa-envelope text-[#F9EF21] mr-3"></i>
                                        <span><?php echo esc_html( get_theme_mod( 'another_step_footer_satellite_office_email' ) ); ?></span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <div class="bg-[#232020] text-gray-300 py-6 text-sm border-t border-[#808080]">
        <div class="container mx-auto px-4 md:px-0 flex flex-col md:flex-row justify-between items-center text-center md:text-left">
            <div class="mb-3 md:mb-0">
                &copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.
            </div>
            <div class="space-x-4">
                <a href="#" class="hover:text-[#0E75BC] transition-colors duration-300">Terms & Conditions</a>
                <a href="#" class="hover:text-[#0E75BC] transition-colors duration-300">Privacy Policy</a>
                <a href="#" class="hover:text-[#0E75BC] transition-colors duration-300">Cookie Settings</a>
            </div>
        </div>
    </div>
    <button class="fixed bottom-6 right-6 bg-[#EC1F28] text-gray-900 rounded-full w-10 h-10 flex items-center justify-center shadow-lg hover:bg-red-700 transition-colors duration-300">
        <i class="fa fa-arrow-up"></i>
    </button>

    <!-- Mouse Cursor Trail Start -->
        <div class="pointer-trail cursor-outer"></div>
        <div class="pointer-trail cursor-inner"></div>
    <!-- Mouse Cursor Trail End -->
    </div>
    <?php wp_footer(); ?>
</body>
</html>