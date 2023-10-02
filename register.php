<?php
$login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);

if(mb_strlen($login) < 5 || mb_strlen($login)>90) {
    echo "Недопустимая длина логина";
    exit();
}
else if (mb_strlen($password) < 6 || mb_strlen($password)>20) {
    echo "Недопустимая длина пароля (от 6 до 20 символов)";
    exit();

}
$password = md5($password."ghjsfddsfsdf2345");
$mysql = new mysqli('localhost','root','','mysitek');
$mysql->query("INSERT INTO `users` (`login`, `password`)
VALUES('$login','$password')");

$mysql->close();

header('Location: user_page.php');

?>