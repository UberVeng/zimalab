<?php
/*
Удаление пользователя
Записываем в переменную "id" id авторизированного пользователя
Записываем в переменную "user" id авторизированного пользователя (findUserById)
Записываем в переменную "login" имя пользователя, соответствующее имени пользователя в таблице
Проверяем что есть сессия и что она соответствует имени пользователя, которого собираемся удалить
Удалаление
Перенаправление на logout.php
Если пользователь
*/

session_start();
require 'dbconnect.php';
require 'findUserById.php';
function deleteUserById($id){
    $conn = dbconnect();
    $queryAuth = "DELETE FROM `auth_data` WHERE `auth_data`.`id` = $id";
    $conn->query($queryAuth);
}
$id = $_GET['id'];
$user = findUserById($id);
$row = $user->fetch_assoc();
$login = $row['Username'];
if(isset($_SESSION['login'])){
    if($login == $_SESSION['login']){
        deleteUserById($id);
    }
}
header('Location: logout.php');
?>
