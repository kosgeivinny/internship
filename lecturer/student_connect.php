<?php
include "connect.php";

$reg=$_GET['adm'];
$inst = $_GET['institution'];
$lect = $_GET['lect'];

$sq = "UPDATE applications SET Status='Connected' WHERE Reg_Number='$reg' AND Status='Confirmed'";

$re = mysqli_query($conn, $sq);

$instit = "INSERT INTO internship_assessor (Institution, Reg_Number, Lecturer  ) VALUES ('$inst', '$reg', '$lect')";
$instant = mysqli_query($conn, $instit);

if (!$instant)
{
    die("Query Failed! " . mysqli_error($conn));
}
else {
    ?>
    <script> alert('Connection Successful!');
        window.location.assign('index.php');
    </script>
    <?php
}


?>