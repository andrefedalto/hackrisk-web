<?php
/*%%SmartyHeaderCode:3252556ac098153c24_14316827%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae93a8dc69ed44c69f7fc8c23fc1b57028c46cd4' => 
    array (
      0 => './templates/timeline.tpl',
      1 => 1433059477,
      2 => 'file',
    ),
    '74a1de3871975506c88492a6932eef438086f787' => 
    array (
      0 => './templates/HEADER.tpl',
      1 => 1433021659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3252556ac098153c24_14316827',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => true,
  'version' => '3.1.24',
  'unifunc' => 'content_556ac098237ee9_21736502',
  'cache_lifetime' => 0,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_556ac098237ee9_21736502')) {
function content_556ac098237ee9_21736502 ($_smarty_tpl) {
?>

<!DOCTYPE html>
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
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>C</b>HA</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Clara<b>HealthAssistant</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">2</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 4 messages</li>
                    <li>
                        <!-- inner menu: contains the messages -->
                        <ul class="menu">
                            <li><!-- start message -->
                                <a href="#">
                                    <div class="pull-left">
                                        <!-- User Image -->
                                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                                    </div>
                                    <!-- Message title and timestamp -->
                                    <h4>
                                        Clara Team
                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <!-- The message -->
                                    <p>This is not implemented :(</p>
                                </a>
                            </li><!-- end message -->
                        </ul><!-- /.menu -->
                    </li>
                    <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
            </li><!-- /.messages-menu -->

            <!-- Notifications Menu -->
            <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 1 notification</li>
                    <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
                            <li><!-- start notification -->
                                <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 3 patients will need to renew their prescriptions soon
                                </a>
                            </li><!-- end notification -->
                        </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                </ul>
            </li>
            <!-- Tasks Menu -->
            <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-flag-o"></i>
                    <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 1 warning</li>
                    <li>
                        <!-- Inner Menu: contains the notifications -->
                        <ul class="menu">
                            <li><!-- start notification -->
                                <a href="#">
                                    <i class="fa fa-users text-aqua"></i>Take a closer look on Josh's glucose levels.
                                </a>
                            </li><!-- end notification -->
                        </ul>
                    </li>
                    <li class="footer">
                        <a href="#">View all warnings</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>


    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['MENU']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 1, $_smarty_tpl->cache_lifetime, array('title'=>'page'), 0);
?>


        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Timeline
                <small>example</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Sophie Davis</a></li>
                <li class="active">Timeline</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <!-- The time line -->
                    <ul class="timeline">

                        <li class="time-label">
                          <span class="bg-green">
                            30 May 2015
                          </span>
                        </li>
                        <li>
                            <i class="fa fa-frown-o bg-red"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header no-border"><a href="#">Sophie Davis</a> recorded not feeling well after taking sinvastatin.</h3>
                            </div>
                        </li>
                        <li>
                            <i class="fa fa-user bg-aqua"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header no-border"><a href="#">Sophie Davis</a> tracked her glucose level</h3>
                            </div>
                        </li>
                        <!-- timeline item -->
                        <li class="time-label">
                          <span class="bg-green">
                            29 May 2015
                          </span>
                        </li>
                        <li>
                            <i class="fa fa-user bg-aqua"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header no-border"><a href="#">Sophie Davis</a> tracked her glucose level</h3>
                            </div>
                        </li>
                        <li class="time-label">
                          <span class="bg-green">
                            28 May 2015
                          </span>
                        </li>
                        <li>
                            <i class="fa fa-user bg-aqua"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header no-border"><a href="#">Sophie Davis</a> tracked her glucose level</h3>
                            </div>
                        </li>
                        <li class="time-label">
                          <span class="bg-green">
                            27 May 2015
                          </span>
                        </li>
                        <li>
                            <i class="fa fa-user bg-aqua"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header no-border"><a href="#">Sophie Davis</a> tracked her glucose level</h3>
                            </div>
                        </li>
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-comments bg-yellow"></i>
                            <div class="timeline-item">
                                <h3 class="timeline-header"><a href="#">Sophie Davis</a> came in for an appointment</h3>
                                <div class="timeline-body">
                                    Sophie has recorded increasing glucose levels, so a new prescription was made with adjusted posology.
                                    <br />
                                    She was also advised to track her glucose level at home with a digital glucose meter.
                                </div>
                                <div class='timeline-footer'>
                                    <a class="btn btn-warning btn-flat btn-xs" href="prescription.php">View prescription</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->

                        <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                        </li>
                    </ul>
                </div><!-- /.col -->
            </div><!-- /.row -->



        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
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
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
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
                    <li>
                        <a href='javascript::;'>
                            <i class="menu-icon fa fa-user bg-yellow"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href='javascript::;'>
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href='javascript::;'>
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>
                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
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
                    <li>
                        <a href='javascript::;'>
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href='javascript::;'>
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-waring pull-right">50%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href='javascript::;'>
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>
                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
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

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked />
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked />
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked />
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right" />
                        </label>
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class='control-sidebar-bg'></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src='plugins/fastclick/fastclick.min.js'></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js" type="text/javascript"></script>
</body>
</html>





<?php }
}
?>