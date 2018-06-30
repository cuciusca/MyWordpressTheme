<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?php if(is_front_page() || is_home())
            echo get_bloginfo('name');
         else
            echo wp_title(''); ?>
    </title>

    <?php wp_head(); ?>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url( '/' )); ?>"><?php bloginfo('name'); ?></a>

            <?php $my_location = 'navigation-menu';
            
                if (has_nav_menu($my_location)) : ?>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbartoggle" aria-controls="navbartoggle" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <?php wp_nav_menu(array(
                    'theme_location' => $my_location,
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbartoggle',
                    'menu_class' => 'navbar-nav',));
                endif ?>
        </div>
    </nav>
        
    <div class="container">
        <header class="row">
        </header>
    