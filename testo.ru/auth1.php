<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<link rel="stylesheet" href="css/style1.css" type="text/css">
	<title>Сухарики</title>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Войти в личный кабинет</h1>
      <form  action="auth.php" method="post" > 
        <p><input type="text" name="login" value="" placeholder="Логин или Email"></p>
        <p><input type="password" name="password" value="" placeholder="Пароль"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Запомнить меня
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Войти"></p>
      </form>
    </div>

    <div class="login-help">
      <a href="index.html">Забыли пароль?</a> Восстановите его!
    </div>
  </section>
</body>
</html>
