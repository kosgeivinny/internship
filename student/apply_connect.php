<!Doctype html>
<head>
    <title> Application </title>
</head>
<body>
<?php
include "connect.php";
if (isset($_POST["submit"]))
{
    $name=$_POST['name'];
    $reg=$_POST['regno'];
    $institution=$_POST['institution'];
    $title=$_POST['title'];
    $email=$_POST['email'];
    $organization=$_POST['organization'];
    $status = 'Pending';

    $select = "SELECT * FROM applications WHERE Title = '$title' AND Reg_Number = '$reg' AND Organization = '$organization'";
    $view = mysqli_query($conn, $select);
    $viewed = mysqli_num_rows($view);

    if($viewed == 1){
    ?>
    <script> alert ('Sorry! You have already applied for this Internship!');
        window.location.assign('available.php');
    </script>
<?php

    }
    else{

$sq = "INSERT INTO applications (Name, Reg_Number, Institution, Title, Email, Organization, Status) 
          VALUES('$name', '$reg', '$institution', '$title', '$email', '$organization', '$status')";

$re = mysqli_query($conn, $sq);
if (!$re)
{
    die("Query Failed! " . mysqli_error($conn));
}
else
{
?>
        <script> alert('Application Successful!');
            window.location.assign('available.php');
        </script>
        <?php
    }
    }


}

?>
</body>
</html>
