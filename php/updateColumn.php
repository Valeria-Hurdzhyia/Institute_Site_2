<?php

$database = new mysqli('127.0.0.1', 'valeriavh', 'Qwerty-123456', 'valeriavh');
if ($database->connect_error){
	die("Виникла помилка: " .$database->connect_error);
}

$database->set_charset(UTF8);

$sql ="
	UPDATE Students
	SET status = 'відраховано'
	WHERE ID IN (1, 3, 4, 6, 7, 10, 14, 15, 19)
	";
	
if ($database->query($sql)==true){
	echo "Дані змінено";
}

else{
	echo "Виникла помилка: " .$database->error;
}

?>