<?php
function custom_theme_styles() {
    wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css', array(), null);
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'custom_theme_styles');