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



if(@$_GET['action'] == 'getDrugs'){

    @$db->where("drugName LIKE '%".$_GET['value']."%'");
    $var = $db->get('drug',5);
    $output = array();
    foreach($var as $key=>$nome){
        $output[$key] = $nome["drugName"];
    }
    echo json_encode($output);

}

