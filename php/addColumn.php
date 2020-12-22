<?php

$database = new mysqli('127.0.0.1', 'valeriavh', 'Qwerty-123456', 'valeriavh');
if ($database->connect_error){
	die("Виникла помилка: " .$database->connect_error);
}

$database->set_charset(UTF8);

$sql = "
	ALTER TABLE Students
	ADD status TEXT DEFAULT 'навчається';
	";
	
if ($database->query($sql)==true){
	echo "Дані занесені до бази даних";
}

else{
	echo "Виникла помилка: " .$database->error;
}

?>