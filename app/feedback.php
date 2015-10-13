<?php
session_start();

var_dump($_SESSION);

echo $_SESSION['user']['name'];

echo "<br> Имя - ". $_SESSION['user']['name'];
echo "<br> Возраст - ". $_SESSION['user']['age'];
echo "<br> Призвание - ". $_SESSION['user']['work'];
