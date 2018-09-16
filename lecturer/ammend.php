<?php
include 'log_connect.php';
$date = date("Y-m-d");
$case=$_REQUEST['case'];


$parts = explode('-',$date);
$month = $parts[1];


$sub = $_SESSION['name'];
?>
<!DOCTYPE html>
<html class='no-js' lang='en'>
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Ammend Case </title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" /><link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />

</head>
<body class='main page'>
<!-- Navbar -->
<div class='navbar navbar-default' id='navbar'>
    <a class='navbar-brand' href='#'>
        <img src="assets/images/logi.jpg" style="height: 50px; width: 50px " class="img-circle"> Eldoret Law Courts E-DIARY
    </a>
    <ul class='nav navbar-nav pull-right'>
        <li class='dropdown'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <i class='icon-envelope'></i>
                Messages
                <span class='badge'>5</span>
                <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <a href='#'>New message</a>
                </li>
                <li>
                    <a href='#'>Inbox</a>
                </li>
                <li>
                    <a href='#'>Out box</a>
                </li>
                <li>
                    <a href='#'>Trash</a>
                </li>
            </ul>
        </li>
        <li>
            <a href='#'>
                <i class='icon-cog'></i>
                Settings
            </a>
        </li>
        <li class='dropdown user'>
            <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                <i class='icon-user'></i>
                <strong><?php echo $_SESSION['name']; ?></strong>
                <img class="img-rounded" src="http://placehold.it/20x20/ccc/777" />
                <b class='caret'></b>
            </a>
            <ul class='dropdown-menu'>
                <li>
                    <a href='#'>Edit Profile</a>
                </li>
                <li class='divider'></li>
                <li>
                    <a href="index.php">Sign out</a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div id='wrapper'>
    <!-- Sidebar -->
    <section id='sidebar'>
        <i class='icon-align-justify icon-large' id='toggle'></i>
        <ul id='dock'>
            <li class='launcher'>
                <i class='icon-dashboard'></i>
                <a href="dashboard.php">Dashboard</a>
            </li>
            <li class='active launcher'>
                <i class='icon-file-text-alt'></i>
                <a href="register.php">Registration</a>
            </li>
            <li class='launcher'>
                <i class='icon-table'></i>
                <a href="tables.php">Tables</a>
            </li>
            <li class='launcher dropdown hover'>
                <i class='icon-flag'></i>
                <a href='#'>Reports</a>
                <ul class='dropdown-menu'>
                    <li class='dropdown-header'>Cases Summary</li>
                    <li>
                        <a><form method='post' action='dashboard.php'>
                                <input type="submit" class="btn btn-success" value="Registered Today" name="today"/>
                            </form></a>
                    </li>
                    <li>
                        <a><form method='post' action='dashboard.php'>
                                <input type="submit" class="btn btn-success" value="Today's" name="tod"/>
                            </form></a>
                    </li>
                    <li>
                        <a><form method='post' action='dashboard.php'>
                                <input type="submit" class="btn btn-success" value="This Month's" name="mon"/>
                            </form></a>
                    </li>
                    <li>
                        <a><form method='post' action='dashboard.php'>
                                <input type="submit" class="btn btn-success" value="My Reg Cases    " name="my"/>
                            </form></a>
                    </li>
                </ul>
            </li>
            <li class='launcher'>
                <i class='icon-bookmark'></i>
                <a href='#'>Bookmarks</a>
            </li>
            <li class='launcher'>
                <i class='icon-cloud'></i>
                <a href='#'>Backup</a>
            </li>
            <li class='launcher'>
                <i class='icon-bug'></i>
                <a href='#'>Feedback</a>
            </li>
        </ul>
        <div data-toggle='tooltip' id='beaker' title='Made by lab2023'></div>
    </section>
    <!-- Tools -->
    <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
            <li class='title'>Amendment</li>
        </ul>
        <div id='toolbar'>

        </div>
    </section>
    <!-- Content -->
    <div id='content'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <i class='icon-edit icon-large'></i>
                Case Amendment
            </div>
            <div class='panel-body' align="center">
                <form class="inline" role="form" action="register_connect.php" method="POST" enctype="multipart/form-data">
                    <div class="col-sm-9">
                        <h4 align="center"> <b> <u>Case Amendment</u> </b></h4>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-sm-2 form-group">
                                <label> Case number: </label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text"class="form-control" value="<?php echo $case; ?>" name="caseno" placeholder="Casenumber" required readonly>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label> Court: </label>
                            </div>
                            <div class='col-sm-4 form-group'>
                                <select class="form-control" name="court">
                                    <option> COURT 1 </option>
                                    <option> COURT 2 </option>
                                    <option> COURT 3 </option>
                                    <option> COURT 4 </option>
                                    <option> COURT 5 </option>
                                    <option> COURT 6 </option>
                                    <option> COURT 7 </option>
                                </select>
                            </div>

                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2 form-group">
                                <label> Activity: </label>
                            </div>
                            <div class='col-sm-4 form-group'>
                                <select class="form-control" name="activity">
                                    <option> Assesment of Costs/Taxation </option>
                                    <option> Bail </option>
                                    <option> Bond </option>
                                    <option> Certificate of Urgency </option>
                                    <option> Contempt Proceedings </option>
                                    <option> Deputy Register Actions </option>
                                    <option> Directions </option>
                                    <option> Execution Proceedings </option>
                                    <option> Hearing-Application </option>
                                    <option> Hearing Main Suit </option>
                                    <option> Judgement </option>
                                    <option> Mention </option>
                                    <option> Plea </option>
                                    <option> Post Judgedment </option>
                                    <option> Pre Trial </option>
                                    <option> Registration/Filing </option>
                                    <option> Ruling </option>
                                    <option> Sentencing </option>
                                    <option> Stood Over Generally(SOG) </option>
                                    <option> Date In The Registry(DIR) </option>
                                    <option> Case Closed </option>
                                    <option> Matter Settled </option>
                                    <option> Formal Proof </option>
                                    <option> Proceedings To Be Typed </option>
                                    <option> Notice To Show Cause </option>
                                    <option> Case  Dismissed </option>
                                    <option> Case Withdrawn </option>
                                    <option> Case Transferred </option>
                                </select>
                            </div>

                            <div class="col-sm-2 form-group">
                                <label> Next Date of Case: </label>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="date" value="<?php echo $date; ?>">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class='row'>
                                <input type='text' value="<?php echo $sub; ?>" name="by" hidden>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class='row'>
                                <input type='text' value="<?php echo $date; ?>" name="reg" hidden>
                            </div>

                        </div>
                        <div class="row">
                            <div class=" form-actions col-sm-12">
                                <div class="col-sm-2 form-group">
                                    <button type="submit" class="btn btn-success" name="submit" > REGISTER </button>
                                </div>
                                <div class="col-sm-1 form-group">
                                    <button type="reset" class="btn btn-warning" name="reset" > Reset </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Footer -->
<!-- Javascripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script><script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
<!-- Google Analytics -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
