<?php
// Enqueue styles and scripts
add_action('wp_enqueue_scripts', 'theme_enqueue_styles_and_scripts');
function theme_enqueue_styles_and_scripts()
{
    // Enqueue parent style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');

    // Enqueue custom CSS
    wp_enqueue_style('custom-animations', get_stylesheet_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style('oscars', get_stylesheet_directory_uri() . '/assets/css/oscars.css');

    // Enqueue Swiper JS from CDN
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);

    // Custom JS to initialize Swiper
    wp_enqueue_script('custom-swiper-js', get_theme_file_uri('/assets/js/custom-swiper.js'), array('swiper-js'), null, true);

    // Enqueue custom JavaScript
    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/assets/js/fade-in.js', array('jquery'), null, true);
}

// Get customizer options from parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
?>
