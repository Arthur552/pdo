<?php

$dsn = "mysql:host=localhost; dbname=iteh2lb1var7";
$user = 'root';
$pass = '';
try {
    $dbh = new PDO($dsn,$user,$pass);
    $raceName = "SELECT Name FROM cars";
    $outputRace[] = array();
    unset($outputRace[0]);

    foreach ($dbh->query($raceName) as $row) {
        $outputRace[] .= $row['Name'];
    }
} catch (PDOException $e) {
    echo "Ошибка";
}