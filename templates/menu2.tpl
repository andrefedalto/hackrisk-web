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
    <li {if $PAGE == 'dashboard'}class="active"{/if}><a href="dashboard.php"><i class='fa fa-newspaper-o'></i> <span>Dashboard</span></a></li>
    <li {if $PAGE == 'timeline'}class="active"{/if}><a href="timeline.php"><i class='fa fa-clock-o'></i> <span>Timeline</span></a></li>
    <li {if $PAGE == 'prescription'}class="active"{/if}><a href="prescription.php"><i class='fa fa-pencil'></i> <span>Prescriptions</span></a></li>
    <li {if $PAGE == 'exam'}class="active"{/if}><a href="exam.php"><i class='fa fa-heartbeat'></i> <span>Exams</span></a></li>
</ul><!-- /.sidebar-menu -->


