<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password."ghjsfddsfsdf2345");

$mysql = new mysqli('localhost','root','','mysitek');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();

// Проверяем, есть ли пользователь
if ($user === null) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['login'], time() + 3600, "/");

$mysql->close();

header('Location: user_page.php');
?>