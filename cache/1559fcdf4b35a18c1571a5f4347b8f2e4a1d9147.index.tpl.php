<?php
/*%%SmartyHeaderCode:23042556acafbae3a49_08967503%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1559fcdf4b35a18c1571a5f4347b8f2e4a1d9147' => 
    array (
      0 => './templates/index.tpl',
      1 => 1433062137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23042556acafbae3a49_08967503',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_556acafbb58fc0_96300847',
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556acafbb58fc0_96300847')) {
function content_556acafbb58fc0_96300847 ($_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Lockscreen</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
    <br /><br /><br /><br />
    <div class="lockscreen-logo">
        <a href="index2.html">Clara | <b>Health Assistant</b></a>
    </div>
    <!-- User name -->
    <div class="lockscreen-name">Alois Alzheimer</div>

    <!-- START LOCK SCREEN ITEM -->
    <div class="lockscreen-item">
        <!-- lockscreen image -->
        <div class="lockscreen-image">
            <img src="dist/img/alois.jpg" alt="user image"/>
        </div>
        <!-- /.lockscreen-image -->

        <!-- lockscreen credentials (contains the form) -->
        <form class="lockscreen-credentials" action="patients.php">
            <div class="input-group">
                <input type="password" class="form-control" placeholder="password" />
                <div class="input-group-btn">
                    <button class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                </div>
            </div>
        </form><!-- /.lockscreen credentials -->

    </div><!-- /.lockscreen-item -->

</div><!-- /.center -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html><?php }
}
?>