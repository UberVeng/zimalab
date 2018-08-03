<html>
<?php
/*
Нажатие на <input> с id="loginBtn" направляет нас на "/index.php?mode=login".
Нажатие на <a> с id="regLink" направляет нас на "/index.php?mode=register".
Отправка формы перенаправляет нас либо на login.php, либо на register.php,
в зависимости от значения mode.
*/
require "head.php"; //Вызов тега <head>
?>
<body>
	<div id="allContent">
		<?php
		if ($action == 'register.php' || $action == 'login.php'){
			echo '
			<div id="loginBox">
				<div id="formType"><?php if ($mode == "login"){echo "Вход";}else{echo "Регистрация";}?></div>
				 <form id="loginForm" name="loginForm" method="post" action=';
				 echo $action;
				 echo '>
					 <input id="inp" type="login" placeholder="Логин" name="uname" autofocus><br />
					 <input id="inp" type="password" placeholder="Пароль" name="psw">
					 <input class="submit" id="sub" type="submit" value=';
					 if ($mode == "login"){echo "Войти";}else{echo "Зарегистрироваться";}
					 echo ' name="sub" />
				 </form>
				 <a id="back" href="index.php">Назад</a>
		 		<div id="error"></div>
			</div>';
		}
		else{
			echo '
			<input id="loginBtn"  type="button" onclick="logClick()" value="Вход" /><br />
			<a id="regLink" href="index.php?mode=register">Регистрация</a>
			';
		}
		?>
	</div>
</body>
</html>
