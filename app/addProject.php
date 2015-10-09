<?php

$name = $_POST['pro-name'];
$data = [];


if($name === ""){
    $data['text'] = "Вы не заполнили название проекта";
    $data['status']="ERROR";
}else{
    $data['text']="Вы молодец!!! Не забыли заполнить название.";
    $data['status']="SUCCES";
}

header('Content-Type: application/json');
echo json_encode($data);
