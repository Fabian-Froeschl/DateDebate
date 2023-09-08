<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
global $events;
include 'database.php';
$_SESSION['events'] = $events;

#$points = 0;



$megaData = array($_SESSION['leftEvent'], $_SESSION['rightEvent']);

# Transmit Backend data to local javascript
#echo json_encode($megaData);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    
    // $response = array('status' => 'success', 'message' => $megaData);
    // echo json_encode($response);
    //$_SESSION['leftEvent'] = $leftEvent;
    //$_SESSION['rightEvent'] = $rightEvent;

}

function guessFuture() {
    if (isFuture($_SESSION['leftEvent'], $_SESSION['rightEvent'])) {
        $_SESSION['points'] = $_SESSION['points'] + 1;
        $_SESSION['leftEvent'] = $_SESSION['rightEvent'];//serialize()
        $_SESSION['rightEvent'] = $_SESSION['events'][generateNumber()];
        //UPDATE IMAGE
    } else {
        //$rightEvent = $events[generateNumber()];
        gameEnd();
    }
}

function guessPast() {
    if (!isFuture($_SESSION['leftEvent'], $_SESSION['rightEvent'])) {
        $_SESSION['points'] = $_SESSION['points'] + 1;
        $_SESSION['leftEvent'] = $_SESSION['rightEvent'];
        $_SESSION['rightEvent'] = $_SESSION['events'][generateNumber()];
        //UPDATE IMAGE

    } else {
        //$rightEvent = $events[generateNumber()];
        gameEnd();
    }
}

function gameEnd(){
    //echo "gameEnd";
    //header("Location: scoreboard.php");
    //exit();
    $_SESSION['redirect'] = true;
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
    return rand(0, (count($_SESSION['events']) - 1));
}

