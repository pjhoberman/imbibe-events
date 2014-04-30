<?php
/* to do
 - link buttons
 - test browsers
 - test widths
 - test mobile
 - shadow?
 - #mobile - padding on container or #mobile.. bg..
 - #our-clients - border top thing



*/
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Template Name: Ticketing Template
 *
 *
 * @file           ticketing.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>
<link href='http://fonts.googleapis.com/css?family=Sansita+One|Lato:400, 700, 900' rel='stylesheet' type='text/css'>
<style type="text/css">

    #header {
        max-width: 960px;
        margin: 0 auto;
    }

    #container {
        max-width: 100%;
        padding: 0;
    }
    #wrapper {
        padding: 0;
        font-family: 'Lato', 'sans-serif';
        color: black;
    }

    .lighter {
        color: #555;
    }

    .interior-container {
        width: 960px;
        margin: 0 auto;
        position: relative;
    }

    #ticketing > div {
        width: 100%;
        min-width: 960px;
    }

    /* Ticketing Header */
    #ticketing-header {
        background: transparent url(/wp-content/imbibe-images/ticketing-header.jpg) center center no-repeat;
        height: 282px;
        position: relative;
    }

    #ticketing-content {
        width: 358px;
        height: 232px;
        margin-left: 581px;
        padding: 25px 0 0 30px;
    }

    #ticketing-header h2 {
        font-family: 'Sansita One', cursive;
    }

    #ticketing-header p {
        font-weight: bold;
        font-size: 16px;
        padding-right: 25px;
    }

    .ticketing-button {
        height: 23px;
        padding: 10px 0;
        width: 220px;
        background-color: black;
        color: white;
        text-align: center;
        margin-left: 115px;
        font-weight : bold;
        cursor: pointer;
    }

    /* Our Clients */
    #our-clients {
        border-top: 30px solid black;
        text-align: center;
    }

    #our-clients img {
        height: 150px;
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        filter: grayscale(100%);
        margin: 25px;
    }

    #our-clients img:hover {
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        filter: grayscale(0%);
    }

    #our-clients p {
        margin-top: -25px;
        color: #DECEA5;
        font-family: 'Sansita One', 'cursive';

    }

    /* Example */

    #example {
        background: transparent url(/wp-content/imbibe-images/example-bg.jpg) top left repeat;
        height: 435px;
        position: relative;
        padding-top: 70px;
    }

    #example-screenshot {
        position: absolute;
        top: 30px;
        right: 70px;
        height: 385px;
    }

    #example p {
        width: 250px;
        color: white;
        padding-bottom: 25px;
        margin-left: 115px;
        font-size: 18px;
    }

    /* Integration */

    #integration {
        padding: 10px 0;
        clear: both;
        /*background-color: #F2F2F2;*/
        margin-bottom: 10px;
    }

    .integration-types {
        width: 600px;
        float: left;
        height: 470px;
    }

    #integration .integration-type {
        height: 160px;
        width: 600px;
        margin-bottom: 10px;
    }

    #integration .integration-title {
        font-size: 24px;
    }

    #integration .integration-type p {
        padding-left: 15px;
        width: 360px;
        margin: 0;
        padding-top: 25px;
    }

    #integration .integration-title strong {
        font-weight: 900;
    }

    #integration .integration-type img {
        float: right;
        margin-right: 70px;
        margin-top: 10px;
    }

    #integrate-easily {
        float: left;
        width: 350px;
        margin-top: 142px;
        text-align: center;
        margin-left: 10px;
        /*background-color: white;*/
    }

    #integration #integrate-easily p {
        margin-bottom: 25px;
    }

    #integrate-easily img {
        margin: 0 10px;
    }

    /* Mobile Ready */

    #mobile {
        background-color: #A0A09E;
    }

    #mobile .interior-container {
        background: #A0A09E url(/wp-content/imbibe-images/mobile/phones.png) 400px 50px no-repeat;
    }

    #mobile, #mobile .interior-container {
        padding-bottom: 25px;
    }

    #mobile h2 {
        font-family: "Sansita One", cursive;
        padding: 10px;
        margin-top: 0;
    }

    #mobile p {
        width: 400px;
        padding-left: 10px;
    }

    #mobile img {
        padding-left: 10px;
    }

    /* Stats */
    #stats {
        background-color: #F2F2F2;
        margin-top: -1.6em;
        padding-bottom: 20px;
    }

    #stats h2 {
        font-family: "Sansita One", cursive;
        margin-top: 0;
        padding-top: 25px;
        width: 100%;
        text-align: center;
        font-size: 18px;
    }

    #stats .stat {
        float: left;
        width: 310px;
        margin: 0 5px;
        text-align: center;
    }

    #stats .stat h3 {
        font-size: 16px;
    }

    /* App */
    #app .app-content{
        padding: 10px 0 340px 570px;
    }

    #app .interior-container {
        background: transparent url(/wp-content/imbibe-images/app/phone-example.png) left center no-repeat;
    }

    /* Features */
    #features {
        background-color: #00AEEA;
        padding-top: 25px;
    }

    #features h2 {
        font-family: "Sansita One", cursive;
        font-size: 22px;
        margin-top: 0;
        margin-bottom: 50px;
        width: 100%;
        text-align: center;
    }

    #features .feature-container {
        width: 750px;
        margin: 0 auto;
    }

    #features .feature {
        float: left;
        width: 340px;
        height: 120px;
        margin: 10px;
        padding-right: 10px;

    }
    #features h3 {
        background: url(/wp-content/imbibe-images/features/features-sprite.png) no-repeat top left;
        font-size: 18px;
    }

    #features .collaborators h3{ background-position: 0 0; /*width: 26px;*/ height: 26px; }
    #features .notifications h3{ background-position: 0 -76px; /*width: 25px;*/ height: 26px; }
    #features .payout h3{ background-position: 0 -152px; /*width: 26px;*/ height: 23px; }
    #features .promo h3{ background-position: 0 -225px; /*width: 26px;*/ height: 26px; }
    #features .promoters h3{ background-position: 0 -301px; /*width: 25px;*/ height: 25px; }
    #features .sales-reports h3{ background-position: 0 -376px; /*width: 24px;*/ height: 26px; }
    #features .subdomain h3{ background-position: 0 -452px; /*width: 26px;*/ height: 26px; }
    #features .tracking h3{ background-position: 0 -528px; /*width: 25px;*/ height: 25px; }

    #features h3, #features p {
        padding-left: 35px;
        margin: 0;
    }

    #features p {
        color: #555;
    }

    /* get started */
    #get-started {
        background-color: black;
        text-align: center;
        padding-top:20px;
        padding-bottom: 50px;
    }

    #get-started h2 {
        font-family: "Sansita One", cursive;
        font-size: 22px;
        margin-top: 0;
        margin-bottom: 50px;
        width: 100%;
        text-align: center;
        color: white;
    }

    #get-started p {
        color: #8D8D8D;
    }

    #get-started .ticketing-button {
        margin: 0;
        display: inline-block;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        width: 175px;

    }

    /* questions */
    #questions {
        background-color: #8D8D8D;
        padding: 50px 0;
    }

    #questions h2 {
        font-size: 22px;
        margin-top: 0;
        width: 100%;
        text-align: center;
    }
