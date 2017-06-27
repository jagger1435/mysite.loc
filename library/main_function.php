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
 * @param object $smarty - обьект smarty
 */
function loadPage($smarty, $controllerName, $actionName = 'index'){
    //подключаем контроллер
    include_once PathPrefix . $controllerName . PathPostfix;

    //формируем название функциии
    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 *
 * @param $smarty - объект шаблона
 * @param $templateName - название файла шаблона
 */
function loadTemplate($smarty, $templateName)
{
    $smarty->display($templateName . PostfixTemplate);
}

/**
 * Функция дебага
 *
 * @param null $value - проверяемое значение
 * @param int $die - если 0 продолжить выполнение
 */
function d($value =null, $die = 1)
{
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}

/**
 * Преобразователь данных в массив
 * @param $rs - объект
 * @return array|bool - массив или false
 */
function createSmartyRsArray($rs){
    if(! $rs) return false;
    $smartyRs =array();
    while ($row = $rs->fetch_assoc()){
        $smartyRs[] = $row;
    }
    return $smartyRs;
}