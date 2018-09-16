<!Doctype html>
<head>
    <title> Internship </title>
</head>
<body>
<?php
include "connect.php";
if (isset($_POST["submit"]))
{
    $title=$_POST['title'];
    $slots=$_POST['slots'];
    $organization=$_POST['organization'];
    $department=$_POST['dept'];
    $stipend=$_POST['stipend'];
    $start=$_POST['start'];
    $end=$_POST['end'];

    $sq="INSERT INTO internships (Title, Slots, Organization, Department, Stipend, Start_Date, End_Date) 
          VALUES('$title', '$slots', '$organization', '$department', '$stipend', '$start', '$end')";

    $re=mysqli_query($conn,$sq);
    if(!$re)
    {
        die("Query Failed! " . mysqli_error($conn));
    }
    else
    {
        ?>
        <script> alert ('Internship Added!');
            window.location.assign('internship.php');
        </script>
        <?php
    }

}

?>
</body>
</html>
