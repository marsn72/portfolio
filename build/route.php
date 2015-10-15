<?php

session_start();

$page = $_GET['page'];

$data = [];

/*
 * Here must will config
 */

switch ($page) {
    case 'index':
        $data['title'] = 'Главная страница';
        require_once 'layout/index.php';
        break;
    case 'myworks':
        $data['title'] = 'Обратная связь';
        require_once 'layout/myworks.php';
        break;
    case 'feedback':
        $data['title'] = 'Обратная связь';
        require_once 'layout/feedback.php';
        break;
    case 'login':
        $data['title'] = 'Обратная связь';
        require_once 'layout/login.php';
        break;
}

