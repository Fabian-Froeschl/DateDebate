<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
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

    $response = array('status' => 'success', 'leftEvent' => $_SESSION['leftEvent'], 'rightEvent' => $_SESSION['rightEvent'], 'redirect' => $_SESSION['redirect']);
    echo json_encode($response);
}