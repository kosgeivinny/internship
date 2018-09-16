<?php
include '../log_connect.php';
include "connect.php";

?>
<!DOCTYPE html>
<html class='no-js' lang='en'>
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Dashboard</title>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
    <link href=assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />


</head>
<body class='main page'>
<!-- Navbar -->
<div class='navbar navbar-default noprint' id='navbar'>
    <a class='navbar-brand' text-centerhref='#'>
        <?php echo $_SESSION['institution']; ?>
    </a>
    <ul class='nav navbar-nav pull-right'>
        <li>
            <br>
            <b><?php echo $_SESSION['name']; ?>&nbsp;<?php echo $_SESSION['lname']; ?></b>
        </li>

        <li>


            <a href="logout.php" class="btn btn-warning" style="background-color: lightsalmon">
                <span class="glyphicon glyphicon-log-out"></span> LOG OUT
            </a>
        </li>
    </ul>
</div>
<div id='wrapper'>
    <!-- Sidebar -->
    <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
            <li class='launcher'>
                <button class="btn-lg" onclick="location.assign('index.php')" style='background-color: blue; padding: 10px; margin: 4px 2px; border-radius: 12px;'>Dashboard</button>
            </li>
            <li class='launcher'>
                <button class="btn-lg" onclick="location.assign('connect_student.php')" style='background-color: darkgreen; padding: 10px; margin: 4px 2px; border-radius: 12px;'>Connect Student</button>
            </li>
            <li class='launcher'>
                <button class="btn-lg" onclick="location.assign('current.php')" style='background-color: lightgreen; padding: 10px; margin: 4px 2px; border-radius: 12px;'>Current Students</button>
            </li>
            <li class='launcher'>
                <button class="btn-lg" onclick="location.assign('assess.php')"  style='background-color: red; padding: 10px; margin: 4px 2px; border-radius: 12px;'>Pending Assessments</button>
            </li>
            <li class='active launcher'>
                <button onclick="location.assign('completed.php')" style='background-color: black; padding: 10px; margin: 4px 2px; border-radius: 12px;'>Completed Assesssments</button>
            </li>

        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by  Vinny Kosgei'></div>
    </section>
    <!-- Tools -->
    <section id='tools' class="noprint">
        <ul class='breadcrumb' id='breadcrumb'>
            <li class='title'>Dashboard</li>
        </ul>
    </section>
    <!-- Content -->
    <div id='content'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                Internship System
                <div class='panel-tools'>
                    <div class='btn-group'>

                        <a class='btn' data-toggle='toolbar-tooltip' href='#' title='Toggle'>
                            <i class='icon-chevron-down'></i>
                        </a>
                    </div>
                </div>
            </div>


            <div class='page-header'>
                <h4 class="text-center"><b>COMPLETED ASSESSMENTS</b></h4>
            </div>

            <div class='row'>

                <?php
                $org = $_SESSION['institution'];
                $dept = $_SESSION['dept'];
                $pen = "SELECT * FROM applications INNER JOIN internships ON applications.Organization = internships.Organization AND applications.Title = internships.Title INNER JOIN lect_assessment ON applications.Reg_Number = lect_assessment.Reg_Number WHERE Institution = '$org' AND Status='Confirmed' OR Status='Connected' AND A_Status='Pending'";
                $pend = mysqli_query($conn, $pen);

                echo"
                                <div class='container'>
                                <form>
                                <table class='table table-hover'>
                                    <tr class='success'><th>Reg_Number</th><th> Name </th><th>Email</th><th>Station</th><th>Title</th><th></th></tr>";

                while ($row=mysqli_fetch_array($pend)){
                    echo "<tr><td>".$row['Reg_Number']."</td><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['Organization']."</td><td>".$row['Title']."</td><td>
                                      <a class='btn btn-primary' href='completed_fin.php? adm=".$row['Reg_Number']."'><i class='fa fa-sun-o'></i>View</a></td></tr>";
                }
                ?>
                </table>
                </form>
            </div>
            <br>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Footer -->
<!-- Javascripts -->
<script src="assets/javascripts/vendor/jquery.min.js" type="text/javascript"></script>
<script src="assets/javascripts/vendor/jquery-ui.min.js" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
<script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
<script src="assets/javascripts/vendor/html5shiv-0f395d46.js" type="text/javascript"></script>
<script src="assets/javascripts/vendor/jquery.knob-573828e1.js" type="text/javascript"></script>
<script src="assets/javascripts/vendor/plugins-6815af79.js" type="text/javascript"></script>

<!-- Google Analytics -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
