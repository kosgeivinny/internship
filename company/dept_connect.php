<!Doctype html>
<head>
    <title> Validation 2 </title>
</head>
<body>
<?php
include "connect.php";
if (isset($_POST["submit"]))
{
    $department=$_POST['dname'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $organization=$_POST['org'];
    $username=$_POST['firstname'];
    $pass='12345';
    $password = md5($pass);

    $sq="INSERT INTO department (Department, First_Name, Last_Name, Organization, Username, Password) 
          VALUES('$department','$firstname', '$lastname', '$organization', '$username', '$password')";

    $re=mysqli_query($conn,$sq);
    if(!$re)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
        ?>
        <script> alert ('Registration Successful!');
            window.location.assign('dept_reg.php');
        </script>
        <?php
    }

}

?>
</body>
</html>
