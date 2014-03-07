<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-home.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-home.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @link            http://demos.cyberchimps.com/responsivepro/responsive-grid/
 * @since          available since Release 1.0
 */
?>
<?php responsive_widgets_before(); // above widgets container hook ?>
    <div id="widgets" class="home-widgets">

        <!-- Featured Events - Super Feature - top -->
        <div id="home_widget_1" class="grid col-940">
            <?php responsive_widgets(); // above widgets hook ?>

            <?php if( !dynamic_sidebar( 'home-widget-1' ) ) : ?>
                <div class="widget-wrapper">

                    <div class="widget-title-home"><!-- <h3><?php _e( 'Home Widget 1', 'responsive' ); ?></h3> --></div>

                </div><!-- end of .widget-wrapper -->
            <?php endif; //end of home-widget-1 ?>

            <?php responsive_widgets_end(); // responsive after widgets hook ?>
        </div>
        <!-- end of .col-300 -->


        <!-- Featured events - large / left side -->
        <div id="home_widget_2" class="grid col-620">
            <?php responsive_widgets(); // responsive above widgets hook ?>

            <?php if( !dynamic_sidebar( 'home-widget-2' ) ) : ?>
                <div class="widget-wrapper">

                    <div class="widget-title-home"><!-- <h3><?php _e( 'Home Widget 2', 'responsive' ); ?></h3> --></div>

                </div><!-- end of .widget-wrapper -->
            <?php endif; //end of home-widget-2 ?>

            <?php responsive_widgets_end(); // after widgets hook ?>
        </div>
        <!-- end of .col-300 -->

        <!-- Featured events - small / right side -->
        <div id="home_widget_3" class="grid col-300 fit">
            <?php responsive_widgets(); // above widgets hook ?>

            <?php if( !dynamic_sidebar( 'home-widget-3' ) ) : ?>
                <div class="widget-wrapper">

                    <div class="widget-title-home"><!-- <h3><?php _e( 'Home Widget 3', 'responsive' ); ?></h3> --></div>

                </div><!-- end of .widget-wrapper -->
            <?php endif; //end of home-widget-3 ?>

            <?php responsive_widgets_end(); // after widgets hook ?>
        </div>
        <!-- end of .col-300 fit -->
    </div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>
