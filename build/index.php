<?php

require_once __DIR__ . '/vendor/autoload.php';

$templater = Templater::getInstance();

$router = new \Klein\Klein();

$config = include_once 'config/config.php';

$router->respond('GET', '/build/portfolio/?', function () use ($templater, $config) {
    $data = [];
    $data['config'] = $config;
    $data['title'] = 'Страница моих работ';
    $data['current'] = 'portfolio';

    ORM::configure(array(
        'connection_string' => 'mysql:host='. $config['database']['localhost'] .';dbname='.$config['database']['dbname'],
        'username' => $config['database']['user'],
        'password' => $config['database']['password']
    ));

    $works = ORM::for_table('portfolio')->find_many();
    $data['works'] = $works;

    return $templater->display('pages/portfolio', $data);
});

$router->respond('GET', '/build/contacts/?', function () use ($templater, $config) {
    $data = [];
    $data['config'] = $config;
    $data['title'] = 'Страница контактов';
    $data['current'] = 'contacts';
    return $templater->display('pages/contacts', $data);
});

$router->respond('GET', '/build/auth/?', function () use ($templater, $config) {
    $data = [];
    $data['config'] = $config;
    $data['logged'] = true;
    $data['title'] = 'Страница авторизации';
    $data['current'] = 'auth';
    return $templater->display('pages/auth', $data);
});

$router->respond('GET', '/build/?', function () use ($templater, $config) {
    $data = [];
    $data['config'] = $config;
    $data['title'] = 'Главная страница';
    $data['current'] = 'index';
    return $templater->display('pages/index', $data);
});

$router->dispatch();


