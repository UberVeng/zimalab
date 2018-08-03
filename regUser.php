<?php
/*
Функция добавления пользователя в таблицу
*/
function regUser($login, $password)
{
	$conn = dbconnect();
	$query = "INSERT INTO `auth_data` (`id`, `Username`, `Password`, `first_name`, `last_name`, `email`, `company`, `position`, `phone_number_1`, `phone_number_2`, `phone_number_3`) VALUES (NULL,'$login', '$password', '', '', '', '', '', '', '', '')";
	$result = $conn->query($query);
	return $result;
}
