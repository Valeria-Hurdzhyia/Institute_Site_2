<?php

$database = new mysqli('127.0.0.1', 'valeriavh', 'Qwerty-123456', 'valeriavh');
if ($database->connect_error){
    die("Виникла помилка: " .$database->connect_error);
}

$database->set_charset(UTF8);


$sql = "SELECT COUNT(ID) FROM Students";
$res = $database->query($sql);


$count = $res->fetch_row();
echo "Всього студентів: ".$count[0].".";
?>

