	<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<title>Сухарики</title>
</head>
<body>
<header>
<?php if($_COOKIE['user'] == ''):
?>
<div id="regAuth">
	<li class = "dws-lli"><a href="auth1.php">| Авторизация</a> 
		<li class = "dws-lli"><a href="reg.php">| Регистрация</a></div></li>
	<?php else: ?>
	<li class = "dws-lli"><p> Пользователь <?=$_COOKIE['user']?>. Для выхода из профиля нажмите <a href="/exit.php"> сюда</a></p></li>
		<?php endif; ?> 
		</div>
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
		
	</div>
	
	</header>
</body>
		<h1 align="center">Сухарики</h1>
		<p align="left" id = "f" class="d">История возникновения сухарей. Сухари - это вторично запеченный хлеб, «высушенный с целью либо хранения, либо дальнейшего кулинарного применения в различных блюдах», - такое определение изделию дает Вильям Похлебкин (1923-2000), российский историк и писатель.</p>
		<p class = "d">Виды сухариков:</p>
		<ol class="dws-l1">
			<li class="dws-lli"><a href="https://koolinar-ru.turbopages.org/koolinar.ru/s/recipe/view/144784">Сладкие сдобные сухари</a></li>
							
			<li class = "dws-lli"><a href="https://kopchen-ru.turbopages.org/kopchen.ru/s/alco/suhariki-v-duhovke-iz-belogo-cernogo-hleba-kak-sdelat-doma.html">Простые хлебные сухарики</a></li>
				
					
			<li class = "dws-lli"><a href="https://1000.menu/cooking/36827-kirieshki-v-domashnix-usloviyax">Сухарики ржаные</a></li>
					
							

			
		
</html>