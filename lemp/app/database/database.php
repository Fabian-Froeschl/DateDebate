<?php

global $connection;
include 'databaseProvider.php';
$table = "events";

$response = array();
if ($connection) {
    $statement = "select * from $table";
    $result = mysqli_query($connection, $statement);
    if ($result) {
        header("Content-Type: JSON");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['date'] = $row['date'];
            $i++;
        }
    }
    echo json_encode($response);
} else
    echo "Database connection failed";