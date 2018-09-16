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
    $organization=$_POST['org_name'];
    $idnumber=$_POST['idnumber'];
    $username=$_POST['username'];
    $pass=$_POST['pwd'];
    $password = md5($pass);

    $sq="INSERT INTO org_admin (First_Name, Last_Name, Organization, ID, Username, Password) 
          VALUES('$firstname', '$lastname', '$organization', '$idnumber', '$username', '$password')";

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
