<?php /* Smarty version 3.1.24, created on 2015-05-31 10:03:28
         compiled from "./templates/prescription.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14104556ac0503edee0_82510158%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81eba83550dc6e755c8fc3f693cd176626208d95' => 
    array (
      0 => './templates/prescription.tpl',
      1 => 1433059405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14104556ac0503edee0_82510158',
  'variables' => 
  array (
    'prescriptions' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => true,
  'version' => '3.1.24',
  'unifunc' => 'content_556ac050506815_91177360',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556ac050506815_91177360')) {
function content_556ac050506815_91177360 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14104556ac0503edee0_82510158';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>Clara | Health Assistant</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">



    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="dist/css/skins/skin-green.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="skin-green sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>C</b>HA</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Clara<b>HealthAssistant</b></span>
        </a>

        <!-- Header Navbar -->
        <?php echo $_smarty_tpl->getSubTemplate ("HEADER.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>'page'), 0);
?>



    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">




            <?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars[\'MENU\']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array(\'title\'=>\'page\'), 0);
?>
/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>



        </section>
        <!-- /.sidebar -->
    </aside>

















    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Prescriptions
                <small>Drug prescriptions</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Sophie Davis</a></li>
                <li class="active">Prescriptions</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">

                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Prescribe a new medicine</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="prescription.php">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Drug</label>
                                    <input type="text" class="form-control" id="drug" name="drug" placeholder="Drug name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Posology</label>
                                    <input type="text" class="form-control" id="dose" name="dose" placeholder="500 mg">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">How many pills each 24 hours?</label>
                                    <input type="text" class="form-control" id="frequency" name="frequency" placeholder="3">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Treatment Duration (in days)</label>
                                    <input type="text" class="form-control" id="duration" name="duration" placeholder="30">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Extra Info</label>
                                    <input type="text" class="form-control" id="reason" name="reason" placeholder="Before lunch and before dinner">
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div><!-- /.box -->



                </div><!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
                    <!-- general form elements disabled -->
                    <!-- TABLE: LATEST ORDERS -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Latest Prescriptions</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table no-margin">
                                    <thead>
                                    <tr>
                                        <th>Drug</th>
                                        <th>Posology</th>
                                        <th>Since</th>
                                        <th>Expires in</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['prescriptions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['p'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['p']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
$foreach_p_Sav = $_smarty_tpl->tpl_vars['p'];
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['drugName'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['posology'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['p']->value['since'];?>
</td>
                                            <td><span class="label label-<?php echo $_smarty_tpl->tpl_vars['p']->value['label'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['expires'];?>
</span></td>
                                        </tr>


                                    <?php
$_smarty_tpl->tpl_vars['p'] = $foreach_p_Sav;
}
?>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.box-body -->

                    </div><!-- /.box -->
                </div><!--/.col (right) -->

            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class='control-sidebar-menu'>
                    <li>
                        <a href='javascript::;'>
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class='control-sidebar-menu'>
                    <li>
                        <a href='javascript::;'>
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>
                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked />
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class='control-sidebar-bg'></div>
</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<?php echo '<script'; ?>
 src="plugins/jQuery/jQuery-2.1.4.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.2 JS -->
<?php echo '<script'; ?>
 src="bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="dist/js/app.min.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="dist/js/jquery.debounce-1.0.5.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>




<?php echo '<script'; ?>
>


    $( document ).ready(function() {


        $( "#drug" ).keypress($.throttle(function() {
            var input = $(this);
            var typed = this.value;

            $.ajax({
                type: "GET",
                url: 'ajax.php',
                data: { value: typed , action: "getDrugs" },
                dataType: "text",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader("Ajax-Request", "true");
                },
                success: function(response) {

                    if(response != "") {

                        if(response.length > 1) {
                            var availableTags = jQuery.parseJSON(response);
                            $( "#drug" ).autocomplete({
                                source: availableTags
                            });
                        }
                    }
                }
            });
        },400));
    });






<?php echo '</script'; ?>
>





<?php echo '<script'; ?>
>
    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */


        //-------------
        //- LINE CHART -
        //--------------

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Electronics",
                    fillColor: "rgba(210, 214, 222, 1)",
                    strokeColor: "rgba(210, 214, 222, 1)",
                    pointColor: "rgba(210, 214, 222, 1)",
                    pointStrokeColor: "#c1c7d1",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "Digital Goods",
                    fillColor: "rgba(60,141,188,0.9)",
                    strokeColor: "rgba(60,141,188,0.8)",
                    pointColor: "#3b8bba",
                    pointStrokeColor: "rgba(60,141,188,1)",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(60,141,188,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        var lineChartOptions = {
            //Boolean - If we should show the scale at all
            showScale: true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines: false,
            //String - Colour of the grid lines
            scaleGridLineColor: "rgba(0,0,0,.05)",
            //Number - Width of the grid lines
            scaleGridLineWidth: 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines: true,
            //Boolean - Whether the line is curved between points
            bezierCurve: true,
            //Number - Tension of the bezier curve between points
            bezierCurveTension: 0.3,
            //Boolean - Whether to show a dot for each point
            pointDot: false,
            //Number - Radius of each point dot in pixels
            pointDotRadius: 4,
            //Number - Pixel width of point dot stroke
            pointDotStrokeWidth: 1,
            //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
            pointHitDetectionRadius: 20,
            //Boolean - Whether to show a stroke for datasets
            datasetStroke: true,
            //Number - Pixel width of dataset stroke
            datasetStrokeWidth: 2,
            //Boolean - Whether to fill the dataset with a color
            datasetFill: false,
            //String - A legend template
            legendTemplate: "<ul class=\"<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'<%\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
=name.toLowerCase()<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
-legend\"><?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'<%\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
 for (var i=0; i<datasets.length; i++){<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
<li><span style=\"background-color:<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'<%\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
=datasets[i].lineColor<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
\"></span><?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'<%\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
if(datasets[i].label){<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';
echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'<%\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
=datasets[i].label<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';
echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'<%\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
}<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
</li><?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'<%\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
}<?php echo '/*%%SmartyNocache:14104556ac0503edee0_82510158%%*/<?php echo \'%>\';?>/*/%%SmartyNocache:14104556ac0503edee0_82510158%%*/';?>
</ul>",
            //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
            maintainAspectRatio: false,
            //Boolean - whether to make the chart responsive to window resizing
            responsive: true
        };


        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
        lineChart.Line(lineChartData, lineChartOptions);

    });
<?php echo '</script'; ?>
>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
</body>
</html><?php }
}
?>