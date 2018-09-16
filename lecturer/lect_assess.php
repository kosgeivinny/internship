<!Doctype html>
<head>
    <title> Logbook </title>
</head>
<body>
<?php
include "connect.php";
if (isset($_POST["submit"]))
{
    $reg=$_POST['adm'];
    $comment = $_POST['comment'];


    $one = "UPDATE lect_assessment SET Comment='$comment',  A_Status='Completed' WHERE Reg_Number = '$reg' AND A_Status='Pending'";
    $oned = mysqli_query($conn, $one);


    if (!$oned)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
        ?>
        <script> alert('Assessment done successfuly!');
            window.location.assign('assess.php');
        </script>
        <?php
    }

}

?>
</body>
</html>
