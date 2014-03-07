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
