<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);
	
	if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
	echo "Недопустимая длина логина";
	exit();
}
	if(mb_strlen($name) < 2 || mb_strlen($name) > 50) {
	echo "Недопустимая длина имени";
	exit();
}
	if(mb_strlen($password) < 5 || mb_strlen($password) > 15) {
	echo "Недопустимая длина пароля";
	exit();
}
	$password = md5($password."dghgfhfghf2345");
	$mysql = new mysqli('127.0.0.1:3306','root','root','register bd');
	$mysql->query("INSERT INTO `users` (`login`, `password`, `name`)
	VALUES('$login', '$password', '$name')");
	$mysql->close();

	header('Location: /');


?>