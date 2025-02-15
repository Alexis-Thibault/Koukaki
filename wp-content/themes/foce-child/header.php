<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                <ul class="menu">
                    <li class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
                </ul>
                <div class="menu_burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                <ul class="dropdown_menu">
                    <div class="image">
                        <img src="<?php echo get_theme_file_uri() . '/assets/images/Image logo en paralax.png'; ?>" alt="Titre de la vidéo">
                    </div>
                    <div class="cat1">
                        <li><a href="#story">Histoire</a></li>
                    </div>
                    <div class="perso">
                        <li><a href="#characters">Personnages</a></li>
                    </div>
                    <div class="place">
                        <li><a href="#place">Lieu</a></li>
                    </div>
                    <li><a href="#studio">Studio Koukaki</a></li>
                    <div class="studio">
                        <p>
                            STUDIO KOUKAKI
                        </p>
                    </div>
                </ul>

            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->