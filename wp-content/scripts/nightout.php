<?php

// $api_url = "https://nightout.com/api/events";
// $api_oauth_string = "?oauth_token=3d4zpwlv3g3wmt30x7rqvcosyl57btu";
// $api_org_ids = "&organization_ids=357,358,576,617,625,592,246,639";
// $api_all_events_url = $api_url . $api_oauth_string . $api_org_ids;

function getEventURL($id) {
    // not currently in use
    global $api_url, $api_oauth_string;
    return $api_url . '/' . $id . $api_oauth_string . '&details=full';
}

function getAllEvents() {
    global $api_all_events_url;
    if(!isset($all_events)) {
        //return $all_events = json_decode(file_get_contents($api_all_events_url));
        return $all_events = json_decode(file_get_contents($api_all_events_url));
    } else {
        return $all_events;
    }
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
    global $api_url, $api_oauth_string;
    $event_url = $api_url . '/' . $slug . $api_oauth_string . '&details=full';
    if ( get_http_response_code($event_url) != "404" ) {
        return json_decode(file_get_contents($event_url));
    } else {
        // todo: error log this
        return false;
    }

}

function zipToCityState($zip){
    // uses ziptasticapi.com API.
    $ziptastic = json_decode(file_get_contents("http://ziptasticapi.com/" . $zip));
    return ucfirst(strtolower($ziptastic -> city)) . ", " . $ziptastic -> state;
}
