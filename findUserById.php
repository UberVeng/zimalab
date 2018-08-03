<?php
/*
функция ппоиска пользователя в БД
*/
function findUserById($id)
{
    $conn = dbconnect();
    $query = "SELECT * FROM `auth_data` WHERE id = $id";
    $result = $conn->query($query);
    return $result;
}
