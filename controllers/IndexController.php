<?php
/**
 * Created by PhpStorm.
 * User: jagger
 * Date: 05.06.2017
 * Time: 10:22
 */
/**
 * Формирование главной страницы сайта
 * 
 * @param $smarty
 */
function indexAction($smarty){
    $smarty -> assign('pageTitle', 'Главная страница сайта');

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}