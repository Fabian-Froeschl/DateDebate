<?php

global $points;
global $events;
include 'database.php';

#$points = 0;

$leftEvent = $events[generateNumber()];
$rightEvent = $events[generateNumber()];

$megaData = [
    $leftEvent,
    $rightEvent
];

# Transmit Backend data to local javascript
#echo json_encode($megaData);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = array('status' => 'success', 'message' => $megaData);
    echo json_encode($response);
}

function guessFuture() {
    global $leftEvent;
    global $rightEvent;
    global $events;
    global $points;

    if (isFuture($leftEvent, $rightEvent)) {
        $points++;
        $leftEvent = $rightEvent;//serialize()
        $rightEvent = $events[generateNumber()];
        //UPDATE IMAGE
    } else {
        $rightEvent = $events[generateNumber()];
        gameEnd();
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
        //UPDATE IMAGE

    } else {
        $rightEvent = $events[generateNumber()];
        gameEnd();
    }
}

function gameEnd(){
    header("Location: scoreboard.php");
    exit();
}

function isFuture($event1, $event2) {
    return strtotime($event1['date']) < strtotime($event2['date']);
}

function generateNumber() {
    global $events;
    return rand(0, (count($events) - 1));
}

