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




$prev = "SELECT * FROM logbook WHERE Reg_Number='$reg' AND Date = '$date'";
    $preved = mysqli_query($conn, $prev);
    while ($row=mysqli_fetch_array($preved)){
        $pactivity = $row['Activity'];
        $plearnt = $row['Learnt'];
    }

    $nactivity = $pactivity.'<br>'.$activity;
    $nlearnt = $plearnt.'<br>'.$learnt;

    $select = "UPDATE logbook SET Activity = '$nactivity', Learnt = '$nlearnt' WHERE Reg_Number='$reg' AND Date = '$date'";
    $view = mysqli_query($conn, $select);

    if (!$view)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
        ?>
        <script> alert('Daily update successful!');
            window.location.assign('logbook.php');
        </script>
        <?php
    }


}

?>
</body>
</html>
