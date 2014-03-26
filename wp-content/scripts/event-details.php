            <? include_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/nightout.php"); ?>
            <?php $this_event = getThisEvent($event_slug); ?>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/event-details.css">


<?php

// todo - probably make getter functions to ensure data exists and doens't break site

      $start_time = strtotime($this_event -> start_time);
      $address = $this_event -> addresses[0];
      $event_details_json = array(
            "start_date" => array(
                  "year" => date('Y', $start_time) * 1,
                  "month" => date('n', $start_time) * 1,
                  "day" => date('j', $start_time) * 1,
                  "hour" => date('G', $start_time) - 7, // todo: timezone issues
                  "minute" => date('i', $start_time) * 1
                  ),
            "location" => array(
                  "address" => $this_event -> addresses[0] -> street,
                  "zip" => $this_event -> addresses[0] -> zip
                  )
            );

      $price_range;
      function getPriceRange() {
            global $this_event, $price_range;
            if (!isset($price_range -> low )) {
                  $temp_low = 1000000000; // start high
                  $temp_high = 0;
                  foreach ($this_event -> ticket_types as $key => $ticket_type) {
                        if ($ticket_type -> cent_price < $temp_low) {
                              $temp_low = $ticket_type -> cent_price;
                        }
                        if ($ticket_type -> cent_price > $temp_high) {
                              $temp_high = $ticket_type -> cent_price;
                        }
                  }
                  $price_range = array("low" => $temp_low, "high" => $temp_high);
            }
            return $price_range;
      }

      function formatPriceRange() {
            $range = getPriceRange();
            $price_low = $range[low];
            $price_high = $range[high];

            $formatted = number_format($price_low / 100, 2);

            if ($price_high !== $price_low) {
                  $formatted .= " - " . number_format($price_high / 100, 2);
            }
            return $formatted;
      }

?>

<script type="text/javascript">

// move this to a script file

var event_details = <?= json_encode($event_details_json) ?>



function tick(start_date, today) {
      if(start_date < today){
            var seconds = '0';
      } else {
            var seconds = Math.floor((start_date-today) / 1000);
      }

      var days = Math.floor(seconds / 60 / 60 / 24);
      seconds -= days * 60 * 60 * 24;
      var hours = Math.floor(seconds / 60 / 60);
      seconds -= hours * 60 * 60;
      var minutes = Math.floor(seconds/  60);
      seconds -= minutes * 60;

      if (days < 10)
            days = "0" + days;

      if (hours < 10)
            hours = "0" + hours;

      if (minutes < 10 )
            minutes = "0" + minutes;

      if (seconds < 10 )
            seconds = "0" + seconds;

      jQuery('#ticker_days').text(days);
      jQuery('#ticker_hours').text(hours);
      jQuery('#ticker_minutes').text(minutes);
      jQuery('#ticker_seconds').text(seconds);
      if(start_date >= today){
            var new_date = new Date(start_date - 1000);
            var t = setTimeout(function(){
                  tick(new_date, today);
            }, 1000);
      }
}

function full_address(){
    return event_details.location.address + ', ' + event_details.location.zip;
  }

jQuery(document).ready(function(){
      var today = new Date();


    var start_date = new Date(event_details.start_date.year, event_details.start_date.month - 1, event_details.start_date.day, event_details.start_date.hour, event_details.start_date.minute, 0);
    tick(start_date, today);

    // kill sales if event is over
    if (start_date < today) {
      jQuery('#add-item-form').remove();
      jQuery('#add-item-form').on('submit', function() { return false; }); // just to be safe
      jQuery('#too-late').show();
  }
});

</script>


            <?php
            // if($this_event) { ?>

<!--             <div id="eventTitle"><?= $this_event -> title ?></div>
            <div id="eventStart"><?= $this_event -> start_time ?></div>
            <div id="eventEnd"><?= $this_event -> end_time ?></div>
            <div id="eventDescription"><?= $this_event -> description ?></div>
            <div id="eventPoster"><img src="<?= $this_event -> poster_url -> large ?>" /></div>
            <iframe id="ticketingEmbed" src="https://embed.nightout.com/events/<?= $this_event -> subdomain ?>" height="600px" width="400px"></iframe>
 -->
            <?php // } else { ?>
                <!-- We couldn't find this event. Please try again. -->
            <?php //} ?>



<div class="grid col-940">

      <!-- Begin featured image -->
      <div class="image featured">
        <!-- TODO - Don't use this image, dynamic instead -->
      <a href="//cdn.shopify.com/s/files/1/0247/3455/products/Web_ready_image_1_1024x1024.jpg?v=1386631815" class="zoom" id="placeholder">
          <img src="//cdn.shopify.com/s/files/1/0247/3455/products/Web_ready_image_1_1024x1024.jpg?v=1386631815" alt="Collaboration Festival">
      </a>

  </div>
  <!-- End product image -->


</div>

<div class="grid col-940">

  <div class="description">
    <span id="tag_line"></span>
</div>

