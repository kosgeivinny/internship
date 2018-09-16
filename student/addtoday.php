<?php
include "connect.php";
include "../log_connect.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Staff Page</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
</head>
<body>



<div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">

                <span class="logout-spn" >
                    <i style="-webkit-text-fill-color: #8fde9c; font-size: 20px"><a><?php echo $_SESSION['name'];?>&nbsp;<?php echo $_SESSION['lname'];?></a></i>
                   <a href="logout.php" class="btn btn-warning">
                <span class="glyphicon glyphicon-log-out"></span> <b>LOG OUT</b>
                </a>
                </span>
        <div style="padding-left: 40px">
            <h3 style="-webkit-text-fill-color: white"><b>Internship Management System</b> </h3>
        </div>

    </div>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li style="background-color: lightpink">
                    <a style="-webkit-text-fill-color: black; padding-left: 20px"><?php echo $_SESSION['name']."&nbsp;&nbsp;Online";?><span class="open-blink"></span></a>

                </li>

                <li>
                    <a href="index.php" ><i class="fa fa-desktop "></i> Home </a>
                </li>


                <li class="active-link">
                    <a href="logbook.php"><i class="fa fa-table "></i> My Log Book</a>
                </li>
                <li>
                    <a href="available.php"><i class="fa fa-edit "></i> Available Internships </a>
                </li>


                <li>
                    <a href="pending.php"><i class="fa fa-qrcode "></i> Pending Applications </a>
                </li>
                <li>
                    <a href="accepted.php"><i class="fa fa-bar-chart-o"></i> Accepted Applications</a>
                </li>
                <li>
                    <a href="rejected.php"><i class="fa fa-bar-chart-o"></i> Rejected Applications</a>
                </li>


            </ul>
        </div>

    </nav>

    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-lg-12">
                    <h2 align="center" style="-webkit-text-fill-color: darkgreen"><b>LOGBOOK DAILY UPDATE</b></h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <?php
            $regno=$_GET['adm'];
            $weekd=$_GET['weeknd'];

            ?>
            <div class="jumbotron" style="width:70%; margin:0 auto;">

                <p class="text-danger" style="font-size: 40px;"> <b><?php echo date('d-m-Y'); ?></b> </p>
                <br><br>

                <form class="form-horizontal" action="addtoday_connect.php" method="post">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Activity:</label>
                        <div class="col-sm-8">
                            <textarea type="text" name="activity" class="form-control" placeholder="Activity undertaken"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Things Learnt: </label>
                        <div class="col-sm-8">
                            <textarea type="text" name="learnt" class="form-control"  placeholder="Things learnt"></textarea>
                        </div>
                    </div>
                    <input type="text" name="regno" value="<?php echo $_SESSION['regno']; ?>" hidden>
                    <input type="text" name="date" value="<?php echo date('Y-m-d') ?>" hidden>
                    <input type="text" name="week" value="<?php echo $weekd ?>" hidden>

                    <button class="btn btn-success btn-lg" name="submit" style="position: relative; left:420px;">Submit</button>
                </form>
            </div>



        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12" >
            &copy;  2018 Internship Management System | Design by: <a href="http://vinnykosgei.wordpress.com" style="color:#fff;" target="_blank">Vinny Kosgei</a>
        </div>
    </div>
</div>


<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/application-985b892b.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
