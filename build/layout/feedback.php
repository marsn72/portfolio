<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Портфолио</title>
    <!--SEO-->
    <meta name="description" content="site portfolio">
    <meta name="keywords" content="site portfolio">
    <meta name="author" content="Maraev Sergey">
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!--vendor CSS-->
    <link rel="stylesheet" href="bower/normalize-css/normalize.css">
    <link rel="stylesheet" href="bower/qtip2/jquery.qtip.css">
    <!--fonts CSS-->
    <link rel="stylesheet" href="fonts/opensans/stylesheet.css">
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/works.css">
    <link rel="stylesheet" href="css/feedback.css">
    <!--header JS-->
    <script src="bower/modernizr/modernizr.js"></script>
</head>
<body>
<!--[if lte IE 7]>
<p class="browsehappy">Вы используете<strong>устаревший</strong>браузер.Пожалуйста<a href="http://browsehappy.com">обновите</a>его
</p>
<![endif]-->
<div class="wrapper clearfix">

    <header class="page-header">
        <div class="container-big clearfix">
            <a href="index.html" class="header-logo-link">
                <img src="images/logo.png" alt="logo">
                <span class="header-logo-text">Сайт портфолио</span>
            </a>

            <div class="social-wrap">
                <ul class="social">
                    <li class="social-item sprite sprite-fb"><a href="http://facebook.com/" target="_blank"
                                                                class="social-link fb">http://facebook.com</a>
                    </li>
                    <li class="social-item sprite sprite-vk"><a href="http://vk.com/maraev_s" target="_blank"
                                                                class="social-link vk">http://vk.com/maraev_s</a>
                    </li>
                    <li class="social-item sprite sprite-tw"><a href="http://twitter.com/" target="_blank"
                                                                class="social-link tw">http://twitter.com</a>
                    </li>

                    <li class="social-item sprite sprite-gt"><a href="http://github.com/marsn72" target="_blank"
                                                                class="social-link gt">http://github.com/marsn72</a>
                    </li>
                </ul>
            </div>

        </div>
    </header>

    <div class="container">
        <!--Левая колонка-->
        <aside class="sidebar">
            <nav class="navigation">
                <ul class="navigation-list">
                    <li class="navigation-item "><a href="index.html" class="navigation-link">Обо мне</a></li>
                    <li class="navigation-item "><a href="myworks.html" class="navigation-link">Мои
                        работы</a></li>
                    <li class="navigation-item current"><a href="#" class="navigation-link">Обратная связь</a>
                    </li>
                </ul>
            </nav>
            <div class="contacts">
                <div class="contacts-header">
                    <span class="header-inner-text">Контакты</span>
                </div>
                <ul class="contacts-list">
                    <li class="contacts-item contacts-item-mail"><a href="mailto:my_new_pochta@bk.ru"
                                                                    class="contacts-link"><span
                            class="contacts-text">my_new_pochta@bk.ru</span></a></li>
                    <li class="contacts-item contacts-item-phone"><a href="tel:+79991232323"
                                                                     class="contacts-link"><span
                            class="contacts-text">+79063647727</span></a></li>
                    <li class="contacts-item contacts-item-skype"><a href="skype:marsn_72"
                                                                     class="contacts-link"><span
                            class="contacts-text">marsn_72</span></a></li>
                </ul>
            </div>
        </aside>
        <!--Правая колонка-->
        <div class="gallery-wrap variable-content">
            <div class="gallery-head">
                <h2 class="gallery-head-text form-head-text">У вас интересный проект? Напишите мне</h2>
            </div>

            <div class="form-wrap">
                <form action="#" class="form-main clearfix">
                    <label class="form-text">Имя
                        <input type="text" placeholder="Как к Вам обращаться" qtip-position="left" qtip-content="Обязательное поле">
                    </label>

                    <label class="form-text">Email
                        <input type="text" placeholder="Куда мне писать" qtip-position="right" qtip-content="Заполните поле">
                    </label>

                    <label class="form-area">Сообщение
                        <textarea class="form-area-text" placeholder="Кратко в чем суть" qtip-position="left" qtip-content="Заполните поле"></textarea>
                    </label>

                    <div class="form-kapcha">
                        <p class="form-text">Введите код, указанный на картинке</p>
                        <img src="images/kapcha.png" alt="kapcha" class="form-kapcha-image">

                        <p class="form-kapcha-text">
                            <input type="text" placeholder="Введите код" qtip-position="right" qtip-content="Заполните поле">
                    </div>
                    <div class="btn-submit">
                        <input type="submit" class="form-btn-submit active" value="Отправить">
                        <input type="reset" class="form-btn-submit reset" value="Очистить">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<footer class="page-footer">
    <div class="container">
        <div class="lock">
            <a href="login.html" class="lock-inner">Войти</a>
        </div>
        <div class="copyright">
            © 2015  Это сайт Мараева Сергея, пожалуйста не копируйте и не воруйте его.
        </div>
    </div>
</footer>
<!--vendor JS-->
<script src="bower/jquery/jquery.js"></script>
<script src="bower/qtip2/jquery.qtip.js"></script>
<script src="bower/jquery-placeholder/jquery.placeholder.js"></script>
<!--JS-->
<script src="js/script.js"></script>
<script src="js/validation.js"></script>
<script src="js/feedback.js"></script>
</body>
</html>