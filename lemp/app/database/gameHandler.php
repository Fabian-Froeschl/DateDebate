<?php

global $response;
include 'database.php';

$points = 0;

$leftEvent = $response[generate()];
$rightEvent = $response[generate()];

#DEBUG
#echo "left: {$leftEvent['date']}";
#echo "<br>";
#echo "right: {$rightEvent['date']}";
function guessFuture() {
    global $leftEvent;
    global $rightEvent;
    global $response;
    global $points;

    if (isFuture($leftEvent, $rightEvent)) {
        $points++;
        $leftEvent = $rightEvent;//serialize()
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

function isFuture($event1, $event2) {
    return strtotime($event1['date']) < strtotime($event2['date']);
}

function generate() {
    global $response;
    return rand(0, (count($response) - 1));
}