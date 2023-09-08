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
    <title>Document</title>
    <link rel="stylesheet" href="css/styleIndex.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<div id="container">
    <div id="foreground">
        <div class="column" style="justify-content: center;">
            <img src="files/Logo_final.jpg" width="300px" height="300px" class="animated" id="help" >
            <img src="files/date-debate-title.gif" width="400px" height="100px">
            <button class="pushableBtn"><a href="./game.php" style="text-decoration: none;"><span class="frontBtn">START</span></a></button>
        </div>
    </div>
</div>
</body>
</html>