<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 25.06.2017
 * Time: 9:53
 * Модель для таблицы категорий (categories)
 */

/**
 * Дополнение для получения дочерних категорий
 * @param $catId - id родительской категории
 * @return array|bool - массив с дочерними категориями или false
 */
function getChildrenForCat($catId){
    global $mysqli;
    $rs = $mysqli->query("SELECT * FROM categories WHERE parent_id ='{$catId}'");
    return createSmartyRsArray($rs);
}

/**
 * Получение главных и дочерних категорий
 * @return array - массив категорий
 */
function getAllMainCatsWithChildren(){
    global $mysqli;
   $rs = $mysqli->query("SELECT * FROM categories WHERE parent_id=0");
   $smartyRs = array();
   while($row = $rs->fetch_assoc()){
       $rsChildren = getChildrenForCat($row['id']);

       if($rsChildren){
           $row['children'] = $rsChildren;
       }
       $smartyRs[] =$row;
   }
   return $smartyRs;
}

/**
 * получить данные категории по id
 */
function getCatById($catId){
    $catId = intval($catId);
    global $mysqli;
    $rs = $mysqli->query("SELECT * FROM categories WHERE id ='{$catId}'");
    return createSmartyRsArray($rs);
}
