<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    </head>
    <body <?php body_class(); ?> >
        <header>
            <nav class="Navbar">
                <div class="Nav-Wrapper">
                    <div class="Logo">
                        <a href="<?php echo get_home_url(); ?>">Ella Viina Art</a>
                    </div>
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'Menu',
                            )
                        )
                    ?>
                </div>
                <div class="menuIcon">
                    <span class="icon icon-bars"></span>
                    <span class="icon icon-bars overlay"></span>
                </div>
                <div class="overlay-menu">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                            )
                        )
                    ?>
                </div>
            </nav>
        </header>
        <section class="content">