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
include_once '../models/ProductsModel.php';

function indexAction($smarty){
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);
    $smarty -> assign('pageTitle', 'Главная страница сайта');
    $smarty -> assign('rsCategories', $rsCategories);
    $smarty -> assign('rsProducts', $rsProducts);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}