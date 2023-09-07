<?php

global $events;
include 'database.php';

$points = 0;

$leftEvent = $events[generateNumber()];
$rightEvent = $events[generateNumber()];

#DEBUG
echo "left: {$leftEvent['date']}";
echo "<br>";
echo "right: {$rightEvent['date']}";
function guessFuture() {
    global $leftEvent;
    global $rightEvent;
    global $events;
    global $points;

    if (isFuture($leftEvent, $rightEvent)) {
        $points++;
        $leftEvent = $rightEvent;//serialize()
        $rightEvent = $events[generateNumber()];
    } else {
        $rightEvent = $events[generateNumber()];
        //next try
    }
}

function guessPast() {
    global $leftEvent;
    global $rightEvent;
    global $events;
    global $points;

    if (!isFuture($leftEvent, $rightEvent)) {
        $points++;
        $leftEvent = $rightEvent;
        $rightEvent = $events[generateNumber()];
    } else {
        $rightEvent = $events[generateNumber()];
        //next try
    }
}

function isFuture($event1, $event2) {
    return strtotime($event1['date']) < strtotime($event2['date']);
}

function generateNumber() {
    global $events;
    return rand(0, (count($events) - 1));
}