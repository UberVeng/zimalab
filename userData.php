<?php
/*
На эту страницу ссылается register.php или userList.php
Страница для заполнения формы с дополнительной информацией
Если логин в адресной строке совпадает с логином в сессии, то отрисовываем форму, иначе ошибка
При отправке формы добавляется дополнительная информация о пользователе в таблицу (regCompleted)
*/
require 'register.php';
?>
<html>
<?php
require 'head.php';
$login = $_GET['user'];
?>
<body>

	<?php
	session_start();
	if($_SESSION['login'] == $_GET['user']){
		echo '
		<form method="post" action="regCompleted.php?user=';
		echo "$login";
		echo '">';
		echo '
		<table>
			<thead>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
				<th>Company</th>
				<th>position</th>
				<th>phone_number_1</th>
				<th>phone_number_2</th>
				<th>phone_number_3</th>
			</thead>
			<tbody>
				<td><input name="firstName" type="text" required/></td>
				<td><input name="lastName"type="text" required/></td>
				<td><input name="email"type="text" required/></td>
				<td><input name="company"type="text" /></td>
				<td><input name="position"type="text" /></td>
				<td><input name="phoneNumber1"type="text" /></td>
				<td><input name="phoneNumber2"type="text" /></td>
				<td><input name="phoneNumber3"type="text" /></td>
			</tbody>
		</table>
		<input class="submit" type="submit" value="Сохранить" />
		</form>';
	}
	else{
		echo "Access denied";
	}
	?>


</body>
</html>
