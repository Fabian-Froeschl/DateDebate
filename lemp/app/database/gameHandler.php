<?php

global $points;
global $events;
include 'database.php';

#$points = 0;

if($leftEvent == null){
    $leftEvent = $events[generateNumber()];
}
if($rightEvent == null){
    $rightEvent = $events[generateNumber()];
}
if($leftEvent == $rightEvent){
    $rightEvent = $events[generateNumber()];
}

$megaData = [
    $leftEvent,
    $rightEvent
];

# Transmit Backend data to local javascript
echo json_encode($megaData);

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

