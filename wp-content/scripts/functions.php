<?php
/*************************/
/* PJ's added functions */
/************************/


function set_nightout_globals() {
        global $api_url, $api_oauth_string, $api_org_ids, $api_all_events_url;
        $api_url = "https://nightout.com/api/events";
        $api_oauth_string = "?oauth_token=3d4zpwlv3g3wmt30x7rqvcosyl57btu";
        $api_org_ids = "&organization_ids=357,358,576,617,625,592,246,639";
        $api_all_events_url = $api_url . $api_oauth_string . $api_org_ids;
}

add_action( 'init', 'set_nightout_globals');

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
            return get_stylesheet_directory() . '/page-templates/event-details.php';
        });

        // todo - might make sense to move this to a different function...
        require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/nightout.php");
        add_action('wp_head', function(){
            global $event_slug, $this_event;
            $this_event = getThisEvent($event_slug);

            $event_description = $this_event -> description;
            if( $event_description === "" ) {
                $event_description = ": Imbibe is craft events. We specialize in craft beer and spirit events and ticketing.";
            }
            $event_description = $this_event -> title . " - " . $event_description;
            // make it a summary - cut it at first line break (p, br, div)
            $pattern = '/(<\/p.*|<br.*|<\/div.*)/i';
            $event_description = preg_replace($pattern, "", $event_description);
            $event_description = htmlspecialchars(strip_tags($event_description));

            ?>
         <!-- for Google -->
        <meta name="description" content="<?= $event_description ?>" />
        <meta name="keywords" content="<?= $this_event -> title ?>, craft, events, craft beer, spirits, ticketing, tickets, festivals" />

        <meta name="author" content="Imbibe" />
        <meta name="copyright" content="<?= date("Y"); ?>" />
        <meta name="application-name" content="Imbibe Events" />

        <!-- for Facebook -->

        <meta property="og:title" content="<?= $this_event -> title; ?>" />
        <meta property="og:image" content="<?= $this_event -> poster_url -> large ?>" />
        <meta property="og:url" content="<?= get_site_url() . $_SERVER['REQUEST_URI']; ?>" />
        <meta property="og:description" content="<?= $event_description ?>" />

        <!-- for Twitter -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?= $this_event -> title ?>" />
        <meta name="twitter:description" content="<?= $event_description ?>" />
        <meta name="twitter:image" content="<?= $this_event -> poster_url -> large ?>" />

        <title><?php wp_title( '&#124;', true, 'right' ); ?></title>
            <?
        });

    //Remover YOAST settings on these pages
    add_filter( 'wpseo_canonical', 'wpseo_canonical_exclude' );
    function wpseo_canonical_exclude( $canonical ) {
        $canonical = false;
        return $canonical;
    }
    add_filter( 'wpseo_description', 'wpseo_description_exclude' );
    function wpseo_description_exclude( $description ) {
        $description = false;
        return $description;
    }
    add_filter( 'wpseo_title', 'wpseo_title_exclude' );
    function wpseo_title_exclude( $title ) {
        $title = false;
        return $title;
    }
    // end of making sense

    }
}

add_action( 'template_redirect', 'prefix_url_rewrite_templates' );


/* end Event Details redirect */

