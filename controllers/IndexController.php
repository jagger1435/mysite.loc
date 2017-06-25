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
//подключаем модели
include_once '../models/CategoriesModel.php';
function indexAction($smarty){
    $rsCategories = getAllMainCatsWithChildren();
    $smarty -> assign('pageTitle', 'Главная страница сайта');
    $smarty -> assign('rsCategories', $rsCategories);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}