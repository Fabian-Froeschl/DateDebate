<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/styleIndex.css">
</head>
<body>
    <div class="column" style="justify-content: center;">
        <img src="files/Logo_final.jpg" width="300px" height="300px" class="animated" id="help" >
        <img src="files/date-debate-title.gif" width="400px" height="100px">
        <a type="button" href="./game.php" class="btn btn-light pushableBtn">START</a>
    </div>
</body>
</html>