<?php
include "connect.php";

$reg = $_GET['adm'];
$title = $_GET['title'];
$org = $_GET['org'];
$dept = $_GET['dept'];

$conf = "UPDATE applications SET Status='Rejected' WHERE Reg_Number='$reg' AND Title='$title' AND Organization='$org'";
$confirmed = mysqli_query($conn, $conf);

if(!$confirmed) {
    echo "Operation failed";
}
else{



        ?>
        <script> alert ('Application rejected!');
            window.location.assign('viewapp.php');
        </script>
        <?php


}
?>