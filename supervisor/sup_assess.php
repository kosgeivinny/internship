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


        $one = "UPDATE sup_assessment SET Comment='$comment',  A_Status='Completed' WHERE Reg_Number = '$reg' AND A_Status='Pending'";
        $oned = mysqli_query($conn, $one);

        $two = "SELECT * FROM sup_assessment WHERE Reg_Number= '$reg'";
        $twoed = mysqli_query($conn, $two);
        $twoee = mysqli_num_rows($twoed);

        if ($twoee == 4 ){
            $mono = "INSERT INTO lect_assessment (Reg_Number, Comment, Month, Status) VALUES ('$reg', 'na', 'First', 'Pending')";
            $monoed = mysqli_query($conn, $mono);
        }
    if ($twoee == 8 ){
        $mono = "INSERT INTO lect_assessment (Reg_Number, Comment, Month, Status) VALUES ('$reg', 'na', 'Second', 'Pending')";
        $monoed = mysqli_query($conn, $mono);
    }
    if ($twoee == 12 ){
        $mono = "INSERT INTO lect_assessment (Reg_Number, Comment, Month, Status) VALUES ('$reg', 'na', 'Third', 'Pending')";
        $monoed = mysqli_query($conn, $mono);
    }


    if (!$oned)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
    ?>
        <script> alert('Assessment done successfuly!');
            window.location.assign('pending.php');
        </script>
        <?php
    }

}

?>
</body>
</html>
