<?php
global $connection;
include 'databaseProvider.php';
$table = "events";

$response = array();
if ($connection){
    $statement = "select * from $table";
    $result = mysqli_query($connection, $statement);
    if($result){
        header("Content-Type: JSON");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['date'] = $row['date'];
            $i++;
        }
        //echo json_encode($response, JSON_PRETTY_PRINT);
    }
}else
    echo "Database connection failed";

$random = rand(0, (count($response)-1));

$id = $response[$random]['id'];
$name = $response[$random]['name'];
$date = $response[$random]['date'];

echo "Id: $id <br>";
echo "Name: $name <br>";
echo "Date: $date";