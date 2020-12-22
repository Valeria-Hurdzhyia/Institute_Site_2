<?php

$database = new mysqli('127.0.0.1', 'valeriavh', 'Qwerty-123456', 'valeriavh');
if ($database->connect_error){
	die("Виникла помилка: " .$database->connect_error);
}

$database->set_charset(UTF8);

$sql = "
	CREATE TABLE Students (
	ID INT auto_increment primary key,
    name TEXT,
    group_name TEXT,
    speciality TEXT,
    DateOfBirth DATE,
    email TEXT
)";

if ($database->query($sql)==true){
	echo "Таблицю створено";
}

else{
	echo "Виникла помилка: " .$database->error;
}


?>