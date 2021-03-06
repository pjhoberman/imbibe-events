<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

?>
    <!doctype html>
    <!--[if !IE]>
    <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
    <!--[if IE 7 ]>
    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
    <!--[if IE 8 ]>
    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
    <!--[if IE 9 ]>
    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
    <!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- for Google -->
        <meta name="description" content="Imbibe is craft events. We specialize in craft beer and spirit events and ticketing." />
        <meta name="keywords" content="craft, events, craft beer, spirits, ticketing, tickets, festivals" />

        <meta name="author" content="Imbibe" />
        <meta name="copyright" content="<?= date("Y"); ?>" />
        <meta name="application-name" content="Imbibe Events" />

        <title><?php wp_title( '&#124;', true, 'right' ); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
        <link rel="shortcut icon" href="/favicon.png" />
        <link href='http://fonts.googleapis.com/css?family=Sansita+One' rel='stylesheet' type='text/css'>

        <!-- facebook admin meta -->
        <meta property="fb:admins" content="30000465, 44701590, 10235878" />
        <?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>

<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
    <div class="skip-container cf">
        <a class="skip-link screen-reader-text focusable" href="#main"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
    </div><!-- .skip-container -->
    <div id="header">

        <?php responsive_header_top(); // before header content hook ?>

<div class="logo" id="header-logo">
          <a id="header-imbibe" href="/" class="header-element"></a>
          <a id="header-about" href="/about-us" class="header-element"></a>
          <a id="header-how" href="/how-it-works" class="header-element"></a>
          <a id="header-community" href="http://www.facebook.com/ImbibeDenver" class="header-element"></a>
          <a id="header-contact" href="/contact" class="header-element"></a>
          <a id="header-facebook" href="http://www.facebook.com/ImbibeDenver" class="header-element" target="_blank"></a>
          <a id="header-twitter" href="http://twitter.com/imbibedenver" class="header-element" target="_blank"></a>

        </div>


        <?php if( has_nav_menu( 'top-menu', 'responsive' ) ) { ?>
            <?php wp_nav_menu( array(
                                   'container'      => '',
                                   'fallback_cb'    => false,
                                   'menu_class'     => 'top-menu',
                                   'theme_location' => 'top-menu'
                               )
            );
            ?>
        <?php } ?>

        <?php responsive_in_header(); // header hook ?>

        <?php if( get_header_image() != '' ) : ?>

            <div id="logo">
                <a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
            </div><!-- end of #logo -->

        <?php endif; // header image was removed ?>

        <?php if( !get_header_image() ) : ?>

            <div id="logo">
                <span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                <span class="site-description"><?php bloginfo( 'description' ); ?></span>
            </div><!-- end of #logo -->

        <?php endif; // header image was removed (again) ?>

        <?php get_sidebar( 'top' ); ?>
        <?php wp_nav_menu( array(
                               'container'       => 'div',
                               'container_class' => 'main-nav',
                               'fallback_cb'     => 'responsive_fallback_menu',
                               'theme_location'  => 'header-menu'
                           )
        );
        ?>

        <?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) { ?>
            <?php wp_nav_menu( array(
                                   'container'      => '',
                                   'menu_class'     => 'sub-header-menu',
                                   'theme_location' => 'sub-header-menu'
                               )
            );
            ?>
        <?php } ?>

        <?php responsive_header_bottom(); // after header content hook ?>

    </div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>
    <div id="wrapper" class="clearfix">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>
