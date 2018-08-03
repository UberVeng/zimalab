<?php
/*
Функция смены режима логи на рагистрацию и наоборот
*/
function getMode($mode = 'login')
{
	switch(htmlspecialchars(trim($mode))){
		case 'login':
			$action = 'login.php';
			break;
		case 'register':
			$action = 'register.php';
			break;
		default:
			$action = 'login.php';
			break;
	}
	return $action;
}
