<?php
session_start();
?>
<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $data['title']; ?></title>
    <!--SEO-->
    <meta name="description" content="site portfolio">
    <meta name="keywords" content="site portfolio">
    <meta name="author" content="Maraev Sergey">
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="./favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
    <!--vendor CSS-->
    <link rel="stylesheet" href="./bower/normalize-css/normalize.css">
    <!--fonts CSS-->
    <link rel="stylesheet" href="./fonts/opensans/stylesheet.css">
    <!--CSS-->
    <link rel="stylesheet" href="./css/style.css">
    <!--header JS-->
    <script src="./bower/modernizr/modernizr.js"></script>
</head>
<body>
<!--[if lte IE 7]>
<p class="browsehappy">Вы используете<strong>устаревший</strong>браузер.Пожалуйста<a href="http://browsehappy.com">обновите</a>его
</p>
<![endif]-->
<div class="wrapper">

    <header class="page-header">
        <div class="container-big clearfix">
            <a href="#" class="header-logo-link">
                <img src="./images/logo.png" alt="logo">
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

    <div class="container clearfix">
        <!--Левая колонка-->
        <aside class="sidebar">
            <nav class="navigation">
                <ul class="navigation-list">
                    <li class="navigation-item current"><a href="#" class="navigation-link">Обо мне</a></li>
                    <li class="navigation-item"><a href="myworks.html" class="navigation-link">Мои работы</a></li>
                    <li class="navigation-item"><a href="feedback.html" class="navigation-link">Обратная связь</a></li>
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
        <div class="variable-content">
            <section class="aboutbox clearfix">
                <h2 class="aboutbox-header">Основная информация</h2>

                <div class="aboutbox-body clearfix">
                    <div class="image-wrap">
                        <div class="avatar-box"><img src="images/photo.jpg" alt="Мараев Сергей" class="avatar">
                        </div>
                    </div>
                    <div class="worksheet-list">
                        <p class="worksheet-what">Меня зовут: <span class="worksheet-info">Мараев Сергей</span></p>

                        <p class="worksheet-what">Мой возраст: <span class="worksheet-info">43 года</span></p>

                        <p class="worksheet-what">Мой город: <span class="worksheet-info">Нижний Новгород, Россия</span>
                        </p>

                        <p class="worksheet-what">Моя специализация: <span class="worksheet-info">WEB разработчик</span>
                        </p>

                        <div class="worksheet-item clearfix">
                            <p class="worksheet-what left">Ключевые навыки:</p>

                            <div class="worksheet-info skills">
                                <ul class="skills-list">
                                    <li class="skills-item"><i class="skil-sprite sprite-html"></i></li>
                                    <li class="skills-item"><i class="skil-sprite sprite-css"></i></li>
                                    <li class="skills-item"><i class="skil-sprite sprite-javascript"></i></li>
                                    <li class="skills-item"><i class="skil-sprite sprite-git"></i></li>
                                    <li class="skills-item"><i class="skil-sprite sprite-gulp"></i></li>
                                    <li class="skills-item"><i class="skil-sprite sprite-php"></i></li>
                                    <li class="skills-item"><i class="skil-sprite sprite-angular"></i></li>
                                    <li class="skills-item"><i class="skil-sprite sprite-xml"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="education">
                <h2 class="aboutbox-header">Опыт работы</h2>

                <div class="education-body">
                    <ul class="aboutbox-list">
                        <li class="aboutbox-item icon-work">
                            <div class="where">ТПО "ДМС" - начальник отдела внедрения ИС</div>
                            <div class="period">Август 2002 - Октябрь 2009</div>
                        </li>
                        <li class="aboutbox-item icon-work">
                            <div class="where">ОАО "Вымпелком" - Монтажник линий связи</div>
                            <div class="period">Октябрь 2009 - Июнь 2015</div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="education">
                <h2 class="aboutbox-header">Образование</h2>

                <div class="education-body">
                    <ul class="aboutbox-list">
                        <li class="aboutbox-item icon-school">
                            <div class="where">Полное среднее. Общеобразовательная школа № 42</div>
                            <div class="period">Сентябрь 1979 - Май 1989</div>
                        </li>
                        <li class="aboutbox-item icon-college">
                            <div class="where">Высшее. Нижегородский филиал Гуманитарного института</div>
                            <div class="period">Август 2010 - Июнь 2015</div>
                        </li>
                        <li class="aboutbox-item icon-course">
                            <div class="where">Курсы Loftschool.ru</div>
                            <div class="period"> Сентябрь 2015 - по настоящее время</div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>

<footer class="page-footer">
    <div class="container">
        <div class="lock">
            <a href="login.html" class="lock-inner">Вход</a>
        </div>
        <div class="copyright">
            © 2015  Это сайт Мараева Сергея, пожалуйста не копируйте и не воруйте его.
        </div>
    </div>
</footer>
<!--vendor JS-->
<script src="bower/jquery/jquery.js"></script>
<!--JS-->
<script src="js/script.js"></script>
</body>
</html>

