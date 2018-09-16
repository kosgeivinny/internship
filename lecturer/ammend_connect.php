<?php
include "connect.php";

if(isset($_POST['submit'])){

    $caseno = $_POST['caseno'];
    $court = $_POST['court'];
    $date = $_POST['date'];
    $by = $_POST['by'];
    $reg = $_POST['reg'];
    $activity = $_POST['activity'];


    $ins = "INSERT INTO registration (Caseno, Court, Date_Registered, Date, Registrar, Activity) VALUES ('$caseno', '$court', '$reg', '$date', '$by', '$activity')";
    $insert = mysqli_query($conn, $ins);

    if (!$ins) {
        die($ins);
    } else {
        ?>
        <script> alert("Amendment Successful!");
            window.location.assign('dashboard.php');
        </script>
        <?php
    }

}
?>