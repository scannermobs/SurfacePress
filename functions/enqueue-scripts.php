<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way


// JS

    // Register Foundation scripts
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation-sites/dist/js/foundation.min.js', array( 'jquery' ), "6.4.1", true );

		// Adding cookie js
		wp_enqueue_script( 'cookie-js', get_template_directory_uri() . '/assets/scripts/js.cookie.js', array(), true);

		// Adding salvattore js
		wp_enqueue_script( 'salvattore-js', get_template_directory_uri() . '/assets/scripts/salvattore.min.js', array('jquery'), true);

    // Adding scripts file [Keep last]
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts'), true );

// CSS

		// Register Foundation styles
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/foundation-sites/dist/css/foundation.min.css', array(), "6.4.1", 'all' );

		// Google fonts
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap', false );

		// Fontawesome
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.8.1/css/all.css', false );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles'), 'all' );

    // Custom stylesheet [Keep last]
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/styles/custom.css', array(),  'all' );

// End

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
