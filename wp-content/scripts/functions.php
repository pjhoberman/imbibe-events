<?php
/*************************/
/* PJ's added functions */
/************************/


/* Event Details redirect */
// Source: http://code.tutsplus.com/articles/custom-page-template-page-based-on-url-rewrite--wp-30564
function event_details_rewrite_rule() {
    add_rewrite_rule( 'event/([^/]+)/?', 'index.php?event_slug=$matches[1]', 'top' );
}

add_action( 'init', 'event_details_rewrite_rule' );


function prefix_register_query_var( $vars ) {
    $vars[] = 'event_slug';

    return $vars;
}

add_filter( 'query_vars', 'prefix_register_query_var' );


function prefix_url_rewrite_templates() {

    if ( get_query_var( 'event_slug' ) ) {
        add_filter( 'template_include', function() {
            return get_template_directory() . '/page-templates/event-details.php';
        });
    }
}

add_action( 'template_redirect', 'prefix_url_rewrite_templates' );


/* end Event Details redirect */

