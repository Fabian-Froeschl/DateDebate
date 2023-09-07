<?php

global $scoreboard;
include 'database.php';

function getPlayerByRank($rank){
    global $scoreboard;
    return $scoreboard[$rank];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['usr'];

    $response = array('status' => 'success', 'message' => $username);
    echo json_encode($response);
}
