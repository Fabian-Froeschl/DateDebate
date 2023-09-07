<?php

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

    $response = array('status' => 'success', 'message' => "Data received!");
    echo json_encode($response);
}