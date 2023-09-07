<?php

global $scoreboard;
include 'database.php';

function getPlayerByRank($rank){
    global $scoreboard;
    $key_values = array_column($scoreboard, 'score');
    array_multisort($key_values, SORT_DESC, $scoreboard);
    return $scoreboard[$rank];
}

#$result = getPlayerByRank(0);

#echo "{$result['name']}------{$result['score']}";
echo $scoreboard[0]['name'];