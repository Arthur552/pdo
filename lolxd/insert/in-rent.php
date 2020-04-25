<?php


require_once '../connection.php';


$var_id = $_GET["var_id"];
$date_start = $_GET["date_start"];
$time_start = $_GET["time_start"];
$date_end = $_GET["date_end"];
$time_end = $_GET["time_end"];
$var_cost = $_GET["var_cost"];

if (!empty($var_id) && !empty($date_start) && !empty($time_start) && !empty($date_end) && !empty($time_end) && !empty($var_cost)){

    $sql = "INSERT INTO rent(FID_Car, Date_start, Time_start, Date_end, Time_end, Cost) VALUES(:var_id,:date_start,:time_start,:date_end,:time_end,:var_cost)";
    $params = [':var_id' =>$var_id, ':date_start' =>$date_start, ':time_start' =>$time_start, ':date_end' =>$date_end, ':time_end' =>$time_end, ':var_cost' =>$var_cost];

    $stmt = $dbh->prepare($sql);
    $stmt->execute($params);

    echo 'Hello';
}else{
    echo 'Ну все , *****ц проге!';
}