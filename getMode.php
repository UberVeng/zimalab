<?php
/*
Функция смены режима логи на рагистрацию и наоборот
*/
function getMode($mode)
{
	switch(htmlspecialchars(trim($mode))){
		case 'login':
			$action = 'login.php';
			break;
		case 'register':
			$action = 'register.php';
			break;
		default:
			$action = 'index.php';
			break;
	}
	return $action;
}
