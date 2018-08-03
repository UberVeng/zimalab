<?php
/*
Страница отображающая логин авторизированного пользователя и таблицу с дополнительной информацией о всех пользователях
Если пользователь не авторизирован, то перенаправление на index.php
При нажатии на "logout" удаляется сессия и перенаправляет на index.php
При нажатии на пользователя ссылка на profile.php с передачей id в переменной id
При нажатии на "+" перенаправление на userData.php с передачей Username в переменной user
При нажатии на "x" перенаправление на userData.php с передачей Username в переменной user
*/
require 'dbconnect.php';
require 'findUser.php';
session_start();


if(!empty($_SESSION['login'])){						//
    $userObj = findUser($_SESSION['login']);
    $user = mysqli_fetch_assoc($userObj);
    if($_SESSION['login'] == $user['Username']){
        echo 'Вы вошли как ' . $user['Username'];
    }
}
else{
	header('Location: index.php');
}
function findAll()
{
    $conn = dbconnect();
    $query = "SELECT * FROM `auth_data` ";
    $result = $conn->query($query);
    return $result;
}
?>
<html>
<?php
require 'head.php';
?>
<body><a href="logout.php">logout</a>
    <table>
        <thead>
            <th>Id</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Position</th>
            <th>Phone number 1</th>
            <th>Phone number 2</th>
            <th>Phone number 3</th>
            <th>Edit User</th>
            <th>Delete User</th>
        </thead>
        <tbody>
            <pre>
            <?php
            $result = findAll();
            while ($row = $result->fetch_assoc()){
                echo '
                <tr>
                    <td>'. $row['id'] .'</td>
                    <td><a href="profile.php?id='. $row['id'] .'">'. $row['first_name'] .'</a></td>
                    <td>'. $row['last_name'] .'</td>
                    <td>'. $row['email'] .'</td>
                    <td>'. $row['company'] .'</td>
                    <td>'. $row['position'] .'</td>
                    <td>'. $row['phone_number_1'] .'</td>
                    <td>'. $row['phone_number_2'] .'</td>
                    <td>'. $row['phone_number_3'] .'</td>';
                    if($row['id'] == $user['id']){
                        echo '
					<td style="background-color: transparent;"><a href="userData.php?user='. $row['Username'] .'">+</a></td>
					<td style="background-color: transparent;"><a href="delete.php?id='. $row['id'] .'">x</a></td>';
                    }
					else{
						echo '
						<td></td>
						<td></td>';
					}
                    echo'
                </tr>';
            }
            ?>
            </pre>
        </tbody>
    </table>
</body>
</html>
