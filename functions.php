<?php

if (!function_exists('my_setup')) :

    function my_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        register_nav_menus(array('navigation-menu' => esc_html__('Navigation Menu', 'my'),));
    }

endif;

add_action('after_setup_theme', 'my_setup');

function my_styles()
{
    wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_style('my-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_styles');

function my_scripts()
{
    wp_enqueue_script('jquerry_js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    wp_enqueue_script('bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'my_scripts');