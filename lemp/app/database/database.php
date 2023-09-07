<?php

global $connection;
include 'databaseProvider.php';

$events = array();
$scoreboard = array();

if ($connection) {
    ##Events##
    $statement = "select * from events";
    $result = mysqli_query($connection, $statement);
    if ($result) {
        header("Content-Type: JSON");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $events[$i]['id'] = $row['id'];
            $events[$i]['name'] = $row['name'];
            $events[$i]['date'] = $row['date'];
            $events[$i]['era'] = $row['era'];
            $i++;
        }
    }

    ##Scoreboard##
    $statement = "select * from scoreboard";
    $result = mysqli_query($connection, $statement);
    if ($result){
        header("Content-Type: JSON");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)){
            $scoreboard[$i]['id'] = $row['id'];
            $scoreboard[$i]['player'] = $row['player'];
            $scoreboard[$i]['score'] = $row['score'];
            $i++;
        }
    }
    echo json_encode($events);
} else
    echo "Database connection failed";