            <? include_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/nightout.php"); ?>
            <?php $this_event = getThisEvent($event_slug); ?>
            <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/event-details.css">
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
      <img src="//cdn.shopify.com/s/files/1/0247/3455/t/1/assets/Calendar.png?1825">
      <span class="day-of-week" id="dow">Saturday</span><br>
      <span class="date" id="event_date">March 22, 2014</span><br>
      <span class="time" id="event_time">3:00 PM - 7:00 PM</span>
  </div>

  <!-- WHERE -->
  <div class="where grid col-300">
      <img src="//cdn.shopify.com/s/files/1/0247/3455/t/1/assets/Map-pin.png?1825">
      <span class="location-name" id="location-name">The Curtis Hotel</span><br>
      <span class="address" id="address">1405 Curtis Street</span><br>
      <span class="citystate" id="citystate">Denver, CO</span>
  </div>

  <!-- PRICE -->
  <div class="pricing grid col-300 fit">
      <img src="//cdn.shopify.com/s/files/1/0247/3455/t/1/assets/dolla-sign.png?1825">
      <span class="price-title">Price</span><br>
      <span class="price-range" id="price-range">50.00 - 80.00</span>

  </div>
  <hr class="designed grid col-860">
</div>


<div id="ticketing-small">
  <h2>Get your tickets</h2>

  <iframe id="nightout-tickets-small" width="100%" height="620" frameborder="0" border="0" src="https://embed.nightout.com/events/collaboration-fest"></iframe>


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
<p><span id="sceditor-start-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"></span><span id="sceditor-end-marker" class="sceditor-selection sceditor-ignore" style="line-height: 0; display: none;"></span>Imbibe and the Colorado Brewers Guild have teamed up to throw the first ever Collaboration Festival, the headline event of Colorado Craft Beer Week! As one of the four Lovibond Series events, Collaboration Festival will showcase the release of over 35 Colorado collaboration beers, all being unveiled at the event! Each beer featured at Collaboration Festival will be created by at least one Colorado Brewers Guild member, with other participating breweries coming from near and far. The other breweries will be from both in and out of state and some collaborations involve more than 5 breweries! The out-of-state brewery involvement is an exciting first for Colorado Craft Beer week.</p>
<p>More collaborations are being added but the current collaboration list includes:</p>
<ul>
<li>Avery and Russian River</li>
<li>Barrels &amp; Bottles and Golden City</li>
<li>Big Choice and Caution</li>
<li>Black Fox and TRVE</li>
<li>Bootstrap and Eddyline</li>
<li>Boulder and Sanitas</li>
<li>Cannonball Creek and 12 Degree</li>
<li>Caution and Copper Kettle</li>
<li>Denver Beer Co and Upslope</li>
<li>Dry Dock and Steamworks</li>
<li>Echo and Front Range</li>
<li>Echo and Right Brain (MI)</li>
<li>Epic and Elevation</li>
<li>FATE and Mission (SD)</li>
<li>FATE, Bru and Wild Woods</li>
<li>Former Future and Station 26</li>
<li>Front Range and Denver Pearl</li>
<li>Great Divide and Crooked Stave</li>
<li>Hogshead and Crooked Stave</li>
<li>Montain Sun Former Brewer Collaboration, Breck, Cannonball Creek, Durango, Jagged Mountain, Eddyline, Mountain Sun, Telluride, Iron Springs (CA), Moo Brew (Tasmania)</li>
<li>Odell and New Belgium</li>
<li>OMF and Wild Woods</li>
<li>Oskar Blues and La Cumbre</li>
<li>Oskar Blues and Shamrock</li>
<li>Oskar Blues and St. Archer</li>
<li>Pagosa Springs and RockYard</li>
<li>Pugs, Dillion Dam, Breck, Backcountry, and Broken Compass - Summit County Collaboration</li>
<li>Renegade, Wit's End, Strange, TRVE, Black Sky, Breckenridge</li>
<li>River North and TRVE</li>
<li>Rockslide, Kannah Creek and Palisade</li>
<li>Ska and Nynashamns Angbryggeri</li>
<li>Southern Colorado Collaboration: Pikes Peak, Bristol, Phantom Canyon</li>
<li>Telluride Brewing and Marble Brewing</li>
<li>Trinity and Black Bottle</li>
<li>Twisted Pine and Swamp Head</li>
<li>Wild Woods and Echo</li>
<li>Wynkoop and Wonderland</li>
</ul>
    </div>
    <div id="ticker">
      <div id="ticker_days">14</div>
      <div id="ticker_hours">22</div>
      <div id="ticker_minutes">02</div>
      <div id="ticker_seconds">17</div><br>

  </div>

