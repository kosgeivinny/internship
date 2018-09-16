<!DOCTYPE html>
<html class='no-js' lang='en'>
<head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Sign in</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
    <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />
    <link href="assets/images/favicon.ico" rel="icon" type="image/ico" />

</head>
<body class='login'>
<div class='wrapper' style="width: 550px; height: 700px">
    <div class='row'>
        <div class='col-lg-12'>
            <div class='brand text-center'>
                <h1>
                    <div>
                        <img src="assets/images/logi.jpg" style="height: 80px; width: 80px " class=" logo-icon img-circle">
                    </div>
                    E-DIARY
                </h1>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class='col-lg-12'>
            <center>
            <form  action="sign_connect.php" method="POST" autocomplete="on">
                <h1> Sign up </h1>
                <div class="row form-group" >
                    <label>Your Name:</label>
                    <input name="name" required="required" type="text" placeholder="Name" />
                </div>
                <br>
                <div class="row form-group">
                    <label>PJ Number:</label>
                    <input name="pj" required="required" type="int" placeholder="PJ Number" />
                </div>
                <br>
                <div class="row form-group">
                    <label> Your email:</label>
                    <input name="email" required="required" type="email" placeholder="Email"/>
                </div>
                <br>
                <div class="row form-group">
                    <label>Your username:</label>
                    <input name="username" required="required" type="text" placeholder="Username" />
                </div>
                <br>
                <div class="row form-group">
                    <label>Your password: </label>
                    <input name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                </div>
                <br>

                <p class="signin button">
                    <input type="submit" class="btn btn-success" name="submit" value="Sign up"/>
                </p>
                <p class="change_link">
                    Already registered ?
                    <a href="index.php" class="to_register"> Go and log in </a>
                </p>
            </form>
            </center>
        </div>
    </div>
</div>
<!-- Footer -->
<!-- Javascripts -->
<script src="jquery.min.js" type="text/javascript"></script><script src="jquery-ui.min.js" type="text/javascript"></script><script src="modernizr.min.js" type="text/javascript"></script><script src="assets/javascripts/application-985b892b.js" type="text/javascript"></script>
<!-- Google Analytics -->
<script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
