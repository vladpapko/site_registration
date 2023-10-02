<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login_form.php");
    exit;
}

$login = $_SESSION["login"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Личный кабинет</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container mt-1 mx-auto">
    <div class="mb-3">
<h1>Личный кабинет</h1>
<p>Добро пожаловать, <?php echo htmlspecialchars($login); ?>!</p>
<a href="logout.php">Выйти</a>
    </div>
</body>
</html>
