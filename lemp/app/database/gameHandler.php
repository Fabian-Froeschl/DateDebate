<?php
session_start();

$points = $_SESSION['points'];
global $events;
$leftEvent = $_SESSION['leftEvent'];
$rightEvent = $_SESSION['rightEvent'];
include 'database.php';

#$points = 0;



$megaData = array($leftEvent, $rightEvent);

# Transmit Backend data to local javascript
#echo json_encode($megaData);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    // $response = array('status' => 'success', 'message' => $megaData);
    // echo json_encode($response);
    //$_SESSION['leftEvent'] = $leftEvent;
    //$_SESSION['rightEvent'] = $rightEvent;

}

function guessFuture() {
    global $leftEvent;
    global $rightEvent;
    global $events;
    global $points;

    if (isFuture($leftEvent, $rightEvent)) {
        $points++;
        $_SESSION['leftEvent'] = $_SESSION['rightEvent'];//serialize()
        $_SESSION['rightEvent'] = $events[generateNumber()];
        //UPDATE IMAGE
    } else {
        //$rightEvent = $events[generateNumber()];
        gameEnd();
    }
}

function guessPast() {
    global $leftEvent;
    global $rightEvent;
    global $events;
    global $points;

    if (!isFuture($leftEvent, $rightEvent)) {
        $_SESSION['points'] = $_SESSION['points'] + 1;
        $_SESSION['leftEvent'] = $_SESSION['rightEvent'];
        $_SESSION['rightEvent'] = $events[generateNumber()];
        //UPDATE IMAGE

    } else {
        //$rightEvent = $events[generateNumber()];
        gameEnd();
    }
}

function gameEnd(){
    header("Location: scoreboard.php");
    exit();
}

function isFuture($event1, $event2) {
    if($event1['era'] == "BC" && $event2['era'] == "AD"){
        return false;
    }
    if($event1['era'] == "AD" && $event2['era'] == "BC"){
        return true;
    }
    if($event1['era'] == "BC" && $event2['era'] == "BC"){
        return strtotime($event1['date']) > strtotime($event2['date']);
    }
    return strtotime($event1['date']) < strtotime($event2['date']);
}

function generateNumber() {
    global $events;
    return rand(0, (count($events) - 1));
}

