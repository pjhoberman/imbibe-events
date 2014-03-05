<?php

// source: http://www.silverphp.com/php-curl-function-for-post-and-get-request.html
/*
function curlUsingGet($url, $data)
{

    if(empty($url) OR empty($data))
    {
        return 'Error: invalid Url or Data';
    }

    //url-ify the data for the get  : Actually create datastring
    $fields_string = '';

    foreach($data as $key=>$value){
        $fields_string[]=$key.'='.urlencode($value).'&amp;'; }
        $urlStringData = $url.'?'.implode('&amp;',$fields_string);

        $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,10); # timeout after 10 seconds, you can increase it
    //curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
    curl_setopt($ch, CURLOPT_URL, $urlStringData ); #set the url and get string together

    $return = curl_exec($ch);
    curl_close($ch);

    return $return;
}

$base_url = "https://nightout.com/api/events";
$data = [
    "oauth_token"=> "3d4zpwlv3g3wmt30x7rqvcosyl57btu",
    "organization_ids" => array(357,358,576,617,625,592,246,639)
    ];

//print_r(curlUsingGet($base_url, $data));
*/


$api_url = "https://nightout.com/api/events";
$api_oauth_string = "?oauth_token=3d4zpwlv3g3wmt30x7rqvcosyl57btu";
$api_org_ids = "&organization_ids=357,358,576,617,625,592,246,639";
$api_all_events_url = $api_url . $api_oauth_string . $api_org_ids;

function getEventURL($id) {
    global $api_url, $api_oauth_string;
    echo $api_url . '/' . $id . $api_oauth_string . '&details=full';
    return $api_url . '/' . $id . $api_oauth_string . '&details=full';
}

function pre_print($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    return true;
}

function getAllEvents() {
    global $api_all_events_url;
    if(!isset($all_events)) {
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
        echo "We couldn't find this event. Please try again.";
    } else {
        return json_decode(file_get_contents(getEventURL($event_ID)));

    }
}
