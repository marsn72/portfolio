<?php
//header('Content-Type: application/json');
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}
echo "Вы обновили эту страницу " . ++$_SESSION['counter'] . " раз";
echo "<hr><br> <a href='" . $_SERVER['PHP_SELF'] . "'>Обновить</a><br>";

$name = 'Мараев Сергей';
$age = '43';
$work = 'web-developer';

$_SESSION['user'] = [
    'name' => $name,
    'age' => $age,
    'work' => $work
];
$dsn = 'mysql:host=localhost;dbname=test';
$dbh = new PDO($dsn, 'root');

foreach($dbh->query('SELECT * from __users') as $row){
    print_r($row);
}

