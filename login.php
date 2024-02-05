<?php
session_start();

if ($_SESSION['user']) {
    // header('Location: /');
}

?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>            
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

    <!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>

          <a href="/register.php">зарегистрируйтесь</a>

        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>

</body>

</html>