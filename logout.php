<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login_form.php");
    exit;
}

session_unset();

session_destroy();

header("Location: login_form.php");
exit;
?>
