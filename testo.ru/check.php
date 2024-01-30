<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);
	
	if(mb_strlen($login) < 5 || mb_strlen($login) > 90)  {
		echo "Недопустима длина логина";
		exit();
	}
		if(mb_strlen($name) < 2 || mb_strlen($login) > 50)  {
		echo "Недопустима длина имени";
		exit();
	}
		if(mb_strlen($password) < 2 || mb_strlen($login) > 9)  {
		echo "Недопустима длина (";
		exit();
	}
		
		
	$password = md5($password."dghgfhfghf2345");
	$mysql = new mysqli('127.0.0.1:3306','root','root','test');
	$mysql->query("INSERT INTO `users` (`login`, `password`, `name`)
	VALUES('$login', '$password', '$name')");
	$mysql->close();

	header('Location: /');
?>