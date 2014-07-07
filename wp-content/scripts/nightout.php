<?php
// $api_url = "https://nightout.com/api/events";
// $api_oauth_string = "?oauth_token=3d4zpwlv3g3wmt30x7rqvcosyl57btu";
// $api_org_ids = "&organization_ids=357,358,576,617,625,592,246,639";
// $api_all_events_url = $api_url . $api_oauth_string . $api_org_ids;
include($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/phpfastcache/phpfastcache.php");
// cache docs -- http://www.phpfastcache.com/

function getEventURL($id) {
    // not currently in use
    global $api_url, $api_oauth_string;
    return $api_url . '/' . $id . $api_oauth_string . '&details=full';
}

function getAllEvents() {
    global $api_all_events_url, $all_events;

    // check the live variables
    if(!isset($all_events)) {

        // check the cache
        $cache = phpFastCache();

        if ($cache->get('all_events') !== null) {
            $all_events = $cache->get('all_events');
        } else {
            $all_events = json_decode(file_get_contents($api_all_events_url));
        }

    }

    return $all_events;
}

function slugToID($slug){
    // not currently in use
    $all_events = getAllEvents();
    foreach ($all_events as $key => $value) {
        if($value -> subdomain == $slug) {
            return $all_events[$key] -> id;
        }
    }
    return false;
}

function get_http_response_code($url) {
    // source: http://stackoverflow.com/questions/4358130/file-get-contents-when-url-doesnt-exist
    $headers = get_headers($url);
    return substr($headers[0], 9, 3);
}

function getThisEvent($slug){
    // TODO - why is this being called three times per page
    global $api_url, $api_oauth_string;
    if($slug === "" || $slug == null) {
        return false;
    }
    // check the cache
    $cache = phpFastCache();
    $this_event = $cache->get("event[$slug]");

    if($this_event == null || isset($_GET['refresh'])){
        $event_url = $api_url . '/' . $slug . $api_oauth_string . '&details=full';
        if ( get_http_response_code($event_url) != "404" ) {
            $this_event = json_decode(file_get_contents($event_url));
            $cache->set("event[$slug]", $this_event, 60 * 60 * 12); // set the cache for 12 hours
            return $this_event;
        } else {
            return false;
        }
    } else {
        return $cache->get("event[$slug]");
    }
}


function zipToCityState($zip){
    // uses ziptasticapi.com API.
    $ziptastic = json_decode(file_get_contents("http://ziptasticapi.com/" . $zip));
    return ucfirst(strtolower($ziptastic -> city)) . ", " . $ziptastic -> state;
}