<div class="details grid col-940">
    <!-- WHEN -->
    <div class="when grid col-300">
      <img src="/wp-content/imbibe-images/Calendar.png">
      <span class="day-of-week" id="dow"><?= $this_event -> formatted_start_time -> day ?></span><br>
      <span class="date" id="event_date"><?= $this_event -> formatted_start_time -> full_date ?></span><br>
      <span class="time" id="event_time"><?= $this_event -> formatted_start_time -> time ?> - <?= $this_event -> formatted_end_time -> time ?></span>
  </div>

  <!-- WHERE -->
  <div class="where grid col-300">
      <img src="/wp-content/imbibe-images/Map-pin.png">
      <span class="location-name" id="location-name"><?= $this_event -> addresses[0] -> name ?></span><br>
      <span class="address" id="address"><?= $this_event -> addresses[0] -> street ?></span><br>
      <span class="citystate" id="citystate"><?= zipToCityState(80205) ?></span>
  </div>

  <!-- PRICE -->
  <div class="pricing grid col-300 fit">
      <img src="/wp-content/imbibe-images/dolla-sign.png">
      <span class="price-title">Price</span><br>
      <span class="price-range" id="price-range"><?= formatPriceRange() ?></span>

  </div>
  <hr class="designed grid col-860">
</div>


<div id="ticketing-small">
  <h2>Get your tickets</h2>

  <iframe id="nightout-tickets-small" width="100%" height="620" frameborder="0" border="0" src="https://embed.nightout.com/events/<?= $this_event -> subdomain ?>"></iframe>


  <div id="too-late" class="grid col-300">
    <p>You snooze you lose! This event already happened, but we have plenty more parties for you. Sign up for our newsletter and never miss out again.</p>
    <form action="http://imbibedenver.us4.list-manage.com/subscribe/post?u=7ac95e8ad52ca60aca50afc48&amp;id=396c7d3287" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
        <input type="email" value="" placeholder="Email Address" name="EMAIL" id="mail"><input type="submit" class="btn newsletter" value="Subscribe" name="subscribe" id="subscribe">
    </form>
      </div>
  </div>



<div id="event-details" class="grid col-540">
    <h2>Event Details</h2>
    <div id="event-details-content">
            <?= $this_event -> description ?> <? // dangerous with html.. clean this? ?>
    </div>
    <div id="ticker">
      <div id="ticker_days">00</div>
      <div id="ticker_hours">00</div>
      <div id="ticker_minutes">00</div>
      <div id="ticker_seconds">00</div><br>

  </div>

</div>

<div class="grid col-380 fit">
<div id="ticketing" >
  <h2>Get your tickets</h2>

  <iframe id="nightout-tickets" width="100%" height="620" frameborder="0" border="0" name="Big Dog Test Event" src="https://embed.nightout.com/events/<?= $this_event -> subdomain ?>"></iframe>


  <div id="too-late" class="grid col-300">
    <p>You snooze you lose! This event already happened, but we have plenty more parties for you. Sign up for our newsletter and never miss out again.</p>
    <form action="http://imbibedenver.us4.list-manage.com/subscribe/post?u=7ac95e8ad52ca60aca50afc48&amp;id=396c7d3287" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
        <input type="email" value="" placeholder="Email Address" name="EMAIL" id="mail"><input type="submit" class="btn newsletter" value="Subscribe" name="subscribe" id="subscribe">
    </form>
      </div>
  </div>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script>
  var map;
  function initialize() {
    var mapOptions = {
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    geocoder = new google.maps.Geocoder();
    //var latlng = new google.maps.LatLng({{product.metafields.evey.latitude}}, {{product.metafields.evey.longitude}});
    geocoder.geocode( {'address': full_address()}, function(results, status) {
    // geocoder.geocode( {'latLng': latlng}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
                  //In this case it creates a marker, but you can get the lat and lng from the location.LatLng
                  map.setCenter(results[0].geometry.location);
                  var marker = new google.maps.Marker({
                      map: map,
                      position: results[0].geometry.location
                  });
              }

          });
}


google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="map-canvas" style="height: 250px; width: 400px;"></div>


<!-- Begin social buttons -->
<? // todo: most of these buttons don't work ?>
<div class="social" style="margin-top:50px;">

<div id="social" class="clearfix span5 inner-left">
  <p class="share-this"><strong>Share this event:</strong><br>
    <span style="font-size: 10px;">(no one likes to party alone)</span>
  </p>
  <div id="share-btns">
    <div class="share-btn">
      <a href="http://twitter.com/share?u=Check+out+this+event!+<?= $this_event -> title ?>:+http://imbibedenver.com/event/<?= $this_event -> subdomain ?>" target="_blank"><img src="/wp-content/imbibe-images/Twitter.png"></a>
    </div>
    <div class="share-btn">
      <a href="https://plus.google.com/share?url=http://imbibedenver.com/event/<?= $this_event -> subdomain ?>" target="_blank">
        <img src="/wp-content/imbibe-images/Google-Plus.png">
      </a>
      <!-- <g:plusone size="medium" annotation="none"></g:plusone>-->
    </div>


    <!-- <div class="facebook-like share-icon"><iframe src="//www.facebook.com/plugins/like.php?href=http://imbibedenver.com/products/collaboration-festival&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe></div> -->
    <div class="share-btn">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http://imbibedenver.com/event/<?= $this_event -> subdomain ?>" target="_blank"><img src="/wp-content/imbibe-images/Facebook.png?1825"></a>
    </div>

    <div class="share-btn">
      <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=&amp;su=Check+out+<?= $this_event -> title ?>&amp;body=Check+out+this+event!%0D%0A%0D%0Ahttp://imbibedenver.com/event/<?= $this_event -> subdomain ?>" target="_blank">
        <img src="/wp-content/imbibe-images/Email.png?1825">
      </a>
    </div>

  </div>
</div>
</div>

<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div>
<!-- End social buttons -->
</div>
