<?php

global $response;
include 'database.php';

$points = 0;

$leftEvent = $response[generate()];
$rightEvent = $response[generate()];

echo "TEST: {$leftEvent['name']}";
function guessFuture() {
    global $leftEvent;
    global $rightEvent;
    global $response;
    global $points;

    if (isFuture($leftEvent, $rightEvent)) {
        $points++;
        $leftEvent = $rightEvent;
        $rightEvent = $response[generate()];
    } else {
        $rightEvent = $response[generate()];
        //next try
    }
}

function guessPast() {
    global $leftEvent;
    global $rightEvent;
    global $response;
    global $points;

    if (!isFuture($leftEvent, $rightEvent)) {
        $points++;
        $leftEvent = $rightEvent;
        $rightEvent = $response[generate()];
    } else {
        $rightEvent = $response[generate()];
        //next try
    }
}

#echo "Future: " + isFuture($leftEvent, $rightEvent);

function isFuture($event1, $event2) {
    #does not work
    $format = "Y/m/d";
    $date1 = date_format($event1['date'], $format);
    $date2 = date_format($event2['date'], $format);
    return $date1 > $date2;
}

function generate() {
    global $response;
    return rand(0, (count($response) - 1));
}