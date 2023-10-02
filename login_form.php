<!DOCTYPE html>
<html>
<head>
    <title>Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<?php
if ($_COOKIE['user'] == ''):
?>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>
</div>
<div class="container mt-1 mx-auto">
<h1>Авторизация</h1>
<form method="POST" action="login.php">
    <div class="mb-3">
    <label for="login">Логин:</label>
    <input type="text" name="login" id="login"><br>
    </div>
    <div class="mb-3">
    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password"><br>
    </div>
    <div class="mb-3">
    <input type="submit" value="Войти">
    </div>
    <?php else: ?>
        <p>Привет <?= $_COOKIE['user'] ?>. Чтобы выйти нажмите <a href="/registration_form.php">здесь</a>.</p>
    <?php endif; ?>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
