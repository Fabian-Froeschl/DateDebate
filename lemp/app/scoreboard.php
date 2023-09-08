<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<!doctype html>
<html lang="de">
<head>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Scoreboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    
    <h3 class="text-center">Scoreboard</h3>
    <div class="text-center">
        <input id="userInputName" type="text">
        <button id="userInputSubmit">Submit!</button>
    </div>
    <table id="scoreboardTable" class="table table-striped table-responsive table-bordered" style="width: 70%; margin:auto; margin-top: 2%;">
        <?php

        global $scoreboard;
        include 'database/scoreboard.php';
        for ($i = 0; $i < getRankCount(); $i++) {
            $currentUser = getPlayerByRank($i);
            echo "<tr><td>{$currentUser['player']}</td><td>{$currentUser['score']}</td></tr>";
        }

        ?>
    </table>
    <button id="retry">Retry</button>
    
    <script src="js/scoreboard.js"></script>
</body>
</html>