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

function my_widgets_init() 
{
	register_sidebar(array(
		'name'          => esc_html__('Right Sidebar', 'my'),
		'id'            => 'right-sidebar',
		'description'   => esc_html__('Add widgets here.', 'my'),
		'before_widget' => '<section class="card"><div class="card-body">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h4 class="card-title">',
		'after_title'   => '</h4>',
	) );
}

add_action( 'widgets_init', 'my_widgets_init' );

function my_styles()
{
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');

    wp_enqueue_style('font-awesome-brands-css', 'https://use.fontawesome.com/releases/v5.1.0/css/brands.css');
    wp_enqueue_style('font-awesome-css', 'https://use.fontawesome.com/releases/v5.1.0/css/fontawesome.css');

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab');
    wp_enqueue_style('my-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_styles');

function my_scripts()
{
    wp_enqueue_script('jquerry-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'my_scripts');