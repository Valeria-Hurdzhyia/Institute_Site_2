<?php

$database = new mysqli('127.0.0.1', 'valeriavh', 'Qwerty-123456', 'valeriavh');
if ($database->connect_error){
	die("Виникла помилка: " .$database->connect_error);
}

$database->set_charset(UTF8);

$sql ='SELECT * FROM Students';
$res=$database->query($sql);
   if($res->num_rows>0){
   	while($row=$res->fetch_assoc()){
   		echo "<br>ID: ".$row['ID']."<br>Name: ".$row['name']."<br> Group: ".$row['group_name']."<br> Speciality: ".$row['speciality']."<br> Date Of Birth: ".$row['DateOfBirth']."<br> Email: ".$row['email']."<br> Status: ".$row['status']."<br>";
   	}
	}

?>