<?php
if (!function_exists('custom_theme_setup')) {
    function custom_theme_setup()
    {
        add_theme_support('post-thumbnails');

        register_nav_menus(array(
            'primary' => __('Primary Menu', 'custom-theme'),
        ));
    }

    add_action('after_setup_theme', 'custom_theme_setup');
}

if (!function_exists('custom_enqueue_styles')) {
    function custom_enqueue_styles()
    {
        wp_enqueue_style('custom-style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'custom_enqueue_styles');
}
