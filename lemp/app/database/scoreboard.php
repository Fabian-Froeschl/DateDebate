<?php

global $scoreboard;
include 'database.php';

function getPlayerByRank($rank){
    global $scoreboard;
    return $scoreboard[$rank];
}

