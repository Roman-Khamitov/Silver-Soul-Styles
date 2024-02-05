<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Silver Soul Styles</title>
    <link rel="shortcut icon" href="src/favicon.png" type="image/png">
</head>
<header>
    <ul class="contact-menu">
        <li class="contact-item">
            <a class="contact-link" href="#">О компании</a>
        </li>
        <li class="contact-item">
            <a class="contact-link" href="https://qiwi.com">Оплата</a>
        </li> 
        <li class="contact-item">
            <a class="contact-link" ><?= $_SESSION['user']['email']?></a>
        </li>
        <li class="contact-item">
            <a class="contact-link"><?= $_SESSION['user']['full_name']?></a>
        </li>
    </ul>
    <ul class="link-menu">
        <li class="link-item">
            <a class="link-contact" href="#">Магазины</a>
        </li>
        <li class="link-item">
            <a class="link-contact" href="vendor/logout.php">Выход</a>
        </li>
    </ul>
    <div class="header-main">
<img class="logo" width="210" src="src/logo.png">
    </div>
    <div class="search">
        <input class="search-menu" placeholder="Поиск одежды" autocomplete="off">
        <button class="search-button">
            <img src="src/button.svg" width="20" height="20">
        </button>
    </div>
</header>
<body>
    <button id="myBtn">Зарегистрироваться</button>


<div id="myModal" class="modal">

 
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Шапка модального окна</h2>
    </div>
    <div class="modal-body">
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input required type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес своей почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
           <a href="/index.php">Вернуться на сайт</a>
        </p>

        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>

    </form>
    </div>
    <div class="modal-footer">
      <h3>Футер модального окна</h3>
    </div>
  </div>

</div>
    <div class="slider">
        <marquee behavior="alternate" direction="right" scrollamount="5">
            <img class="t-shirt" height="150" width="150" src="src/t-shirt-1.png" alt="футболка 1">
            <img class="t-shirt" height="150" width="150" src="src/t-shirt-2.png" alt="футболка 2">
            <img class="t-shirt" height="150" width="150" src="src/t-shirt-3.png" alt="футболка 3">
            <img class="t-shirt" height="150" width="150" src="src/t-shirt-4.png" alt="футболка 4">
            <img class="t-shirt" height="175" width="175" src="src/t-shirt-5.png" alt="футболка 5">
            <img class="t-shirt" height="200" width="200" src="src/t-shirt-6.png" alt="футболка 6">
        </marquee>
    </div>
<h1 class="title">Топ категорий</h1>
 <div class="goods">
        <ul class="goods-categorys">
            <li class="goods-item">
                <a class="goods-link" href="#">Детям</a>
                <ul class="goods-subcategorys">
                    <li class="goods-subitem">
                        <a class="goods-sublink">Кроссовки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink" href="#">Толстовки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink">Футболки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink" href="#">Штаны</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink">Головные уборы</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="goods-categorys">
            <li class="goods-item">
                <a class="goods-link" href="#">Женщинам</a>
                <ul class="goods-subcategorys">
                    <li class="goods-subitem">
                        <a class="goods-sublink">Кроссовки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink" href="#">Толстовки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink">Футболки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink" href="#">Штаны</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink">Головные уборы</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="goods-categorys">
            <li class="goods-item">
                <a class="goods-link" href="#">Мужчинам</a>
                <ul class="goods-subcategorys">
                    <li class="goods-subitem">
                        <a class="goods-sublink">Кроссовки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink" href="#">Толстовки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink">Футболки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink" href="#">Штаны</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink">Головные уборы</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="goods-categorys">
            <li class="goods-item">
                <a class="goods-link" href="#">Разное</a>
                <ul class="goods-subcategorys">
                    <li class="goods-subitem">
                        <a class="goods-sublink">Кроссовки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink" href="#">Толстовки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink">Футболки</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink" href="#">Штаны</a>
                    </li>
                    <li class="goods-subitem">
                        <a class="goods-sublink">Головные уборы</a>
                    </li>
                </ul>
            </li>
        </ul>
 </div>
 <div class="footer">
    <ul class="advantages">
        <li class="advantages-item">
            <img class="advantages-icon" width="100" height="100" src="src/доставка.png">
            <h3 class="advantages-title">Доставка</h3>
            <p class="advantages-text">По всей территории Казахстана</p>
        </li>
        <li class="advantages-item">
            <img class="advantages-icon box" width="100" height="100" src="src/коробка.png">
            <h3 class="advantages-title">Большой ассортимент</h3>
            <p class="advantages-text">Широкий ассортимент товаров по доступным ценам</p>
        </li>
        <li class="advantages-item">
            <img class="advantages-icon" width="100" height="100" src="src/обмен.png">
            <h3 class="advantages-title">Возможен возврат товара</h3>
            <p class="advantages-text">Вернем товар в течении 14 дней</p>
        </li>
        <li class="advantages-item">
            <img class="advantages-icon" width="100" height="100" src="src/документ.png">
            <h3 class="advantages-title">Гарантия</h3>
            <p class="advantages-text">Наши товары всегда хорошего качества</p>
        </li>
    </ul>
 </div>
 <!-- Триггер/Открыть модальный -->
<button id="modalBtn">войти</button>

<!-- Модальный -->
<div id="loginModal" class="modal-login">

  <!-- Модальное содержание -->
  <div class="login-content">
    <span class="close">&times;</span>
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
  </div>
</div>
 <script src="/main.js"></script>
</body>
</html>