<?php
    session_start();
    ini_set('session.gc.maxlifetime', 3600);
    $connection = new PDO('mysql:host=localhost; dbname=academy; charset=utf8', 'root', '' );
    $admin = $connection->query("SELECT * FROM `admin`");

    if ($_POST['login'] && $_POST['password']) {
        $userName = $_POST['login'];
        $userPassword = $_POST['password'];
        $connection->query("INSERT INTO `admin` (`login`, `password`) VALUES ('$userName', '$userPassword')");
        if ($connection == true) {
            session_destroy();
            header("Location: login.php");
        }
    }

    if ($_POST['aut']) {
        header("Location: login.php");
    }



?>

<style>
    body {
        margin: 200px 300px;
        background-color: chartreuse;
    }
    input, p {
        font-size: 30px;
        margin: 10px;
    }
</style>

<form method="POST">
    <p>Регистрация на сайте</p>
    <input type="text" name="login" required placeholder="Введите логин" > <br>
    <input type="password" name="password" required placeholder="Введите пароль"> <br>
    <input type="submit">
</form>

<form method="POST" style=" font-size: 40px; margin-top: 50px;">
    <input type="submit" style="font-size: 30px;" name="aut" value="Перейти на странницу авторизации" >
</form>
