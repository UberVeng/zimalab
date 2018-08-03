<?php
/*
Функция поиска пользователя
*/
function findUser($login)
{
	$conn = dbconnect();
	$rez = mysqli_query($conn, "SELECT * FROM `auth_data` WHERE username='$login'");
	return $rez;
}