</div>

<div class="grid col-380 fit">
<div id="ticketing" >
  <h2>Get your tickets</h2>

  <iframe id="nightout-tickets" width="100%" height="620" frameborder="0" border="0" name="Big Dog Test Event" src="https://embed.nightout.com/events/collaboration-fest"></iframe>


  <div id="too-late" class="grid col-300">
    <p>You snooze you lose! This event already happened, but we have plenty more parties for you. Sign up for our newsletter and never miss out again.</p>
    <form action="http://imbibedenver.us4.list-manage.com/subscribe/post?u=7ac95e8ad52ca60aca50afc48&amp;id=396c7d3287" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
        <input type="email" value="" placeholder="Email Address" name="EMAIL" id="mail"><input type="submit" class="btn newsletter" value="Subscribe" name="subscribe" id="subscribe">
    </form>
      </div>
  </div>

  <div id="map-canvas" style="height: 250px; width: 400px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden; -webkit-transform: translateZ(0px);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; -webkit-transform-origin: 0px 0px; -webkit-transform: matrix(1, 0, 0, 1, 0, 0);"><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; width: 100%; z-index: 200;"><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div></div><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; width: 100%; z-index: 201;"><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0px); position: absolute; left: 12px; top: -95px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0px); position: absolute; left: 12px; top: 161px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0px); position: absolute; left: -244px; top: -95px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0px); position: absolute; left: -244px; top: 161px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0px); position: absolute; left: 268px; top: -95px;"></div><div style="width: 256px; height: 256px; overflow: hidden; -webkit-transform: translateZ(0px); position: absolute; left: 268px; top: 161px;"></div></div></div></div></div><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; width: 100%; z-index: 202;"><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div></div><div style="-webkit-transform: translateZ(0px); position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: 12px; top: -95px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: 12px; top: 161px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: -244px; top: -95px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: -244px; top: 161px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: 268px; top: -95px;"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: 268px; top: 161px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 400px; height: 250px;"><img src="https://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i436724&amp;2i795743&amp;2e1&amp;3u13&amp;4m2&amp;1u400&amp;2u250&amp;5m4&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;token=42630" style="width: 400px; height: 250px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1;"><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: -244px; top: 161px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?lyrs=m@255088151&amp;src=apiv3&amp;hl=en-US&amp;x=1705&amp;y=3109&amp;z=13&amp;style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0px);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: -244px; top: -95px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?lyrs=m@255051742&amp;src=apiv3&amp;hl=en-US&amp;x=1705&amp;y=3108&amp;z=13&amp;style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0px);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: 268px; top: -95px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?lyrs=m@255120665&amp;src=apiv3&amp;hl=en-US&amp;x=1707&amp;y=3108&amp;z=13&amp;style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0px);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: 268px; top: 161px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts1.googleapis.com/vt?lyrs=m@255142249&amp;src=apiv3&amp;hl=en-US&amp;x=1707&amp;y=3109&amp;z=13&amp;style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0px);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: 12px; top: -95px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?lyrs=m@255129716&amp;src=apiv3&amp;hl=en-US&amp;x=1706&amp;y=3108&amp;z=13&amp;style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0px);"></div><div style="width: 256px; height: 256px; -webkit-transform: translateZ(0px); position: absolute; left: 12px; top: 161px; opacity: 1; transition: opacity 200ms ease-out; -webkit-transition: opacity 200ms ease-out;"><img src="https://mts0.googleapis.com/vt?lyrs=m@255142455&amp;src=apiv3&amp;hl=en-US&amp;x=1706&amp;y=3109&amp;z=13&amp;style=47,37%7Csmartmaps" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; -webkit-transform: translateZ(0px);"></div></div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="http://maps.google.com/maps?ll=39.745773,-104.997085&amp;z=13&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 62px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 163px; bottom: 0px; width: 122px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2014 Google</span></div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); -webkit-box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 50px; top: 35px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2014 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2014 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; position: absolute; -webkit-user-select: none; right: 93px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a href="http://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Report errors in the road map or imagery to Google" href="http://maps.google.com/maps?ll=39.745773,-104.997085&amp;z=13&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3&amp;skstate=action:mps_dialog$apiref:1&amp;output=classic" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint" draggable="false" controlwidth="32" controlheight="84" style="margin: 5px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"><div controlwidth="32" controlheight="40" style="cursor: url(https://maps.gstatic.com/mapfiles/openhand_8_8.cur) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -9px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -107px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -58px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div style="width: 32px; height: 40px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/cb_scout2.png" draggable="false" style="position: absolute; left: -205px; top: -102px; width: 1028px; height: 214px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="0" controlheight="0" style="opacity: 0.6; display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 22px; height: 22px; overflow: hidden; position: absolute; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -38px; top: -360px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></div><div class="gmnoprint" controlwidth="20" controlheight="39" style="position: absolute; left: 6px; top: 45px;"><div style="width: 20px; height: 39px; overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt3.png" draggable="false" style="position: absolute; left: -39px; top: -401px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div title="Zoom in" style="position: absolute; left: 0px; top: 2px; width: 20px; height: 17px; cursor: pointer;"></div><div title="Zoom out" style="position: absolute; left: 0px; top: 19px; width: 20px; height: 17px; cursor: pointer;"></div></div></div><div class="gmnoprint" style="margin: 5px; z-index: 0; position: absolute; cursor: pointer; right: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border: 1px solid rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 23px; font-weight: 500;">Map</div><div style="background-color: white; z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 24px; text-align: left; display: none;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 1px 6px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 1px 1px 1px 0px; border-top-style: solid; border-right-style: solid; border-bottom-style: solid; border-top-color: rgba(0, 0, 0, 0.14902); border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 38px;">Satellite</div><div style="background-color: white; z-index: -1; padding-top: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; border-width: 0px 1px 1px; border-right-style: solid; border-bottom-style: solid; border-left-style: solid; border-right-color: rgba(0, 0, 0, 0.14902); border-bottom-color: rgba(0, 0, 0, 0.14902); border-left-color: rgba(0, 0, 0, 0.14902); -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 24px; text-align: left; display: none;"><div draggable="false" title="Zoom in to show 45 degree view" style="color: rgb(184, 184, 184); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap; display: none;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(241, 241, 241); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">45°</label></div><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 3px 8px 3px 5px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-top-left-radius: 1px; border-top-right-radius: 1px; border-bottom-right-radius: 1px; border-bottom-left-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="https://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div>

