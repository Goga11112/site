<?php
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);
	
	$password = md5($password."dghgfhfghf2345");

	$mysql = new mysqli('127.0.0.1:3306','root','root','test');

	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
	$user = $result->fetch_assoc();
	if(count($user)	== 0) {
	echo "Такой пользователь не найден";
	exit();
}
	setcookie('user', $user['name'], time() + 3600, "/");
	
	$date=date("Y-m-d h:m:s");

	$result1 = $mysql->query("update `users` set `enterdate`='$date' where `login` = '$login'  ");

	$mysql->close();

	header('Location: /about.php');
?>
	