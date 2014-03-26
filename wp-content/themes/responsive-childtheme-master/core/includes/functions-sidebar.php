<?php
/**
 * Functions Insatll
 *
 * Functions for installation & activation
 *
 * @package        Responsive
 * @license        license.txt
 * @copyright      2014 CyberChimps
 * @since          1.9.5.0
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * WordPress Widgets start right here.
 */
function responsive_widgets_init() {
register_sidebar( array(
                          'name'          => __( 'Featured Events Widget 1', 'responsive' ),
                          'description'   => __( 'Area 6 - sidebar-home.php - Displays on the Home Page', 'responsive' ),
                          'id'            => 'home-widget-1',
                          'before_title'  => '<div id="widget-title-one" class="widget-title-home"><h3>',
                          'after_title'   => '</h3></div>',
                          'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                          'after_widget'  => '</div>'
                      ) );

    register_sidebar( array(
                          'name'          => __( 'Home Widget 2', 'responsive' ),
                          'description'   => __( 'Area 7 - sidebar-home.php - Displays on the Home Page', 'responsive' ),
                          'id'            => 'home-widget-2',
                          'before_title'  => '<div id="widget-title-two" class="widget-title-home"><h3>',
                          'after_title'   => '</h3></div>',
                          'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                          'after_widget'  => '</div>'
                      ) );

    register_sidebar( array(
                          'name'          => __( 'Home Widget 3', 'responsive' ),
                          'description'   => __( 'Area 8 - sidebar-home.php - Displays on the Home Page', 'responsive' ),
                          'id'            => 'home-widget-3',
                          'before_title'  => '<div id="widget-title-three" class="widget-title-home"><h3>',
                          'after_title'   => '</h3></div>',
                          'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                          'after_widget'  => '</div>'
                      ) );

}

add_action( 'widgets_init', 'responsive_widgets_init' );
