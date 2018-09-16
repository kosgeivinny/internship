<?php
include "connect.php";
include "../log_connect.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
                    <i style="-webkit-text-fill-color: #8fde9c; font-size: 20px"><?php echo $_SESSION['name'];?>&nbsp;<?php echo $_SESSION['lname'];?></i>
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
                    <h2 align="center"><b style="-webkit-text-fill-color: black"><?php echo $_SESSION['institution'];?></b></h2>
                    <h2 align="center" style="-webkit-text-fill-color: darkgreen"><b>INDUSTRIAL ATTACHMENT LOGBOOK</b><br>

                    </h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row text-center">

                <?php
                $regin = $_SESSION['regno'];
                $we = "SELECT * FROM logbook WHERE Reg_Number = '$regin' ";
                $wee = mysqli_query($conn, $we);
                $week = mysqli_num_rows($wee);


                if($week <= 6 ){
                    $weeks = 'ONE';
                }
                elseif ($week >=7 && $week <= 13 ){
                    $weeks = 'TWO';
                }
                elseif ($week >=14 && $week <= 20){
                    $weeks = 'THREE';
                }
                ?>
                    <div class="col-lg-4">
                        <label>
                            <h3><b>WEEK:</b> <?php echo $weeks; ?></h3>
                        </label>

                    </div>
                    <div class="col-lg-8">
                        <?php
                        $regn = $_SESSION['regno'];
                        $wa = "SELECT * FROM logbook inner join applications on logbook.Reg_Number = applications.Reg_Number WHERE applications.Reg_Number = '$regn' AND Status='Confirmed' OR Status='Connected'";
                        $waa = mysqli_query($conn, $wa);

                        while($row=mysqli_fetch_assoc($waa)){
                        $institution = $row['Organization'];
                        }

                            ?>
                        <label> <h3><b>STATION:</b> <?php echo $institution; ?></h3> </label>
                    </div>


            </div>
            <hr />
            <div class="row" style="padding-left: 50px; padding-right: 50px">
                <?php
                    $regn = $_SESSION['regno'];
                    $wi = "SELECT * FROM logbook WHERE Reg_Number = '$regn' AND Week='$weeks'";
                    $wii = mysqli_query($conn, $wi);
                    $wiik = mysqli_num_rows($wii);
                    ?>
                <table class="table table-bordered">
                    <tr style="background-color: #00a8ff;"><th>Day</th><th>Date</th><th>Activity</th><th>Things Learnt</th><th></th></tr>
                    <?php

                        while($row=mysqli_fetch_assoc($wii)){
                            ?>

                    <tr><td><?php $day = $row['Date']; echo date('D', strtotime($day)); ?></td><td><?php echo $row['Date']; ?></td><td><?php echo $row['Activity']; ?></td><td><?php echo $row['Learnt']; ?></td><td>

                            <?php
                            $dayent = $row['Date'];
                            if ( date('Y-m-d') == $dayent) {
                                ?>
                                <a class='btn btn-success' href='add.php? adm= <?php echo $_SESSION['regno']; ?>'><i
                                            class='fa fa-plus-circle'></i>ADD</a></td></tr>
                                <?php
                            }
                            ?></td></tr>
                    <?php

                        }


                    if( date('Y-m-d') !== $dayent){
                        ?>
                        <table class="table text-center">
                            <tr><td><a class='btn btn-danger' href='add.php? adm= <?php echo $_SESSION['regno'] ?>&weeknd=<?php echo $weeks ?>'><i
                                                class='fa fa-envelope'></i>ADD TODAYS ACTIVITY</a></td></tr>
                        </table>
                        <?php
                    }
                    ?>
                </table>
            </div>


        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<div class="footer">


    <div class="row">
        <div class="col-lg-12" >
            &copy;  2017 Internship Management System | Design by: <a href="http://vinnykosgei.wordpress.com" style="color:#fff;" target="_blank">Vinny Kosgei</a>
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
