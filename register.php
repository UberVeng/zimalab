<?php
/*
Функция регистрации
Преобразовывает строку (getData)
Ищет введенный логи в таблице SQL(findUser)
Если нет совпадений, то
Добавляет логин и пароль в таблицу(regUser) и перенаправляет на список пользователей (userData)
Вывод ошибки если логин уже занят
*/
require 'getData.php';
require 'findUser.php';
require 'dbconnect.php';
require 'regUser.php';
if(isset($_POST['sub'])) {
	if ($_POST['psw'] != "" && $_POST['uname'] != "") {
		$array = getData($_POST);
		$login = $array['uname'];
		$password = md5($_POST['psw']);
		$rez = findUser($login);
		if (mysqli_num_rows($rez) != 1) {
			session_start();
			$newUser = regUser($login, $password);
			$_SESSION['login'] = $login;
			header('Location: userData.php?user='.$login);
		}
		else{
			echo "Username already taken(((";
		}
	}
}
