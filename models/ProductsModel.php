<?php
/**
 * Created by PhpStorm.
 * User: jagger
 * Date: 29.06.2017
 * Time: 16:59
 *
 * Модель для таблицы продукты
 */

/**
 *
 * Получаем последние добавленные товары
 * @param null $limit - лимит товаров
 * @return array|bool - массив товаров
 */
function getLastProducts($limit = null){
    global $mysqli;
     $sql = "SELECT * FROM products ORDER BY id DESC";

    if($limit) {
        $sql .= " LIMIT {$limit}";
    }
    $rs = $mysqli->query($sql);
    return createSmartyRsArray($rs);
}

/**
 * Получить продукты для категории $itemID
 *
 */
function getProductsByCat($itemId){
    global $mysqli;
    $itemId = intval($itemId);
    $rs = $mysqli->query("SELECT * FROM products WHERE category_id = '{$itemId}'");
    return createSmartyRsArray($rs);
}