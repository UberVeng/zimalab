<?php
/*
Функция добавления переменных в таблицу
Берется id переданного пользователя ($login) и
этот id используется для нахождения нужного пользователя в таблице
*/
function additionalData($firstName, $lastName, $email, $company, $position, $phoneNumber1, $phoneNumber2, $phoneNumber3, $login)
{
	$conn = dbconnect();
	$query = "SELECT id FROM `auth_data` WHERE Username='$login'";

	$result = $conn->query($query);
	$result = $result->fetch_assoc();
	$result = $result['id'];
	$query = "UPDATE `auth_data` SET `first_name` = '$firstName', `last_name` = '$lastName', `email` = '$email', `company` = '$company', `position` = '$position', `phone_number_1` = '$phoneNumber1', `phone_number_2` = '$phoneNumber2', `phone_number_3` = '$phoneNumber3' WHERE `auth_data`.`id` = $result";
	$result = $conn->query($query);
	return $result;
}
