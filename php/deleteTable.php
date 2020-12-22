<?php

$database = new mysqli('127.0.0.1', 'valeriavh', 'Qwerty-123456', 'valeriavh');
if ($database->connect_error){
    die("Виникла помилка: " .$database->connect_error);
}

$database->set_charset(UTF8);

$sql = 'DELETE FROM Students';
	
if ($database->query($sql)==true){
	echo "Таблиця видалена";
}

else{
	echo "Виникла помилка: " .$database->error;
}

?>