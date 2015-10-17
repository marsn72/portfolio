<?php

require_once __DIR__ . '/vendor/autoload.php';

$templater = Templater::getInstance();

$router = new \Klein\Klein();

$config = include_once 'config/config.php';

$router->respond('GET', '/build/hello-world/?', function () use($templater) {
    return 'Hello World';
});

$router->respond('GET', '/build/portfolio/?', function () use($templater) {
    return $templater->display('main_template');
});

$router->respond('GET', '/build/contacts/?', function () use($templater) {
    return 'Страница контактов';
});

$router->respond('GET', '/build/authorize/?', function () use($templater) {
    return 'Страница авторизации';
});

$router->respond('GET', '/build/?', function () use($templater, $config) {
    $data = [];
    $data['config'] = $config;
    return $templater->display('main_template', $data);
});

$router->dispatch();

/*$page = $_GET['page'];

$data = [];

require_once 'config.php';

switch ($page) {
    case 'index':
        $data['title'] = 'Главная страница';
        require_once 'layout/index.php';
        break;
    case 'myworks':
        $data['title'] = 'Мои работы';
        $dbconnect = connectDB();
        $projects = getProjects($dbconnect, $data_sql['getMyWorks']);
        require_once 'layout/myworks.php';
        break;
    case 'feedback':
        $data['title'] = 'Обратная связь';
        require_once 'layout/feedback.php';
        break;
    case 'login':
        $data['title'] = 'Вход администратора';
        require_once 'layout/login.php';
        break;
    case 'logout':
        unset ($_SESSION['auth']);
        session_destroy();
        header('HTTP/1.1 307 Temporary Redirect');
        header('Location: /');
        exit;
        break;
    default: echo "<h1>Смотри куда прешь!!!</h1>";
        die;
}*/

