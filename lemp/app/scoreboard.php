<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Scoreboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <h1>Scoreboard</h1>
    <input id="userInputName" type="text">
    <button id="userInputSubmit">Submit!</button>


    <table id="scoreboardTable">
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