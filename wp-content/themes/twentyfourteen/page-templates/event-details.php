<?php
/**
 *
 * Template Name: Event Details
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
                // hide the loop for now
                // Start the Loop.
                // while ( have_posts() ) : the_post();

                //     // Include the page content template.
                //     get_template_part( 'content', 'page' );

                //     // If comments are open or we have at least one comment, load up the comment template.
                //     if ( comments_open() || get_comments_number() ) {
                //         comments_template();
                //     }
                // endwhile;
            ?>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/event-details.php"); ?>
        </div><!-- #content -->
    </div><!-- #primary -->
    <?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
