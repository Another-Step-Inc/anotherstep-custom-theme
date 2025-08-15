<?php
/**
 *  Template for the front page.
 * 
 *  @package another-step-theme
 */

 get_header();
 ?>
<section class="hero-section relative w-full h-[100vh] py-24 md:py-48 bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/full-shot-welcoming-neighborhood.png');">
    <div class="container mx-auto text-center text-white relative z-10">
        <h1 class="text-4xl md:text-6xl font-bold mb-4"><?php echo esc_html( get_theme_mod( 'hero_headline', 'Building a Community, One Step at a Time' ) ); ?></h1>
        <p class="text-lg md:text-xl mb-8"><?php echo esc_html( get_theme_mod( 'hero_subheadline', 'Providing personalized support to individuals with developmental disabilities since 1992.' ) ); ?></p>
        <div class="hero-buttons space-x-4">
            <?php if ( get_theme_mod( 'hero_button_text_1' ) && get_theme_mod( 'hero_button_url_1' ) ) : ?>
                <a href="<?php echo esc_url( get_theme_mod( 'hero_button_url_1' ) ); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full"><?php echo esc_html( get_theme_mod( 'hero_button_text_1' ) ); ?></a>
            <?php endif; ?>
            <?php if ( get_theme_mod( 'hero_button_text_2' ) && get_theme_mod( 'hero_button_url_2' ) ) : ?>
                <a href="<?php echo esc_url( get_theme_mod( 'hero_button_url_2' ) ); ?>" class="bg-transparent border border-white hover:border-blue-500 text-white hover:text-blue-500 font-bold py-3 px-6 rounded-full"><?php echo esc_html( get_theme_mod( 'hero_button_text_2' ) ); ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-40 z-0"></div>
</section>

<section class="container mx-auto py-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
  <div class="bg-gray-100 hover:bg-[#0E75BC] group rounded-lg drop-shadow-md p-6 fade-in-element">
    <div class="flex justify-center mb-4">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_home_icon_1.png" alt="Residential Services Icon" class="w-16 h-16">
    </div>
    <h2 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-white">Residential Services</h2>
    <p class="text-gray-700 group-hover:text-white">Our residential services provide safe, supportive, and comfortable housing opportunities. We focus on creating a stable home environment that promotes independence and a sense of community for each individual.</p>
    <a class="text-blue-500 hover:underline group-hover:text-white" href="http://" target="_blank" rel="noopener noreferrer"></a>
  </div>

  <div class="bg-gray-100 hover:bg-[#0E75BC] group rounded-lg drop-shadow-md p-6 fade-in-element">
    <div class="flex justify-center mb-4">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_home_icon_2.png" alt="Community Habilitation Icon" class="w-16 h-16">
    </div>
    <h2 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-white">Community Habilitation</h2>
    <p class="text-gray-700 group-hover:text-white">We empower individuals to build meaningful skills and live fulfilling lives within their communities. Our person-centered approach helps people develop social connections, explore hobbies, and achieve personal goals.</p>
    <a class="text-blue-500 hover:underline group-hover:text-white" href="http://" target="_blank" rel="noopener noreferrer"></a>
  </div>

  <div class="bg-gray-100 hover:bg-[#0E75BC] group rounded-lg drop-shadow-md p-6 fade-in-element">
    <div class="flex justify-center mb-4">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_home_icon_3.png" alt="Respite Services Icon" class="w-16 h-16">
    </div>
    <h2 class="text-xl font-semibold text-gray-800 mb-2 group-hover:text-white">Respite Services</h2>
    <p class="text-gray-700 group-hover:text-white">We offer temporary support and relief for caregivers. Our compassionate team provides a safe and engaging environment, giving caregivers the opportunity to rest and recharge with the peace of mind that their loved one is in good hands.</p>
    <a class="text-blue-500 hover:underline group-hover:text-white" href="http://" target="_blank" rel="noopener noreferrer"></a>
  </div>
</section>

