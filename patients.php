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




$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));
$smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
$smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"),
                               array("I", "J", "K", "L"), array("M", "N", "O", "P")));

$smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
                                  array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

$smarty->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
$smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
$smarty->assign("option_selected", "NE");

$patients = array(
    array(
        'firstName' => "Louis",
        'lastName'  => "Webster"
    ),
    array(
        'firstName' => "Georgina",
        'lastName'  => "Austin"
    ),
    array(
        'firstName' => "Benjamin",
        'lastName'  => "Young"
    ),
    array(
        'firstName' => "Aimee",
        'lastName'  => "Cunningham"
    ),
    array(
        'firstName' => "Bailey",
        'lastName'  => "Wells"
    ),
    array(
        'firstName' => "Charlotte",
        'lastName'  => "Dickinson"
    ),
    array(
        'firstName' => "Sophie",
        'lastName'  => "Davis"
    ),
    array(
        'firstName' => "Logan",
        'lastName'  => "Williamson"
    ),
    array(
        'firstName' => "Mollie",
        'lastName'  => "Perkins"
    ),
    array(
        'firstName' => "Lewis",
        'lastName'  => "Gibbs"
    )
);
$smarty->assign('patients', $patients);

$smarty->assign("MENU", "menu1");
$smarty->assign("PAGE", "patients");
$smarty->display('patients.tpl');
