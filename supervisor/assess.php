<?php
include "connect.php";
include "../log_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">

    <title>Assessment</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
$org = $_SESSION['org'];
$dept = $_SESSION['dept'];
$sele = "SELECT * FROM applications INNER JOIN internships ON applications.Organization = internships.Organization AND applications.Title = internships.Title WHERE Department = '$dept' AND Status='Pending'";
$select = mysqli_query($conn, $sele);
$selected = mysqli_num_rows($select);

?>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">

        <a href="index.php" class="logo"><b><?php echo $_SESSION['org'];?></b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-theme"><?php echo $selected;?></span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green"> Tasks </p>
                        </li>

                        <li>
                            <a href="index.php#">
                                <div class="task-info">
                                    <div class="desc">You have <?php echo $selected;?> Current Students On Internship</div>
                                    <div class="percent">70%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                        <span class="sr-only">70% Complete (Important)</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><br><i style="-webkit-text-fill-color: black"><?php echo $_SESSION['name'];?>&nbsp;<?php echo $_SESSION['lname'];?></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li><a class="logout" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>
    <a--header end-->

        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" align="center" id="nav-accordion">
                    <div class="row" style="background-color: greenyellow" align="center"><h4><b><?php echo $_SESSION['dept'];?><br> Department</b></h4></div>
                    <br>

                    <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                    <h5 class="centered"><?php echo $_SESSION['name'];?>&nbsp;<?php echo $_SESSION['lname'];?></h5>

                    <button class="mt btn btn-lg">
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </button>
                    <button class="mt btn btn-lg">
                        <a href="viewapp.php" >
                            <i class="fa fa-th"></i>
                            <span>View <br>Applications</span>
                        </a>
                    </button>
                    <button class="mt btn btn-lg">
                        <a href="current.php" >
                            <i class="fa fa-th"></i>
                            <span>Current <br>Students</span>
                        </a>
                    </button>
                    <button class="mt btn btn-lg btn-warning active">
                        <a class="active" href="pending.php" >
                            <i class="fa fa-tasks "></i>
                            <span>Pending <br>Assessments</span>
                        </a>
                    </button>

                    <li class="sub-menu">
                        <a href="index.php">
                            <i class="fa fa-book"></i>
                            <span>Register Internship</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="index.php">
                            <i class="fa fa-th"></i>
                            <span>Open Internships</span>
                        </a>
                    </li>



                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-cogs"></i>
                            <span>Components</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="calendar.html">Calendar</a></li>
                            <li><a  href="gallery.html">Gallery</a></li>
                            <li><a  href="todo_list.html">Todo List</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-book"></i>
                            <span>Extra Pages</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="blank.html">Blank Page</a></li>
                            <li><a  href="#">Login</a></li>
                            <li><a  href="lock_screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-tasks"></i>
                            <span>Forms</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="form_component.html">Form Components</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-th"></i>
                            <span>Data Tables</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="responsive_table.html">St</a></li>
                            <li><a  href="basic_table.html">sted</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class=" fa fa-bar-chart-o"></i>
                            <span>Charts</span>
                        </a>
                        <ul class="sub">
                            <li><a  href="morris.html">Morris</a></li>
                            <li><a  href="chartjs.html">Chartjs</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <div class="row">
                    <div class="col-lg-9 main-chart">


                        <div class="row mt">
                            <!-- SERVER STATUS PANELS -->
                            <div class="col-lg-12 well" style="background-color: lightcyan;">
                                <div>
                                    <?php
                                    $regn = $_GET['adm'];
                                    $wa = "SELECT * FROM logbook inner join applications on logbook.Reg_Number = applications.Reg_Number inner join sup_assessment on logbook.Reg_Number=sup_assessment.Reg_Number WHERE applications.Reg_Number = '$regn' AND Status='Confirmed' OR Status='Connected' AND A_Status='Pending'";
                                    $waa = mysqli_query($conn, $wa);

                                    while($row=mysqli_fetch_assoc($waa)){
                                        $institution = $row['Institution'];
                                        $wekda = $row['Week'];
                                        $sname = $row['Name'];
                                    }

                                    ?>
                                    <h3 align="center"><b><u> <?php echo $sname; ?></u></b></h3>
                                    <br/>
                                    <label class="col-md-4"> <h3><b>WEEK:</b> <?php echo $wekda; ?></h3> </label>

                                    <label> <h3><b>INSTITUTION:</b> <?php echo $institution; ?></h3> </label>
                                </div>
                                <div>
                                    <?php
                                    $regn = $_GET['adm'];
                                    $wi = "SELECT * FROM logbook inner join sup_assessment ON logbook.Reg_Number=sup_assessment.Reg_Number AND logbook.Week=sup_assessment.Week WHERE logbook.Reg_Number = '$regn'";
                                    $wii = mysqli_query($conn, $wi);
                                    $wiik = mysqli_num_rows($wii);
                                    ?>
                                    <table class="table table-bordered">
                                        <tr style="background-color: #00a8ff;"><th>Day</th><th>Date</th><th>Activity</th><th>Things Learnt</th></tr>
                                        <?php

                                        while($row=mysqli_fetch_assoc($wii)){
                                            ?>

                                            <tr><td><?php $day = $row['Date']; echo date('D', strtotime($day)); ?></td><td><?php echo $row['Date']; ?></td><td><?php echo $row['Activity']; ?></td><td><?php echo $row['Learnt']; ?></td></tr>

                                            <?php

                                        }

                                        ?>
                                    </table>
                                    <form method="post" action="sup_assess.php">
                                        <input type="text" name="adm" value="<?php echo $regn; ?>" hidden>
                                        <label> Supervisor's Comments: </label>
                                        <textarea name="comment" class="form-control" type="text"></textarea>
                                        <br>
                                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                    </form>
                            </div>
                        </div>



                    </div><!-- /row -->





                </div><!-- /col-lg-9 END SECTION MIDDLE -->


                <!-- **********************************************************************************************************************************************************
                RIGHT SIDEBAR CONTENT
                *********************************************************************************************************************************************************** -->

                <div class="col-lg-3 ds">


                    <!-- CALENDAR-->
                    <div id="calendar" class="mb">
                        <div class="panel green-panel no-margin">
                            <div class="panel-body">
                                <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                    <div class="arrow"></div>
                                    <h3 class="popover-title" style="disadding: none;"></h3>
                                    <div id="date-popover-content" class="popover-content"></div>
                                </div>
                                <div id="my-calendar"></div>
                            </div>
                        </div>
                    </div><!-- / calendar -->

                </div><!-- /col-lg-3 -->
                </div><! --/row -->
            </section>
        </section>

        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                2018 - Internship Management System
                <a href="index.php#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-1.8.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="assets/js/sparkline-chart.js"></script>
<script src="assets/js/zabuto_calendar.js"></script>

<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>


</body>
</html>
