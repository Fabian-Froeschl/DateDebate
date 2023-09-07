<?php
session_start();
global $scoreboard;
global $connection;
include 'database.php';
//include 'databaseProvider.php';

function getPlayerByRank($rank){
    global $scoreboard;
    return $scoreboard[$rank];
}

function getRankCount(){
    global $scoreboard;
    return count($scoreboard);
}

$username = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['usr'];
    //var_dump($username);
    //die();
    #########SQL shit
    $usrPoints = $_SESSION['points'];
    $statement = "insert into players(player, score) VALUES ('".$username."', $usrPoints)";

    # So sama am Föhla draufkemma (Copyright Macho)
    #echo json_encode($statement);
    #die();
    $result = mysqli_query($connection, $statement);
    #########

    session_destroy();

    $response = array('status' => 'success', 'message' => "Data received!");
    echo json_encode($response);
}