# MySql improved
<?php
    $mysqli = new mysqli("172.21.0.2", "root", "!krems", "datedebate");
	$result = $mysqli->query("SELECT * FROM events");
    // print result
    while ($row = $result->fetch_assoc()) {
        echo $row['id'] . " " . $row['name'] . " " . $row['date'] . " " . $row['era'];
    }
?>