<section class="container mx-auto py-12 grid grid-cols-1 md:grid-cols-2 gap-12 fade-in-element">
    <div class="relative">
        <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_home_symbolic_image.png" alt="Another Step Mission" 
             class="rounded-2xl shadow-xl w-3/4">
        
        <div class="absolute -bottom-8 -right-8 w-1/3">
             <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_logo_black.png" alt="Another Step Logo" 
                  class="rounded-full shadow-lg bg-white w-3/4">
        </div>
    </div>
    
    <div class="flex flex-col justify-center">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Mission: Creating Lives They Choose</h2>
        
        <p class="text-lg text-gray-700 mb-6">
            Another Step, Inc. was founded in Rockland County, NY in 1992 with the goal of providing 
            alternative services that empower people to build fulfilling lives. We are the originator 
            of the "without walls" service model.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
            <div class="flex items-center space-x-2">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_home_icon_4.png" alt="Icon" class="w-12 h-12 text-blue-500">
                <span class="text-gray-800">Person-Centered Approach</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_home_icon_5.png" alt="Icon" class="w-12 h-12 text-blue-500">
                <span class="text-gray-800">Community Integration</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_home_icon_6.png" alt="Icon" class="w-12 h-12 text-blue-500">
                <span class="text-gray-800">Experienced & Caring Staff</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/another_step_home_icon_7.png" alt="Icon" class="w-12 h-12 text-blue-500">
                <span class="text-gray-800">Without Walls Service Model</span>
            </div>
        </div>
    </div>
</section>
<section class="relative py-24 bg-cover bg-center overflow-hidden" style="background-image: url('URL_OF_SYMBOLIC_BACKGROUND.jpg');">
  <div class="absolute inset-0 z-[-1]">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/hands-presenting-charity-essentials-donation-campaign.jpg" alt="Background" class="w-full h-full object-cover opacity-50 parallax-background">
  </div>

  <div class="container mx-auto relative z-10 flex flex-col items-center px-4">
    <h2 class="text-3xl md:text-5xl font-bold text-white text-center mb-4">
      Donate Today And Make a Difference In Someone's Life
    </h2>
    <p class="text-xl text-gray-200 text-center max-w-2xl mb-8">
      Your generosity empowers us to provide the support and resources our community needs.
    </p>

    <div class="bg-white rounded-2xl shadow-xl p-6 md:p-10 w-full max-w-xl">
      <h3 class="text-2xl font-bold text-gray-800 mb-6">Your Donation:</h3>
      
      <div class="flex justify-between items-center gap-4 mb-6">
        <button type="button" class="bg-gray-200 text-gray-800 font-bold text-lg py-3 px-6 rounded-xl pulse-button hover:bg-yellow-400 transition-colors duration-300">$25</button>
        <button type="button" class="bg-gray-200 text-gray-800 font-bold text-lg py-3 px-6 rounded-xl pulse-button hover:bg-yellow-400 transition-colors duration-300">$50</button>
        <button type="button" class="bg-gray-200 text-gray-800 font-bold text-lg py-3 px-6 rounded-xl pulse-button hover:bg-yellow-400 transition-colors duration-300">$100</button>
        <input type="number" placeholder="Custom" class="bg-gray-200 text-gray-800 font-bold text-lg py-3 px-6 rounded-xl w-32 text-center focus:outline-none focus:ring-2 focus:ring-yellow-400 transition-colors duration-300">
      </div>
      
      <h3 class="text-xl font-bold text-gray-800 mb-4">Select Payment Method:</h3>
      <div class="flex items-center gap-6 mb-8">
        <label class="flex items-center space-x-2">
          <input type="radio" name="payment_method" value="credit_card" class="h-5 w-5 text-yellow-400 focus:ring-yellow-400" checked>
          <span class="text-gray-700">Credit Card</span>
        </label>
        <label class="flex items-center space-x-2">
          <input type="radio" name="payment_method" value="paypal" class="h-5 w-5 text-yellow-400 focus:ring-yellow-400">
          <span class="text-gray-700">PayPal</span>
        </label>
      </div>

      <button type="submit" class="w-full bg-yellow-400 text-gray-800 font-bold text-xl py-4 rounded-xl shadow-lg pulse-button hover:bg-yellow-500 transition-colors duration-300">
        Donate Now
      </button>
    </div>
  </div>
</section>
 <?php
 get_footer();
 ?>