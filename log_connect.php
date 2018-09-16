<!Doctype html>
<head>
    <title> Login </title>
</head>
<body>
<?php
include "connect.php";
session_start();


if (isset($_POST["login"]))

{
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $password = md5($pass);

    $sq = "SELECT * FROM student WHERE Username = '$username' AND Password = '$password'";
    $result = mysqli_query($conn,$sq);
    $numrows=mysqli_num_rows($result);

    $sp = "SELECT * FROM lecturer WHERE Username = '$username' AND Password = '$password'";
    $rr = mysqli_query($conn, $sp);
    $rrr = mysqli_num_rows($rr);

    $sa = "SELECT * FROM org_admin WHERE Username = '$username' AND Password = '$password'";
    $rd = mysqli_query($conn,$sa);
    $rdd = mysqli_num_rows($rd);

    $dept = "SELECT * FROM department WHERE Username = '$username' AND Password = '$password'";
    $depa = mysqli_query($conn,$dept);
    $depart = mysqli_num_rows($depa);

    if( $numrows==1)
    {
        while($row=mysqli_fetch_assoc($result)){
            $_SESSION['name']=$row['First_Name'];
            $_SESSION['lname'] = $row['Last_Name'];
            $_SESSION['institution'] = $row['Institution'];
            $_SESSION['regno'] = $row['Reg_Number'];

        }

        ?>
        <script>
            window.location.assign('student');
        </script>
        <?php

    }

    elseif( $rrr == 1)
        {
        while($row=mysqli_fetch_assoc($rr)){
            $_SESSION['name']=$row['First_Name'];
            $_SESSION['lname'] = $row['Last_Name'];
            $_SESSION['institution'] = $row['Institution'];
            $_SESSION['dept'] = $row['Department'];


        }
        ?>
        <script>
            window.location.assign('lecturer');
        </script>
        <?php
        }

        elseif( $rdd == 1)
            {
        while($row=mysqli_fetch_assoc($rd)){
            $_SESSION['name']=$row['First_Name'];
            $_SESSION['lname'] = $row['Last_Name'];
            $_SESSION['org'] = $row['Organization'];

        }
                ?>
                <script>
                window.location.assign('company');
                </script>
                <?php
            }
                elseif( $depart == 1)
                {
                while($row=mysqli_fetch_assoc($depa)){
                    $_SESSION['name']=$row['First_Name'];
                    $_SESSION['lname'] = $row['Last_Name'];
                    $_SESSION['org'] = $row['Organization'];
                    $_SESSION['dept'] = $row['Department'];


                }
                ?>
        <script>
            window.location.assign('supervisor');
        </script>
    <?php
    }
            else
                {
                    ?>
                    <script>alert ('Invalid Credentials!!');
                    window.location.assign('index.php');
                    </script>
                    <?php
                }


}

?>
</body>
</html>
