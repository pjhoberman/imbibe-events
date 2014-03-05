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

$api_url = "https://nightout.com/api/events?oauth_token=3d4zpwlv3g3wmt30x7rqvcosyl57btu&organization_ids=357,358,576,617,625,592,246,639";
$response = file_get_contents($url);
$response = json_decode($response);


function pre_print($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
    return true;
}

function getAllEvents() {
    if(!isset($all_events)) {
        return $all_events = json_decode(file_get_contents($api_url));
    } else {
        return $all_events;
    }
}

pre_print(getAllEvents());



// $ch = curl_init($base_url);
// $fp = fopen($api_url, "w");

// curl_setopt($ch, CURLOPT_FILE, $fp);
// curl_setopt($ch, CURLOPT_HEADER, 0);

// curl_exec($ch);
// curl_close($ch);
// fclose($fp);

