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

            <?
            // A lot of this mailchimp code comes from:
            // http://designshack.net/articles/css/custom-mailchimp-email-signup-form/
            ?>

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
                error       : function(err) { jQuery('#notification_container').html('<span class="alert">Could not connect to server. Please try again later.</span>'); },
                success     : function(data) {

                  if (data.result != "success") {
                    if( ! isNaN(data.msg.charAt(0) * 1 )) {
                        var message = data.msg.substring(4);
                    } else {
                        var message = data.msg;
                    }
                    jQuery('#notification_container').html('<span class="alert">'+message+'</span>');
                  }

                  else {
                    var message = data.msg;
                    jQuery('#notification_container').html('<span class="success">'+message+'</span>');
                  }
                }
              });
            }
            </script>

            <style type="text/css">
                /* MailChimp Form Embed Code - Slim - 08/17/2011 */
#mc_embed_signup form {display: block; position: relative; text-align: left; padding: 10px 0 10px 3%; }
#mc_embed_signup h2 {font-weight: bold; padding: 0; margin: 15px 0; font-size: 1.4em; }

#mc_embed_signup input { border: 1px solid #ababab; -webkit-appearance: none; }
#mc_embed_signup input[type=checkbox]{ -webkit-appearance: checkbox; }
#mc_embed_signup input[type=radio]{ -webkit-appearance: radio; }
#mc_embed_signup input:focus { border-color: #799877; }

#mc_embed_signup .button {
  display: block;
  position: relative;
  background-color: #8db671;
  padding: 0;
  margin: 0 auto;
  border: 0 none;
  border-bottom: #719f5a 3px solid;
  border-radius: 6px;
  color: #fff;
  cursor: pointer;
  font-size: 14px;
  width: 140px;
  height: 36px;
  line-height: 36px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  vertical-align: top;
}
#mc_embed_signup .button:hover { background-color: #9cc183; border-bottom-color: #7fac69; }
#mc_embed_signup .button:active { top: 2px; border-bottom-width: 1px; }



#mc_embed_signup label { display: block; font-size: 13px; text-transform: uppercase; padding-bottom: 7px; color: #616161; font-weight: bold; }
#mc_embed_signup input.email {
  display: block;
  padding: 8px 4px;
  margin: 0 4% 10px 0;
  text-indent: 5px;
  color: #818181;
  font-size: 1.0em;
  background: #f3f3f3;
  font-weight: bold;
  width: 100%;
  -webkit-transition: all 0.2s linear;
  -moz-transition: all 0.2s linear;
  transition: all 0.2s linear;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
#mc_embed_signup input.email:focus {
  color: #666;
  background: #f3f3f3;
  -webkit-box-shadow: 0 0 12px #80cf7b;
  -moz-box-shadow: #80cf7b;
  box-shadow: #80cf7b;
}

/** Custom Styles **/
#notification_container {
  display: block;
  margin: 0 auto;
  padding-top: 25px;
}

#notification_container .alert {
  display: block;
  width: 100%;
  padding: 11px 20px;
  border: 1px solid #cfc07e;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #515151;
  font-size: 1.1em;
  line-height: 1.3em;
  font-weight: bold;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.75);
  background-color: #e3cb77;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#e3cb77), to(#f4e4a8));
  background-image: -webkit-linear-gradient(top, #e3cb77, #f4e4a8);
  background-image: -moz-linear-gradient(top, #e3cb77, #f4e4a8);
  background-image: -ms-linear-gradient(top, #e3cb77, #f4e4a8);
  background-image: -o-linear-gradient(top, #e3cb77, #f4e4a8);
  background-image: linear-gradient(top, #e3cb77, #f4e4a8);
}

#notification_container .success {
  display: block;
  width: 100%;
  padding: 11px 20px;
  border: 1px solid #78aa5f;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  color: #515151;
  font-size: 1.1em;
  line-height: 1.3em;
  font-weight: bold;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.5);
  background-color: #9ac784;
  background-image: -webkit-gradient(linear, left top, left bottom, from(#9ac784), to(#aed39c));
  background-image: -webkit-linear-gradient(top, #9ac784, #aed39c);
  background-image: -moz-linear-gradient(top, #9ac784, #aed39c);
  background-image: -ms-linear-gradient(top, #9ac784, #aed39c);
  background-image: -o-linear-gradient(top, #9ac784, #aed39c);
  background-image: linear-gradient(top, #9ac784, #aed39c);
}
            </style>

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
                <form action="http://imbibedenver.us4.list-manage.com/subscribe/post-json?u=7ac95e8ad52ca60aca50afc48&amp;id=396c7d3287&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="padding: 0;">
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_7ac95e8ad52ca60aca50afc48_396c7d3287" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-image: none;"></div>
                </form>
                <div id="notification_container"></div>
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
