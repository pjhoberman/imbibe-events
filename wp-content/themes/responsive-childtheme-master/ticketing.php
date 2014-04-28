<?php
/* to do
 - link buttons


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
<link href='http://fonts.googleapis.com/css?family=Sansita+One|Lato' rel='stylesheet' type='text/css'>
<style type="text/css">
    #wrapper {
        padding: 0;
        font-family: 'Lato', 'sans-serif';
    }
    #ticketing > div {
        width: 100%;
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
        color: black;
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

    #our-clients > p {
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
    }

    #integration .integration-type {
        height: 160px;
        width: 600px;
        margin-bottom: 10px;
    }
</style>

<div id="ticketing">
    <div id="ticketing-header">
        <div id="ticketing-content">
            <h2>Online solutions for craft events</h2>
            <p>Exclusive event ticketing & management for local events involving craft beer, spirits, and food.</p>
            <div class="ticketing-button">Create an event</div>
        </div>
    </div>

    <div id="our-clients">
        <p>Our Clients</p>
        <img src="/wp-content/imbibe-images/great_divide.png" />
        <img src="/wp-content/imbibe-images/great_divide.png" />
        <img src="/wp-content/imbibe-images/great_divide.png" />
    </div>

    <div id="example">
        <p><strong>Imbibe</strong> will host only the best craft events on one site. Want more exposure? Bigger reach? Great brand pairing? Let's spread our craft!</p>
        <p><strong>And the best part? It's FREE</strong></p>
        <div class="ticketing-button">Get started</div>
        <img src="/wp-content/imbibe-images/example.png" id="example-screenshot" />
    </div>

    <div id="integration">
        <div class="integration-type" style="background-color: #3B5A95; color: white;">
            Facebook App
        </div>

        <div class="integration-type" style="background-color: #3D3D3D; color: white;">
            Tickets Everwhere
        </div>

        <div class="integration-type" style="background-color: #CECECE; color: black;">
            Events Everywhere
        </div>
    </div>

    <div id="mobile">
        Mobile
    </div>

    <div id="stats">
        Stats
    </div>

    <div id="app">
        App
    </div>

    <div id="features">
        Features
    </div>

    <div id="get-started">
        Get started
    </div>

    <div id="questions">
        Questions
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
