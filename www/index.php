<?php
/**
 * Created by PhpStorm.
 * User: jagger
 * Date: 05.06.2017
 * Time: 9:08
 */

include_once '../config/config.php';// Инициализация настроек
include_once '../library/main_function.php';// Основные функции

//опредляем с каким контроллером будем работать
 $controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

 //определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($controllerName, $actionName);