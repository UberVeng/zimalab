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
		<div id="nav">
		<input id="loginBtn"  type="button" onclick="logClick()" value="Вход" /><br />
		<a id="regLink" href="index.php?mode=register">Регистрация</a>
		</div>
		<div id="loginBox">
			<div id="formType"><?php if ($mode == "login"){echo "Вход";}else{echo "Регистрация";}?></div>
			 <form id="loginForm" name="loginForm" method="post" action="<?php echo $action; ?>">
				 <input id="inp" type="login" placeholder="Логин" name="uname"><br />
				 <input id="inp" type="password" placeholder="Пароль" name="psw">
				 <input class="submit" id="sub" type="submit" value="<?php if ($mode == "login"){echo "Войти";}else{echo "Зарегистрироваться";}?>" name="sub" />
			 </form>
	 		<div id="error"></div>
		</div>
	</div>
</body>
</html>
