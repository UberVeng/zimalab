<?php
/*
Проверки сессии
Если существует, то перенаправляем на userList.php
Иначе меняем mode
*/
if(isset($_SESSION['login'])){
	$login = $_SESSION['login'];
}
else{
	$login = '';
}

if($login){
	header('Location: userList.php');
}
else{
	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
	}
	else{
		$mode = 'login';
	}
}
