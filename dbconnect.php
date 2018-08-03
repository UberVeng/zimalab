<?php
/*
Соединение с БД
*/
function dbconnect()
{
    $conn = new mysqli('localhost', 'root', '', 'newdb');
    return $conn;
}