<!-- Begin social buttons -->
<div class="social" style="margin-top:50px;">
    <style type="text/css">
  .share-this {
    font-size: 16px;
    color: black;
  }

  #social {
    background-color: #f1f1f1;
    -webkit-border-radius: 5px;
      border-radius: 5px;
    padding: 10px;
  }

  #social .share-btn {
    float: left;
  }

  #share-btns {
    float: right;
  }
</style>

<div id="social" class="clearfix span5 inner-left">
  <p class="share-this"><strong>Share this event:</strong><br>
    <span style="font-size: 10px;">(no one likes to party alone)</span>
  </p>
  <div id="share-btns">
    <div class="share-btn">
      <a href="http://twitter.com/share?u=Check+out+this+event!+Collaboration Festival:+http://imbibedenver.com/products/collaboration-festival" target="_blank"><img src="//cdn.shopify.com/s/files/1/0247/3455/t/1/assets/Twitter.png?1825"></a>
      <!-- <a href="http://twitter.com/share" class="twitter-share-button" data-url="http://imbibedenver.com/products/collaboration-festival" data-count="none" data-via="">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script> -->
    </div>
    <div class="share-btn">
      <a href="https://plus.google.com/share?url=http://imbibedenver.com/products/collaboration-festival" target="_blank">
        <img src="//cdn.shopify.com/s/files/1/0247/3455/t/1/assets/Google-Plus.png?1825">
      </a>
      <!-- <g:plusone size="medium" annotation="none"></g:plusone>-->
    </div>

    <!-- <div class="pinterest">
      <a href="http://pinterest.com/pin/create/button/?url=http://imbibedenver.com/products/collaboration-festival&media=//cdn.shopify.com/s/files/1/0247/3455/products/Web_ready_image_1_large.jpg?v=1386631815" class="pin-it-button" count-layout="horizontal">Pin It</a>
      <script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script>
    </div> -->
    <!-- <div class="facebook-like share-icon"><iframe src="//www.facebook.com/plugins/like.php?href=http://imbibedenver.com/products/collaboration-festival&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe></div> -->
    <div class="share-btn">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http://imbibedenver.com/products/collaboration-festival" target="_blank"><img src="//cdn.shopify.com/s/files/1/0247/3455/t/1/assets/Facebook.png?1825"></a>
    </div>

    <div class="share-btn">
      <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=&amp;su=Check+out+Collaboration Festival&amp;body=Check+out+this+event!%0D%0A%0D%0Ahttp://imbibedenver.com/products/collaboration-festival" target="_blank">
        <img src="//cdn.shopify.com/s/files/1/0247/3455/t/1/assets/Email.png?1825">
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
