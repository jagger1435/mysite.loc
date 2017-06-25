<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 25.06.2017
 * Time: 10:04
 * Инициализация подключения к базе данных
 */
$dblocation = "127.0.0.1";
$dbname = "mysite";
$dbuser = "root";
$dbpassword = "";

//сщединяемся с бд
$mysqli = new mysqli($dblocation, $dbuser, $dbpassword);

if(mysqli_connect_errno()){
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %d.<br /> Текст ошибки: %s <br />",
        mysqli_connect_errno(), mysqli_connect_error());
    exit;
}
//кодировка по умолчанию
$mysqli->set_charset('utf-8');

if(!$mysqli->select_db($dbname)){
    printf("Ошибка доступа к базе данных: %s\n", $dbname);
    exit;
}

