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


require_once('./classes/DataManager.php');

require './libs/Smarty/Smarty.class.php';


$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 0;



if (isset($_POST['submit']))
{
    $_drug = new DataManager('Drug');
    $_drug->setField('drugName', $_POST['drug']);
    $_drug->save();


    $posology = explode(" ",  $_POST['dose']);
    $_prescription = new DataManager('Prescription');
    $_prescription->setField('idDoctor', 1);
    $_prescription->setField('idPatient', 1);
    $_prescription->setField('idDrug', $_drug->getField('idDrug'));
    $_prescription->setField('date', date("Y-m-d H:i:s"));
    $_prescription->setField('dose',  $posology[0]);
    $_prescription->setField('doseUnit', $posology[1]);
    $_prescription->setField('days', $_POST['duration']);
    $_prescription->setField('frequency', $_POST['frequency']);
    $_prescription->setField('reason', $_POST['reason']);
    $_prescription->save();


}

$db->join("drug d", "d.idDrug = p.idDrug", "LEFT");
$db->orderBy("p.idPrescription","Desc");
$_prescriptions = $db->get ("prescription p", null, "p.*, d.*");
$i = 0;

$prescriptions = array();
foreach ($_prescriptions as $_prescription)
{
    $prescription = array();
    $prescription['drugName'] = $_prescription['drugName'];
    $prescription['posology'] = $_prescription['dose']." ".$_prescription['doseUnit'].", ".$_prescription['frequency']." times a day";
    $prescription['since'] = date('d M Y', strtotime($_prescription['date']));
    $days = floor((strtotime($_prescription['date']) + $_prescription['days']*24*60*60 - time())/(24*60*60));
    if ($days > 0)
        $prescription['expires'] = $days . " day" . (($days > 1) ? "s" : "");
    else
        $prescription['expires'] = "expired";

    if ($days < 4)
        $prescription['label'] = "danger";
    else if ($days < 7)
        $prescription['label'] = "warning";
    else
        $prescription['label'] = "success";


    array_push($prescriptions, $prescription);
    $i++;

    if($i > 3)
        break;
}
$smarty->assign('prescriptions', $prescriptions);



$exams = $db->get('exam');
$_exams = array();
foreach ($exams as $exam)
{
    $exam['date'] = date("M d", strtotime($exam['date']));
    array_push($_exams, $exam);

}
$smarty->assign('exams', $_exams);

$feels = $db->get('feel');
$_feels = array();

foreach ($feels as $feel)
{
    $feel['date'] = date("M d (H:i)", strtotime($feel['date']));
    array_push($_feels, $feel);

}
$smarty->assign('feels', $_feels);



$smarty->assign("MENU", "menu2");
$smarty->assign("PAGE", "dashboard");
$smarty->display('dashboard.tpl');
