<?php
/**
 * Created by PhpStorm.
 * User: jagger
 * Date: 29.06.2017
 * Time: 20:01
 *
 * Контроллер страницы категории (/category/1)
 */
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование страницы категорий
 * @param $smarty
 */
function indexAction($smarty){
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if($catId == null) exit;
    $rsProducts = null;
    $rsChildCats = null;
    $rsCategory = getCatById($catId);


    // если главная категория, то показываем дочерние, если нет, то паказываем товары

    if($rsCategory['parent_id'] == 0){
        $rsChildCats = getChildrenForCat($catId);

    } else {
        $rsProducts = getProductsByCat($catId);
        
    }

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Товары категории ' .$rsCategory['name']);

    $smarty->assign('rsChildCats', $rsChildCats);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsCategory', $rsCategory);

    $smarty->assign('rsCategories', $rsCategories);


    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');
}