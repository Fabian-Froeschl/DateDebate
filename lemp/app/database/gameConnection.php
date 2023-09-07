<?php
global $leftEvent;
global $rightEvent;
include 'gameHandler.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['btnType'];

    #var_dump(json_encode($type));
    #die();

    switch ($type){
        case "before":
            guessPast();
            break;
        case "later":
            guessFuture();
            break;
    }

    $response = array('status' => 'success', 'leftEvent' => $leftEvent, 'rightEvent' => $rightEvent);
    echo json_encode($response);
}