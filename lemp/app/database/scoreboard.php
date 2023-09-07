<?php

global $scoreboard;
global $connection;
global $points;
include 'database.php';
include 'databaseProvider.php';

function getPlayerByRank($rank){
    global $scoreboard;
    return $scoreboard[$rank];
}

$username = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['usr'];

    #########SQL shit
    $statement = "insert into players(player, score) VALUES ('".$username."', $points)";
    # So sama am Föhla draufkemma (Copyright Macho)
    #echo json_encode($statement);
    #die();
    $result = mysqli_query($connection, $statement);
    #########

    $response = array('status' => 'success', 'message' => $username);
    echo json_encode($response);
}