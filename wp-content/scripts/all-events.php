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
test
            <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/nightout.php"); ?>

            <?php
                $all_events = getAllEvents();
                if( $all_events ){
                    foreach($all_events as $key => $value) {
                        ?>
                    <div class="event_preview">
                        <a href="/event/<?= $value -> subdomain ?>">
                            <img src="<?= $value -> poster_url -> small ?>" />
                        </a>
                    </div>
                        <?php
                    } // foreach
                } else {
                    echo "The events aren't loading right now. Please try again later, or go check out what we're talking about on <a href='http://facebook.com/imbibedenver'>Facebook</a>.";
                }
            ?>
