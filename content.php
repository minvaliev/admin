<?php
session_start();

if (!$_SESSION['login'] || !$_SESSION['password']) {
    header("Location: login.php");
    die();
}

if ($_POST['unlogin']) {
    session_destroy();
    header("Location: login.php");
}
?>

<body style="font-size: 40px; background-color: <?php echo $_SESSION['color']?>;">
<p>Сайт только для авторизированных пользователей!</p>
<?php echo "Привет, " . $_SESSION['login'] . "<br>" ?>
<img src="priroda.jpg" alt="Picture" width="700" style="display: block">

<form method="POST" style="margin: 40px; font-size: 40px;">
    <input type="submit" style="font-size: 30px;" name="unlogin" value="На странницу авторизации" >
</form>
</body>