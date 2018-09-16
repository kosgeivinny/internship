
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Internship </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/responsive-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

</head>

<body>
<nav class="navbar" style="background-color: darkgreen">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right main-nav">
                <li class="active"><a href="student_signup.php" class="btn btn-blue"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                <li><a href="#mModal" data-toggle="modal" data-target="#mModal" class="btn btn-green"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
            </ul>
            <h3 align="left"><b><a href="index.php"> Internship Management System </a></b></h3>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<header>
    <div class="container">
        <div class="row">
            <div class="container-fluid">


                <h1 align="center"><b><u>Sign Up Here!</u></b></h1>



            </div>

        </div>
    </div>
</header>

<!-- Responsive slider - START -->
<div class="container" style="padding-left: 230px;">
    <div class="col-lg-10 well" style="background-color: pink;">
        <div style="padding-left: 230px">
            <ul class="nav navbar-nav main-nav">
                <li class="active"><a href="student_signup.php"> <b>Student</b> </a></li>
                <li><a href="lecturer_signup.php" type="submit"><b>Lecturer</b> </a></li>
                <li><a href="org_signup.php"> <b>Org-Admin</b> </a></li>
            </ul>

        </div>
        <div class="row" style="padding-left: 80px">
            <form method="POST" action="student_connect.php" enctype="multipart/form-data">
                <div class="col-md-12">
                    <br>

                    <div class="row">
                        <div class="col-sm-5 form-group">
                            <label> First Name: </label>
                            <input type="text" name="firstname" placeholder="Enter First Name Here.." class="form-control">
                        </div>
                        <div class="col-sm-5 form-group">
                            <label> Last Name: </label>
                            <input type="text" name="lastname" placeholder="Enter Last Name Here.." class="form-control">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-5 form-group">
                            <label> Institution: </label>
                            <select class="form-control" name="institution">
                                <option> Maseno Univeristy </option>
                                <option> Moi University </option>
                                <option> Nairobi University </option>
                                <option> Kenyatta University </option>
                                <option> Jomo Kenyatta University </option>
                                <option> Masinde Muliro University </option>
                                <option> Egerton University </option>
                            </select>
                        </div>

                        <div class="col-sm-5 form-group">
                            <label> Registration Number: </label>
                            <input type="text" name="regnumber" placeholder="Student Reg Number.." class="form-control">
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-5 form-group">
                            <label> Department: </label>
                            <input type="text"class="form-control" name="dept" placeholder="Department">
                        </div>
                        <div class="col-sm-5 form-group">
                            <label> Course: </label>
                            <input type="text" class="form-control" name="course" placeholder="Course">

                        </div>
                    </div>


                    <div class="row">

                        <div class="col-sm-5 form-group">
                            <label> Username: </label>
                            <input type="text"class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="col-sm-5 form-group">
                            <label> Password: </label>
                            <input type="password" class="form-control" name="pwd" placeholder="Enter Password">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-2 form-group">

                            <button type="submit" class="btn  btn-success" name="submit" > Submit </button>
                        </div>
                        <div class="col-sm-2 form-group">
                            <button type="reset" class="btn  btn-warning" name="reset" > Clear </button>
                        </div>
                    </div>
                    <p>Already have an account? <a href="#mModal" data-toggle="modal" data-target="#mModal"> Sign in </a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="mModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title"> Log-in </h2>
            </div>
            <div class="modal-body">
                <section id="content">
                    <form action="log_connect.php" method="POST" >
                        <h1> Login here </h1>
                        <div>
                            <input type="text" placeholder="Username" required="" id="username" name="username"/>
                        </div>
                        <div>
                            <input type="password" placeholder="Password" required="" id="password" name="password"/>
                        </div>
                        <div>
                            <input type="submit" name="login" value="Log in" />

                        </div>
                        <div style="border-top: 1px solid#888; padding-top:0px; font-size:8%" >
                            <br> <br> <h6>Don't have an account! </h6>
                            <a href="student_signup.php">
                                <h7> <i>Sign Up Here</i></h7> <br>
                            </a>
                        </div>
                    </form><!-- form -->

                </section><!-- content -->
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <hr>
    </div>
</div>
<div class="container">
    <div class="row">
        <hr>
    </div>
</div>

<!-- Responsive slider - END -->

<!--start footer-->
<footer>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span>&copy; Eldoret Law Courts, All right reserved.</span>
                        </p>
                        <div class="credits">
                            <a href="#">   P & A </a> by <a href="#">ICT TEAM</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
                        <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/responsive-slider.js"></script>
<script src="js/wow.min.js"></script>
<script>
    wow = new WOW({}).init();
</script>

</body>

</html>
