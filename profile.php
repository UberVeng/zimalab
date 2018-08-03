<?php
/*
Открытие профиля по нажатию наимя
Перенаправление на index.php если нет сессии
Кнопка назад
*/
require 'head.php';
require 'dbconnect.php';
require 'findUserById.php';
session_start();
if(!empty($_SESSION)){
$id = $_GET['id'];
	$result = findUserById($id);
	while ($row = $result->fetch_assoc()){
	    echo '
	    <p>Id: '. $row['id'] .'</p>
	    <p>First name: '. $row['first_name'] .'</p>
	    <p>Last name: '. $row['last_name'] .'</p>
	    <p>Email: '. $row['email'] .'</p>
	    <p>Company: '. $row['company'] .'</p>
	    <p>Position: '. $row['position'] .'</p>
	    <p>Phone number 1: '. $row['phone_number_1'] .'</p>
	    <p>Phone number 2: '. $row['phone_number_2'] .'</p>
	    <p>Phone number 3: '. $row['phone_number_3'] .'</p>
		<a href="userList.php">Назад</a>';
	}
}
else{
	header('Location: index.php');
}
