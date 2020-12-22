<?php
	class User 
	{
		protected $name;
		protected $birthday;

		function __construct($name, $birthday)
		{
			$this->name = $name;
			$this->birthday = $birthday;
		}

		function getName()
		{
			echo ("ПIБ: $this->name</br>");
		}

		function getBirthday()
		{
			echo ("Дата народження: $this->birthday</br>");
		}

		
	}

	class Student extends User
	{
		private $group;
		private $speciality;
		private $email;

		function __construct($name, $birthday, $group, $speciality, $email)
		{
			parent::__construct($name, $birthday);
			$this->group = $group;
			$this->speciality = $speciality;
			$this->email = $email;
		}


		function getGroup()
		{
			echo ("Група: $this->group</br>");
		}

		function getSpeciality()
		{
			echo ("Спеціальність: $this->speciality</br>");
		}
		
		function getEmail()
		{
			echo ("Email: $this->email");
		}
	}

	$name = $_POST['name'];
	$birthday = $_POST['birthday'];
	$group = $_POST['group'];
	$speciality = $_POST['speciality'];
	$email = $_POST['email'];

	if($name == '')
	{
		echo 'Ви не ввели ім\'я';
		return;
	}

	if($group == '')
	{
		echo 'Ви не ввели групу';
		return;
	}

	if($speciality == '')
	{
		echo 'Ви не ввели назву спеціальності';
		return;
	}

	if($email == '')
	{
		echo 'Ви не ввели email';
		return;
	}

	if($birthday == '')
	{
		echo 'Ви не ввели дату народження';
		return;
	}

	if($birthday < 1985 || $birthday > 2004)
	{
		echo 'Введіть Ваш справжній рік народження</br>(Він має бути від 1985 до 2004)';
		return;
	}
	
	else {

		echo 'Дані збережено: </br>';
	    $obj = new Student($name, $birthday, $group, $speciality, $email);
		
	}
?>

<?php
$database = new mysqli('127.0.0.1', 'valeriavh', 'Qwerty-123456', 'valeriavh');
if ($database->connect_error){
	die("Connection is failed: " .$database->connect_error);
}
$database->set_charset(utf8);
	

		$obj->getName();
		$obj->getBirthday();
		$obj->getGroup();
		$obj->getSpeciality();
		$obj->getEmail();



$sql = "INSERT INTO Students (name, group_name, speciality, DateOfBirth, email)
VALUES ('$name','$group','$speciality', '$birthday', '$email');";
/* $sql = "UPDATE Students
SET age = YEAR(current_date()) - YEAR(DateOfBirth);";*/

if ($database->query($sql)==TRUE){
	echo "<br>Ваші дані успішно занесено до бази <br>";
}
else {
	echo "</br>Помилка: ".$database->error;
}
?>