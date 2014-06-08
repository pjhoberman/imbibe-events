<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
    <?php responsive_footer_top(); ?>

    <div id="footer-wrapper">

        <?php get_sidebar( 'footer' ); ?>

        <div class="grid col-940">

            <div class="grid col-540">
                <?php if( has_nav_menu( 'footer-menu', 'responsive' ) ) { ?>
                    <?php wp_nav_menu( array(
                                           'container'      => '',
                                           'fallback_cb'    => false,
                                           'menu_class'     => 'footer-menu',
                                           'theme_location' => 'footer-menu'
                                       )
                    );
                    ?>
                <?php } ?>
            </div>
            <!-- end of col-540 -->

            <div class="grid col-380 fit">
                <?php echo responsive_get_social_icons() ?>
            </div>
            <!-- end of col-380 fit -->

            <script type="text/javascript">
            jQuery(document).ready( function () {
                var jQueryform = jQuery('#mc-embedded-subscribe-form');

                if ( jQueryform.length > 0 ) {
                    jQuery('form input[type="submit"]').bind('click', function ( event ) {
                        if ( event ) event.preventDefault();
                    // validate_input() is a validation function I wrote, you'll have to substitute this with your own.
                    register(jQueryform);
                    // if ( validate_input(jQueryform) ) { register(jQueryform); }
                });
                }
            });

            function register(jQueryform) {
                jQuery.ajax({
                    type: jQueryform.attr('method'),
                    url: jQueryform.attr('action'),
                    data: jQueryform.serialize(),
                    cache       : false,
                    dataType    : 'json',
                    contentType: "application/json; charset=utf-8",
                    error       : function(err) { console.log("Could not connect to the registration server. Please try again later."); console.log(err)},
                    success     : function(data) {
                        console.log(data);
                        if (data.result != "success") {
                        // Something went wrong, do something to notify the user. maybe alert(data.msg);
                    } else {
                        // It worked, carry on...
                    }
                }
            });
            }
            </script>

            <div class="grid col-460">
                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                    <h4><label for="mce-EMAIL" style="padding: 0;">Sign up to learn about events and cool stuff</label></h4>
                <form action="http://imbibedenver.us4.list-manage.com/subscribe/post-json?u=7ac95e8ad52ca60aca50afc48&amp;id=396c7d3287" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="padding: 0;">
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_7ac95e8ad52ca60aca50afc48_396c7d3287" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-image: none;"></div>
                </form>
                </div>

                <!--End mc_embed_signup-->
            </div>

            <div class="grid col-460 fit">
                <h4>Follow Us</h4>
                <a href="http://twitter.com/imbibedenver" title="Imbibe on Twitter" class="icon-social twitter">Twitter</a>
                <a href="https://www.facebook.com/ImbibeDenver" title="Imbibe on Facebook" class="icon-social facebook">Facebook</a>


                <a href="http://instagram.com/imbibedenver" title="Imbibe on Instagram" class="icon-social instagram">Instagram</a>




          </div>

        </div>
        <!-- end of col-940 -->
        <?php get_sidebar( 'colophon' ); ?>



        <div class="grid col-940 copyright" style="text-align: center;">
            <?php esc_attr_e( '&copy;', 'responsive' ); ?> <?php echo date( 'Y' ); ?><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                <?php bloginfo( 'name' ); ?>
            </a> | <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-service">Terms of Service</a>
        </div>
        <!-- end of .copyright -->

        <!-- <div class="grid col-300 scroll-top"><a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a></div> -->

        <!-- <div class="grid col-300 fit powered">
            <a href="<?php echo esc_url( 'http://cyberchimps.com/responsive-theme/' ); ?>" title="<?php esc_attr_e( 'Responsive Theme', 'responsive' ); ?>">
                Responsive Theme</a>
            <?php esc_attr_e( 'powered by', 'responsive' ); ?> <a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" title="<?php esc_attr_e( 'WordPress', 'responsive' ); ?>">
                WordPress</a>
        </div> -->
        <!-- end .powered -->

    </div>
    <!-- end #footer-wrapper -->

    <?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>
