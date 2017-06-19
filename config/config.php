<?php
/**
 * Created by PhpStorm.
 * User: jagger
 * Date: 05.06.2017
 * Time: 12:01
 *
 * Файл настроек
 */

//>константы для обращения к контроллерам
define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');
//<

//>используемый шаблон
$template = 'default';

//пути к файлам шаблонов (*.tpl)
define('PrefixTemplate', "../views/{$template}/");
define('PostfixTemplate', '.tpl');

//пути к файлам шаблонов в веб-пространстве
define('TemplateWebPath', "/templates/{$template}/");
//<

//>Инициализация шаблонизатора Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty -> setTemplateDir(PrefixTemplate);
$smarty -> setCompileDir('../tmp/smarty/templates_c');
$smarty -> setCacheDir('../tmp/smarty/cache');
$smarty -> setConfigDir('../library/Smarty/configs');

$smarty -> assign('TemplateWebPath', TemplateWebPath);

//<