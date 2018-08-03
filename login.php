<?php
/*
Логин
При отправке формы логин проверяем что оба поля заполнены и правильность введенных данных
Иначе Выдаем ошибку

*/
session_start();
require 'dbconnect.php';
require 'getData.php';
require 'findUser.php';
if(isset($_POST['sub'])) {
	if ($_POST['psw'] != "" && $_POST['uname'] != "") {
		$array = getData($_POST);
		$login = $array['uname'];
		$password = $array['psw'];
		$rez = findUser($login);
		if (mysqli_num_rows($rez) == 1) {
			$data = mysqli_fetch_assoc($rez);
			if($data['Password'] === md5($password)) {
				$_SESSION['login'] = $login;
				header('Location: userList.php');
			}
			else {
				echo 'fail. password incorrect';
			}
		}
		else {
			echo 'fail. login incorrect';

		}

	}
	else{
		echo "Nothing has been entered";
	}
}
