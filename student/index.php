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

                    <li class="active-link">
                        <a href="index.php" ><i class="fa fa-desktop "></i> Home </a>
                    </li>
                   

                    <li>
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
                        <h2 class="typed" align="center" style="-webkit-text-fill-color: darkgreen"><b>STUDENT DASHBOARD</b></h2>
                    </div>
                </div>
                 <!-- /. ROW  -->
                  <hr />
                <?php

                $query="SELECT * FROM internships WHERE End_Date>CURDATE()";
                $result=mysqli_query($conn,$query);
                $open = mysqli_num_rows($result);

                $reg = $_SESSION['regno'];
                $pen = "SELECT * FROM applications inner join internships on applications.Title=internships.Title AND applications.Organization=internships.Organization WHERE Status = 'Pending' AND Reg_Number = '$reg' ";
                $pendi = mysqli_query($conn, $pen);
                $pending = mysqli_num_rows($pendi);

                $acc = "SELECT * FROM applications inner join internships on applications.Title=internships.Title AND applications.Organization=internships.Organization WHERE Status = 'Accepted' AND Reg_Number = '$reg' ";
                $accept = mysqli_query($conn, $acc);
                $accepted = mysqli_num_rows($accept);

                $rej = "SELECT * FROM applications inner join internships on applications.Title=internships.Title AND applications.Organization=internships.Organization WHERE Status = 'Rejected' AND Reg_Number = '$reg' ";
                $reject = mysqli_query($conn, $rej);
                $rejected = mysqli_num_rows($reject);
                ?>
                <br>
                <br>
                <div class='row text-center'>
                    <div class='col-md-3'>
                        <label><h4><b> Open Internships </b></h4></label>
                    </div>
                    <div class='col-md-3'>
                        <label><h4><b>Pending Applications</b></h4></label>
                    </div>
                    <div class='col-md-3'>
                        <label><h4><b> Accepted Applications </b></h4></label>
                    </div>
                    <div class='col-md-3'>
                        <label><h4><b> Rejected Applications </b></h4></label>
                    </div>
                </div>

                <div class='row text-center'>
                    <div class='col-md-3'>
                        <input class='knob second' data-bgcolor='#d4ecfd' data-fgcolor='#30a1ec' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='<?php echo $open; ?>' readonly>
                    </div>
                    <div class='col-md-3'>
                        <input class='knob second' data-bgcolor='#c4e9aa' data-fgcolor='#8ac368' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='<?php echo $pending; ?>' readonly>
                    </div>
                    <div class='col-md-3'>
                        <input class='knob second' data-bgcolor='#cef3f5' data-fgcolor='#5ba0a3' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='<?php echo $accepted; ?>' readonly>
                    </div>
                    <div class='col-md-3'>
                        <input class='knob second' data-bgcolor='#f8d2e0' data-fgcolor='#b85e80' data-height='140' data-inputcolor='#333' data-thickness='.3' data-width='140' type='text' value='<?php echo $rejected; ?>' readonly>
                    </div>
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
    <script src="assets/js/typewriter.js"></script>

    
   
</body>
</html>
