<?php

$api_url = "https://nightout.com/api/events";
$api_oauth_string = "?oauth_token=3d4zpwlv3g3wmt30x7rqvcosyl57btu";
$api_org_ids = "&organization_ids=357,358,576,617,625,592,246,639";
$api_all_events_url = $api_url . $api_oauth_string . $api_org_ids;

function getEventURL($id) {
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
    $all_events = getAllEvents();
    foreach ($all_events as $key => $value) {
        if($value -> subdomain == $slug) {
            return $all_events[$key] -> id;
        }
    }
    return false;
}

function getThisEvent($slug){
    $event_ID = slugToID($slug);
    if(!$event_ID) {
        return false;
    } else {
        return json_decode(file_get_contents(getEventURL($event_ID)));

    }
}
