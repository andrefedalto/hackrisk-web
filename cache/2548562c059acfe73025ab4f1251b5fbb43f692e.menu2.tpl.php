<?php
/*%%SmartyHeaderCode:18235556a539adb74b7_76258282%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2548562c059acfe73025ab4f1251b5fbb43f692e' => 
    array (
      0 => './templates/menu2.tpl',
      1 => 1433031557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18235556a539adb74b7_76258282',
  'tpl_function' => 
  array (
  ),
  'version' => '3.1.24',
  'unifunc' => 'content_556ac0982680d0_89541239',
  'has_nocache_code' => false,
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556ac0982680d0_89541239')) {
function content_556ac0982680d0_89541239 ($_smarty_tpl) {
?>
<!-- Sidebar user panel (optional) -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="dist/img/alois.jpg" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
        <p> Alois Alzheimer</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>


<!-- Sidebar Menu -->
<ul class="sidebar-menu">
    <li class="header"><b>JOHN DORIAN</b></li>
    <!-- Optionally, you can add icons to the links -->
    <li ><a href="dashboard.php"><i class='fa fa-newspaper-o'></i> <span>Dashboard</span></a></li>
    <li class="active"><a href="timeline.php"><i class='fa fa-clock-o'></i> <span>Timeline</span></a></li>
    <li ><a href="prescription.php"><i class='fa fa-pencil'></i> <span>Prescriptions</span></a></li>
    <li ><a href="exam.php"><i class='fa fa-heartbeat'></i> <span>Exams</span></a></li>
</ul><!-- /.sidebar-menu -->


<?php }
}
?>