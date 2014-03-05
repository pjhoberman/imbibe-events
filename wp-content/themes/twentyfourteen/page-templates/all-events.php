<?php
/**
 *
 * Template Name: All Events
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
    if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
        // Include the featured content template.
        get_template_part( 'featured-content' );
    }
?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    get_template_part( 'content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    // if ( comments_open() || get_comments_number() ) {
                    //     comments_template();
                    // }
                endwhile;
            ?>

            <style type="text/css">
            .event_preview {
                height: 200px;
                width: 200px;
                float: left;
                margin: 15px;
                overflow: hidden;
            }

            .event_preview img {
                max-height: 200px;
                max-width: 200px;
            }
            </style>

            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/nightout.php"); ?>

            <?php
                $all_events = getAllEvents();
                foreach($all_events as $key => $value) {
                    ?>
                <div class="event_preview">
                    <a href="/event/<?= $value -> subdomain ?>">
                        <img src="<?= $value -> poster_url -> small ?>" />
                    </a>
                </div>
                    <?php
                } // foreach
            ?>

        </div><!-- #content -->
    </div><!-- #primary -->
    <?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
