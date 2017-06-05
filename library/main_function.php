<?php
/**
 * Created by PhpStorm.
 * User: jagger
 * Date: 05.06.2017
 * Time: 12:02
 * 
 *  * Основные функции
 */

/**
 * @param $controllerName -  название контроллера
 * @param string $actionName - название функции обработки страницы
 */
function loadPage($controllerName, $actionName = 'index'){
    //подключаем контроллер
    include_once PathPrefix . $controllerName . PathPostfix;

    //формируем название функциии
    $function = $actionName . 'Action';
    $function();
}