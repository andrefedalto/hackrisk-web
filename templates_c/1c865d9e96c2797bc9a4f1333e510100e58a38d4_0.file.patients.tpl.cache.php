<?php /* Smarty version 3.1.24, created on 2015-05-30 20:08:28
         compiled from "./templates/patients.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20715569fc9c64e365_28161759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c865d9e96c2797bc9a4f1333e510100e58a38d4' => 
    array (
      0 => './templates/patients.tpl',
      1 => 1433009279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20715569fc9c64e365_28161759',
  'variables' => 
  array (
    'patients' => 0,
    'patient' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5569fc9c67c1e0_67832217',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5569fc9c67c1e0_67832217')) {
function content_5569fc9c67c1e0_67832217 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20715569fc9c64e365_28161759';
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Patients
                <small>select one for detailed information</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">




            <div class="row">
                <?php
$_from = $_smarty_tpl->tpl_vars['patients']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['patient'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['patient']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->_loop = true;
$foreach_patient_Sav = $_smarty_tpl->tpl_vars['patient'];
?>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-gray">
                        <div class="inner">
                            <h3><?php echo $_smarty_tpl->tpl_vars['patient']->value['firstName'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['patient']->value['lastName'];?>
</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="patient.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div><!-- ./col -->
                <?php
$_smarty_tpl->tpl_vars['patient'] = $foreach_patient_Sav;
}
?>
            </div><!-- /.row -->


        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php }
}
?>