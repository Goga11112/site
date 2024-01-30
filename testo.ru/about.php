<html>
	<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	</head>
	<header>
	<?php if($_COOKIE['user'] == ''):
?>
<div id="regAuth">
	<li class = "dws-lli"><a href="auth1.php">| Авторизация</a> 
		<li class = "dws-lli"><a href="reg.php">| Регистрация</a></div></li>
	<?php else: ?>
	<li class = "dws-lli"><p> Пользователь <?=$_COOKIE['user']?>. Для выхода из профиля нажмите <a href="/exit.php"> сюда</a></p></li>
		<?php endif; ?> 
	<div class="dws-menu">
		<ul class="dws-ul">
			<li class="dws-li"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Главная</a></li>
			<li class="dws-li"><a href="about.php"><i class="fa fa-folder-open" aria-hidden="true"></i>Подробная информация<a></li>
			<div id="regAuth">
				<?php if($_COOKIE['user'] == ''):?>
				<?php else: ?>
			<li class="dws-li"><a href="../../admin.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Панель администратора</a></li>
			<?php endif; ?> 
		</ul>
</header>
</body>
    <h1 align="center">Это был я! Дио, который придумал тему про сухари!</h1>
	<p>Автор дурак, ему стало плохо!</p>
	</body>
	 <img src="../исходники11/img/1234.png" alt=”Котик”>
		
</html>