<?php

$eventIds = [14, 21, 587, 82];

include 'src/Reservator.php';
include 'src/ReservatorApiPartner.php';

foreach ($eventIds as $eventId) {
    /** @var  Reservator| ReservatorApiPartner $o */
    $o = ($eventId % 2 == 0) ? new Reservator($eventId) : new ReservatorApiPartner($eventId);
        $o->reserveRandomTicket();
    echo "<h5>--------------------------------------------------</h5>".PHP_EOL;
}