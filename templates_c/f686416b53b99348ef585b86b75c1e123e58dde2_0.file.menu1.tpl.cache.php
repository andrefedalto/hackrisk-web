<?php /* Smarty version 3.1.24, created on 2015-05-30 22:57:08
         compiled from "./templates/menu1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:24810556a24242f37a6_25930719%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f686416b53b99348ef585b86b75c1e123e58dde2' => 
    array (
      0 => './templates/menu1.tpl',
      1 => 1433012147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24810556a24242f37a6_25930719',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_556a24243333c2_46160076',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556a24243333c2_46160076')) {
function content_556a24243333c2_46160076 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24810556a24242f37a6_25930719';
?>
<!-- Sidebar user panel (optional) -->
<div class="user-panel">
    <div class="pull-left image">
        <img src="dist/img/alois.jpg" class="img-circle" alt="User Image" />
    </div>
    <div class="pull-left info">
        <p>Alois Alzheimer</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>



<!-- search form (Optional) -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search patient..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
    </div>
</form>
<!-- /.search form -->


<!-- Sidebar Menu -->
<ul class="sidebar-menu">
    <li class="header">MENU</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href="#"><i class='fa fa-link'></i> <span>Dashboard</span></a></li>
    <li class="active"><a href="#"><i class='fa fa-link'></i> <span>Patients</span></a></li>
</ul><!-- /.sidebar-menu --><?php }
}
?>