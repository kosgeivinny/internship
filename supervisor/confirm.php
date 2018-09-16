<?php
include "connect.php";

$reg = $_GET['adm'];
$title = $_GET['title'];
$org = $_GET['org'];
$dept = $_GET['dept'];

$conf = "UPDATE applications SET Status='Accepted' WHERE Reg_Number='$reg' AND Title='$title' AND Organization='$org'";
$confirmed = mysqli_query($conn, $conf);

if(!$confirmed) {
    echo "Operation failed";
}
else{
    $sele = "SELECT Slots FROM internships WHERE Organization = '$org' AND Department = '$dept' AND Title = '$title'";
    $slect = mysqli_query($conn, $sele);
    while($row=mysqli_fetch_array($slect)){
        $slot = $row['Slots'];
    }

    $slotsrem = $slot-1;

    $slup = "UPDATE internships SET Slots='$slotsrem' WHERE Organization = '$org' AND Department = '$dept' AND Title = '$title'";
    $slopdate = mysqli_query($conn, $slup);

    if(!$slopdate){
        echo "Confirm Failed";
    }
    else{
        ?>
        <script> alert ('Successfully accepted!');
            window.location.assign('viewapp.php');
        </script>
        <?php
    }


}
?>