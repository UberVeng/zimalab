<?php
/*
Функция удаления пробелов и преобразования символов в полях логина и пароля
*/
function getData($array)
{
	$array['uname'] = htmlspecialchars(trim($array['uname']));
	$array['psw'] = htmlspecialchars(trim($array['psw']));
	return $array;
}
