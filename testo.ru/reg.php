<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="css/style1.css" type="text/css">
</head>

<body>
  <section class="container">
    <div class="login">
	      <h1> Форма регистрации </h1>
	  <form action= "check.php" method="post">
      <form method="post" action="index.php">
	  <p><input type="text" class= "form-control" name="name"id="name" placeholder="Введите Ваше имя"></p>
        <p><input type="text" name="login" value="" placeholder="Логин или Email"></p>
        <p><input type="password" name="password" value="" placeholder="Пароль"></p>
        <p class="submit"><input type="submit" name="commit" value="Зарегестрироваться"></p>
      </form>
    </div>
  </section>
</body>
</html>
