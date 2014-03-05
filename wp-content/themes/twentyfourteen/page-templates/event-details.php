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
            Event Details page!
            <?= $event_slug ?>

            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();

                    // Include the page content template.
                    get_template_part( 'content', 'page' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile;
            ?>

            Event Details start here.
            <? include_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/nightout.php"); ?>
            <?php $this_event = getThisEvent($event_slug); ?>

            <div id="eventTitle"><?= $this_event -> title ?></div>
            <div id="eventStart"><?= $this_event -> start_time ?></div>
            <div id="eventEnd"><?= $this_event -> end_time ?></div>
            <div id="eventDescription"><?= $this_event -> description ?></div>
            <div id="eventPoster"><img src="<?= $this_event -> poster_url -> large ?>" /></div>
            <iframe id="ticketingEmbed" src="https://embed.nightout.com/events/<?= $this_event -> subdomain ?>" height="600px" width="400px"></div>

        </div><!-- #content -->
    </div><!-- #primary -->
    <?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
