<!Doctype html>
<head>
    <title> Validation 2 </title>
</head>
<body>
<?php
include "connect.php";
if (isset($_POST["submit"]))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $institution=$_POST['institution'];
    $department=$_POST['dept'];
    $gender=$_POST['gender'];
    $idnumber=$_POST['idnumber'];
    $username=$_POST['username'];
    $pass=$_POST['pwd'];
    $password = md5($pass);

    $sq="INSERT INTO lecturer(First_Name, Last_Name, Institution, Department, Gender, ID, Username, Password) 
          VALUES('$firstname', '$lastname', '$institution', '$department', '$gender', '$idnumber', '$username', '$password')";

    $re=mysqli_query($conn,$sq);
    if(!$re)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
    ?>
        <script> alert ('Reginstration Successful! Login now!!');
            window.location.assign('index.php');
        </script>
        <?php
    }

}

?>
</body>
</html>