</style>

<div id="ticketing">
    <div id="ticketing-header">
        <div class="interior-container">
            <div id="ticketing-content">
                <h2>Online solutions for craft events</h2>
                <p>Exclusive event ticketing & management for local events involving craft beer, spirits, and food.</p>
                <div class="ticketing-button">Create an event</div>
            </div>
        </div>
    </div>


    <div id="our-clients">
        <div class="interior-container">
            <p>Our Clients</p>
            <img src="/wp-content/imbibe-images/great_divide.png" />
            <img src="/wp-content/imbibe-images/great_divide.png" />
            <img src="/wp-content/imbibe-images/great_divide.png" />
        </div>
    </div>


    <div id="example">
        <div class="interior-container">
            <p><strong>Imbibe</strong> will host only the best craft events on one site. Want more exposure? Bigger reach? Great brand pairing? Let's spread our craft!</p>
            <p><strong>And the best part? It's FREE</strong></p>
            <div class="ticketing-button">Get started</div>
            <img src="/wp-content/imbibe-images/example.png" id="example-screenshot" />
        </div>
    </div>


    <div id="integration">
        <div class="interior-container">
            <div class="integration-types">
                <div class="integration-type" style="background-color: #3B5A95; color: white;">
                    <p class="integration-title"><strong>Facebook</strong> App</p>
                    <p>Adds a tab on your Facebook page that lists all of your upcoming events and lets your followers buy tickets without ever leaving Facebook.</p>
                </div>

                <div class="integration-type" style="background-color: #3D3D3D; color: white;">
                    <img src="/wp-content/imbibe-images/example-tickets-everywhere.png" />
                    <p class="integration-title"><strong>Tickets</strong> Everwhere</p>

                    <p>Using this simple HTML snippet, you can turn your existing site or blog into a shopping cart platform! Learn more</p>

                </div>

                <div class="integration-type" style="background-color: #CECECE; color: black;">
                    <img src="/wp-content/imbibe-images/example-events-everywhere.png" />
                    <p class="integration-title"><strong>Events</strong> Everywhere</p>
                    <p>Place a list of your upcoming events directly onto your website or blog.</p>
                </div>
            </div>

            <div id="integrate-easily">
                <h2>Integrate Easily</h2>
                <p>Host ticketing on your own media as well! Our technology allows you to integrate your craft event into your existing website, blog, and even Facebook</p>
                <img src="/wp-content/imbibe-images/integrate/facebook.png" />
                <img src="/wp-content/imbibe-images/integrate/tumblr.png" />
                <img src="/wp-content/imbibe-images/integrate/wordpress.png" />
                <img src="/wp-content/imbibe-images/integrate/blogger.png" />
            </div>
            <div style="clear:both;">&nbsp;</div>
        </div>
    </div>


    <div id="mobile">
        <div class="interior-container">
            <h2>Mobile Ready</h2>
            <p>Your event page is created for simple navigation across all mobile platforms</p>
            <img src="/wp-content/imbibe-images/mobile/versions.jpg" />
            <p>Event pages are built for seamless navigation and optimal conversations across all mobile platforms</p>
            <p>One touch checkout process</p>
            <p>Expand reach to customers wherever they are</p>
        </div>
    </div>

    <div id="stats">
        <div class="interior-container">
            <h2>Comprehensive Stats</h2>
            <div class="stat">
                <h3>Sales</h3>
                <p>Detailed sales reports and custom tracking link, promoter, and promo code sales.</p>
                <img src="/wp-content/imbibe-images/stats/sales.png" />

            </div>

            <div class="stat">
                <h3>Insights</h3>
                <p>Beneficial insights into your attendee's age, gender, location and platform.</p>
                <img src="/wp-content/imbibe-images/stats/insights.png" />
            </div>

            <div class="stat">
                <h3>Analytics</h3>
                <p>Extensive analytics for your event's visits conversions, referral traffic, and more.</p>
                <img src="/wp-content/imbibe-images/stats/analytics.png" />
            </div>

            <div style="clear: both; height: 1px;">&nbsp;</div>
        </div>
    </div>

    <div id="app">
        <div class="interior-container">
            <div class="app-content">
                <h2>Entry Flow <span style="font-weight: normal;">App</span><img src="/wp-content/imbibe-images/app/free.png" style="margin-left: 10px;"/></h2>
                <span class="lighter">Our free validation app that checks guests in with ease.</span>
                <ul class="lighter" style="list-style-type: square; padding-left: 19px; margin-top: 10px;">
                    <li>Scan QR code on printed & digital tickets</li>
                    <li>Swipe guests by name and ticket numbers</li>
                </ul>

                <a href="" style="margin-right: 15px;"><img src="/wp-content/imbibe-images/app/app-store-button.png" /></a><a href="">View other entry solutions</a>
            </div>
        </div>
    </div>

    <div id="features">
        <div class="interior-container">
            <h2>Plus all the features you expect<img src="/wp-content/imbibe-images/app/free.png" style="margin-left: 10px;"/></h2>

            <div class="feature-container">
                <div class="feature promo">

                    <h3>Promo Codes</h3>
                    <p>Lorem ipsum dolor em hiffty port and slinky do. What else can you do?</p>
                </div>

                <div class="feature promoters">

                    <h3>Invite &amp; Track Promoters</h3>
                    <p>Lorem ipsum dolor em hiffty port and slinky do. What else can you do?</p>
                </div>

                <div class="feature collaborators">

                    <h3>Account Collaborators</h3>
                    <p>Lorem ipsum dolor em hiffty port and slinky do. What else can you do?</p>
                </div>

                <div class="feature notifications">

                    <h3>Automatic Notifications</h3>
                    <p>Lorem ipsum dolor em hiffty port and slinky do. What else can you do?</p>
                </div>

                <div class="feature sales-reports">

                    <h3>Detailed Sales Reports</h3>
                    <p>Lorem ipsum dolor em hiffty port and slinky do. What else can you do?</p>
                </div>

                <div class="feature tracking">

                    <h3>Custom Tracking Links</h3>
                    <p>Lorem ipsum dolor em hiffty port and slinky do. What else can you do?</p>
                </div>

                <div class="feature subdomain">

                    <h3>Custom Event Sub-Domain</h3>
                    <p>Lorem ipsum dolor em hiffty port and slinky do. What else can you do?</p>
                </div>

                <div class="feature payout">

                    <h3>Flexible Payout Structure</h3>
                    <p>Lorem ipsum dolor em hiffty port and slinky do. What else can you do?</p>
                </div>
                <div style="clear: both;">&nbsp;</div>
        </div>
    </div>


    </div>

    <div id="get-started">
        <div class="interior-container">
            <h2>Ready to get started?</h2>
            <p>Sign up now and get instant access</p>
            <div class="ticketing-button" style="background-color: #CBB374; color: #8D8D8D;">See Pricing</div>
            <div class="ticketing-button" style="background-color: #8D8D8D;">Start Creating Events</div>
        </div>
    </div>

    <div id="questions">
        <div class="interior-container">
            <h2>Have Questions? <span style="font-weight: normal;">Contact us at <a href="mailto:holler@imbibedenver.com">holler@imbibedenver.com</a> or ###.###.####</span></h2>
        </div>
    </div>
</div> <!-- #ticketing -->


<? /*
This is a new template
<div id="content" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>">

    <?php if( have_posts() ) : ?>

        <?php while( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'loop-header' ); ?>

            <?php responsive_entry_before(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php responsive_entry_top(); ?>

                <?php //get_template_part( 'post-meta-page' ); ?>
                <h1 class="entry-title post-title"><?= get_the_title() ?></h1>

                <div class="post-entry">
                    <?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
                </div>
                <!-- end of .post-entry -->

                <?php get_template_part( 'post-data' ); ?>

                <?php responsive_entry_bottom(); ?>
            </div><!-- end of #post-<?php the_ID(); ?> -->
            <?php responsive_entry_after(); ?>

        <?php
        endwhile;

        get_template_part( 'loop-nav' );

    else :

        get_template_part( 'loop-no-posts' );

    endif;
    ?>

</div><!-- end of #content -->

<?php get_sidebar(); ?>
*/ ?>
<?php get_footer(); ?>
