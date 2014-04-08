<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/functions.php");

// todo - only load this on home page
function featured_event_script() {
    wp_enqueue_script(
        'custom-script',
        get_stylesheet_directory_uri() . '/js/featured-events.js',
        array( 'jquery' )
    );
}

add_action( 'wp_enqueue_scripts', 'featured_event_script' );

// if this stops working, look at parent theme > core > includes > functions-sidebar.php.
// comment out these arrays in that function
function responsivechild_widgets_init() {
register_sidebar( array(
                          'name'          => __( 'Featured Events Widget - Super Feature', 'responsive' ),
                          'description'   => __( 'Displays on the Home Page as full width events -- Area 6 - sidebar-home.php - ', 'responsive' ),
                          'id'            => 'home-widget-1',
                          'before_title'  => '<div id="widget-title-one" class="widget-title-home"><h3>',
                          'after_title'   => '</h3></div>',
                          'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                          'after_widget'  => '</div>'
                      ) );

    register_sidebar( array(
                          'name'          => __( 'Main Featured Events', 'responsive' ),
                          'description'   => __( 'Displays on the Home Page on the left side as larger images -- Area 7 - sidebar-home.php', 'responsive' ),
                          'id'            => 'home-widget-2',
                          'before_title'  => '<div id="widget-title-two" class="widget-title-home"><h3>',
                          'after_title'   => '</h3></div>',
                          'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                          'after_widget'  => '</div>'
                      ) );

    register_sidebar( array(
                          'name'          => __( 'Sub Featured Events', 'responsive' ),
                          'description'   => __( 'Displays on the Home Page on the right side as smaller images. -- Area 8 - sidebar-home.php', 'responsive' ),
                          'id'            => 'home-widget-3',
                          'before_title'  => '<div id="widget-title-three" class="widget-title-home"><h3>',
                          'after_title'   => '</h3></div>',
                          'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                          'after_widget'  => '</div>'
                      ) );

}

add_action( 'widgets_init', 'responsivechild_widgets_init' );


function responsive_post_meta_data() {
    echo get_the_date();
  }
