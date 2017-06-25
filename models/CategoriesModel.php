<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 25.06.2017
 * Time: 9:53
 * Модель для таблицы категорий (categories)
 */
function getAllMainCatsWithChildren(){
    global $mysqli;
   $rs = $mysqli->query("SELECT * FROM categories WHERE parent_id=0");
   $smartyRs = array();
   while($row = $rs->fetch_assoc()){
       $smartyRs[] =$row;
   }
   return $smartyRs;
}