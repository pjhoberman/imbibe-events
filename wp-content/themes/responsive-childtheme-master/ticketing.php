<?php
/* to do
 - link buttons
 - test browsers
 - test widths
 - test mobile
 - shadow?



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
<link href="/wp-content/scripts/ticketing.css" rel="stylesheet" type="text/css">

<div id="ticketing">
    <div id="ticketing-header">
        <div id="ticketing-content">
            <h2>Online solutions for craft events</h2>
            <p>Exclusive event ticketing & management for local events involving craft beer, spirits, and more!</p>
            <div class="ticketing-button"><a href="http://imbibe.nightout.com/signup">Create an event</a></div>
        </div>
    </div>


    <div id="our-clients">
        <p>Our Clients</p>
        <a href="http://www.greatdivide.com" target="_blank"><img src="/wp-content/imbibe-images/great_divide.png" /></a>
        <a href="http://www.dstill.co" target="_blank"><img src="/wp-content/imbibe-images/d-still.jpg" /></a>
        <a href="http://www.newbelgium.com" target="_blank"><img src="/wp-content/imbibe-images/new-belgium.jpg" /></a>
        <a href="http://www.eatdenver.com" target="_blank"><img src="/wp-content/imbibe-images/eatDenver.jpg" /></a>
        <a href="http://www.breckbrew.com" target="_blank"><img src="/wp-content/imbibe-images/breck.png" /></a>

        <a href="http://www.epicbrewing.com" target="_blank"><img src="/wp-content/imbibe-images/epic.jpg" /></a>
        <a href="http://www.coloradobeer.org" target="_blank"><img src="/wp-content/imbibe-images/cbg.png" /></a>
        <a href="http://www.illegalpetes.com" target="_blank"><img src="/wp-content/imbibe-images/illegal-petes.png" /></a>
        <a href="http://www.denverbeerfestivus.com" target="_blank"><img src="/wp-content/imbibe-images/festivus.png" /></a>
        <a href="http://www.crazymountainbrewery.com" target="_blank"><img src="/wp-content/imbibe-images/crazy-mtn.jpg" /></a>

    </div>


    <div id="example">
        <p><strong>Imbibe</strong> will host only the best craft events on one site. Want more exposure? Bigger reach? Great brand pairing? Let's spread our craft!</p>
        <p><strong>And the best part? It's FREE</strong></p>
        <div class="ticketing-button"><a href="http://imbibe.nightout.com/signup">Get started</a></div>
        <img src="/wp-content/imbibe-images/example.png" id="example-screenshot" />
    </div>


    <div id="integration">
        <div class="integration-types">
            <div class="integration-type" style="background-color: #3B5A95; color: white;">
                <p class="integration-title"><strong>Facebook</strong> App</p>
                <p>Adds a tab on your Facebook page that lists all of your upcoming events and lets your followers buy tickets without ever leaving Facebook.</p>
            </div>

            <div class="integration-type" style="background-color: #3D3D3D; color: white;">
                <img src="/wp-content/imbibe-images/example-tickets-everywhere.png" />
                <p class="integration-title"><strong>Tickets</strong> Everywhere</p>

                <p>Using this simple HTML snippet, you can turn your existing site or blog into a shopping cart platform! Learn more</p>

            </div>

            <div class="integration-type" style="background-color: #41BAA0; color: black;">
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


    <div id="mobile">
        <h2>Mobile Ready</h2>
        <p>Your event page is created for simple navigation across all mobile platforms</p>
        <img src="/wp-content/imbibe-images/mobile/versions.jpg" />
        <p>Event pages are built for seamless navigation and optimal conversations across all mobile platforms</p>
        <p>One touch checkout process</p>
        <p>Expand reach to customers wherever they are</p>

    </div>

    <div id="stats">
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

    <div id="app">
        <h2>Entry Flow <span style="font-weight: normal;">App</span><img src="/wp-content/imbibe-images/app/free.png" style="margin-left: 10px;"/></h2>
        <span class="lighter">Our free validation app that checks guests in with ease.</span>
        <ul class="lighter" style="list-style-type: square; padding-left: 19px; margin-top: 10px;">
            <li>Scan QR code on printed & digital tickets</li>
            <li>Swipe guests by name and ticket numbers</li>
        </ul>

        <a href="" style="margin-right: 15px;"><img src="/wp-content/imbibe-images/app/app-store-button.png" /></a><a href="">View other entry solutions</a>

    </div>

    <div id="features">
        <h2>Plus all the features you expect<img src="/wp-content/imbibe-images/app/free.png" style="margin-left: 10px;"/></h2>

        <div class="feature-container">
            <div class="feature promo">

                <h3>Promo Codes</h3>
                <p>Apply a promo code to any or all of your ticket types, set start and end time and limit the total number available and total uses per user.</p>
            </div>

            <div class="feature promoters">

                <h3>Invite &amp; Track Promoters</h3>
                <p>Invite unlimited promoters, each with a unique tracking link and personalized dashboard detailing their stats.</p>
            </div>

            <div class="feature collaborators">

                <h3>Account Collaborators</h3>
                <p>Invite your team to collaborate on your account(s) and/or event(s).</p>
            </div>

            <div class="feature notifications">

                <h3>Automatic Notifications</h3>
                <p>Set and adjust your notification settings to receive sales updates and milestone updates via email. </p>
            </div>

            <div class="feature sales-reports">

                <h3>Detailed Sales Reports</h3>
                <p>It's important to know how your finances break down; with our comprehensive sales reports you won't miss a penny.</p>
            </div>

            <div class="feature tracking">

                <h3>Custom Tracking Links</h3>
                <p>Create unlimited custom tracking links to track and analyze specific outlets, campaigns and affiliates.</p>
            </div>

            <div class="feature subdomain">

                <h3>Custom Event Sub-Domain</h3>
                <p>Choose a custom subdomain when you create your event to enhance your branding and make your event easy to find.</p>
            </div>

            <div class="feature payout">

                <h3>Flexible Payout Structure</h3>
                <p>We'll work with you to get your funds in hand when you need them.</p>
            </div>
            <div style="clear: both;">&nbsp;</div>
        </div>


    </div>
    <div id="pricing">
        <h2>Imbibe's Service Fee</h2>
        <p>For each ticket you sell Imbibe charges 2% of the ticket price plus $0.99 per ticket sold.</p>
        <div class="grid col-300">
            <h4>Credit Card Processing Fee</h4>
            <p> When you sell tickets on Imbibe the payment is processed through our merchant processor for which we charge 3% of the ticket value.</p>
            <p>We leave it up to you how you want to pay the fee. You can absorb the fee into your ticket price or pass the fee along to the buyer as an added "fee" when they purchase their ticket.</p>
        </div>
        <div class="grid col-300">
            <h4>How You Get Paid</h4>
            <p>We generally send your funds via check or direct deposit five days after your event is over. We can also work with you on custom payout terms to better meet your needs.</p>
        </div>
        <div class="grid col-300">
            <h4>Need to Knows</h4>
            <ul>
                <li>We accept all major credit cards for your buyer's convenience.</li>
                <li>There is no cost or set up time.</li>
                <li>We are 100% PCI compliant. <br />(<a href="http://stripe.com">More about our merchant processor Stripe</a>)</li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>

    <div id="get-started">
        <h2>Ready to get started?</h2>
        <p>Sign up now and get instant access</p>
        <div class="ticketing-button"><a href="http://imbibe.nightout.com/signup">Start Creating Events</a></div>
    </div>

    <div id="questions">
        <h2>Have Questions? <span style="font-weight: normal;">Contact us at <a href="mailto:holler@imbibedenver.com" style="text-decoration:underline;">holler@imbibedenver.com</a> or 720.722.1223</span></h2>
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
