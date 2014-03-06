            <? include_once($_SERVER['DOCUMENT_ROOT'] . "/wp-content/scripts/nightout.php"); ?>
            <?php $this_event = getThisEvent($event_slug); ?>

            <?php
            if($this_event) { ?>

            <div id="eventTitle"><?= $this_event -> title ?></div>
            <div id="eventStart"><?= $this_event -> start_time ?></div>
            <div id="eventEnd"><?= $this_event -> end_time ?></div>
            <div id="eventDescription"><?= $this_event -> description ?></div>
            <div id="eventPoster"><img src="<?= $this_event -> poster_url -> large ?>" /></div>
            <iframe id="ticketingEmbed" src="https://embed.nightout.com/events/<?= $this_event -> subdomain ?>" height="600px" width="400px"></iframe>

            <?php } else { ?>
                We couldn't find this event. Please try again.
            <?php } ?>
