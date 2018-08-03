<?php
/*
Берем все переданные переменные из формы userData и присваиваем в соответствующие переменные
Имя пользователя берем из адресноый строки
Вызов функции additionalData со всеми данными о пользователе
Перенаправление на userList.php
*/
require 'register.php';
require 'additionalData.php';
	$login = $_GET['user'];
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$position = $_POST['position'];
	$phoneNumber1 = $_POST['phoneNumber1'];
	$phoneNumber2 = $_POST['phoneNumber2'];
	$phoneNumber3 = $_POST['phoneNumber3'];
	$newDataUser = additionalData($firstName, $lastName, $email, $company, $position, $phoneNumber1, $phoneNumber2, $phoneNumber3, $login);
	header('Location: userList.php')
?>
