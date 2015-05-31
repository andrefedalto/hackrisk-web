<?php
/**
 * Example Application
 *
 * @package Example-application
 */

require_once('./libs/mysqli/MysqliDb.php');
require_once('./libs/dom/simple_html_dom.php');

//require_once('libs/Slim/Slim.php');
//\Slim\Slim::registerAutoloader();
//$app = new \Slim\Slim();
//$app->response->headers->set('Content-Type', 'application/json');
//$app->response->headers->set('charset', 'utf-8');
//

$db = new Mysqlidb('db.utfapp.com', 'hackrisk', 'fXzx$=S6w.HU', 'hackrisk');
if(!$db) die("Database error");




require './libs/Smarty/Smarty.class.php';


$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 0;




$smarty->display('index.tpl');
