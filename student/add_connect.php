<!Doctype html>
<head>
    <title> Logbook </title>
</head>
<body>
<?php
include "connect.php";
if (isset($_POST["submit"]))
{
    $reg=$_POST['regno'];
    $date = $_POST['date'];
    $activity=$_POST['activity'];
    $learnt=$_POST['learnt'];
    $week=$_POST['week'];

    $today = "SELECT * FROM logbook WHERE Reg_Number = '$reg' AND Date = '$date'";
    $todaysuc = mysqli_query($conn, $today);
    $todayn  = mysqli_num_rows($todaysuc);

        if ($todayn == 1)
    {
    ?>
    <script> alert('Sorry the Logbook is closed!!');
        window.location.assign('logbook.php');
    </script>
<?php
    }
    else{


$select = "INSERT INTO logbook (Reg_Number, Date, Activity, Learnt, Week) VALUES ('$reg', '$date', '$activity', '$learnt', '$week')";
$view = mysqli_query($conn, $select);


$check = "SELECT * FROM logbook WHERE Reg_Number = '$reg' AND Week = '$week'";
$checki = mysqli_query($conn, $check);
$namba = mysqli_num_rows($checki);

if ($namba == 7) {
    $one = "INSERT INTO sup_assessment (Reg_Number, Comment, Week, A_Status) VALUES ('$reg', 'na', '$week', 'Pending')";
    $oned = mysqli_query($conn, $one);
}

if (!$view)
{
    die("Query Failed! " . mysqli_error($conn));
}
else
{
?>
            <script> alert('Logbook updated successfully!');
                window.location.assign('logbook.php');
            </script>
            <?php
        }
        }

}

?>
</body>
</html>
