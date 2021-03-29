<?php

require './MySqlDB.php';

parse_str(file_get_contents('php://input'), $adatok);
print_r($adatok);

$mySql = new MySqlDB();
$id = $adatok["id"];
$todo = $adatok["todo"];
$datum = $adatok["datum"];
$allapot = $adatok["allapot"];

$updateString = "id='".$id."',todo='".$todo."',datum='".$datum."',allapot='".$allapot. "'";
$mySql->frissit("dolgozat", $updateString, "id=".$id);