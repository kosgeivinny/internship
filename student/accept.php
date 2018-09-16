<?php
include "connect.php";

    $reg=$_GET['regno'];
    $title=$_GET['title'];
    $org=$_GET['organization'];
    $status = 'Confirmed';
    $dept = $_GET['dept'];



        $if = "SELECT * FROM applications WHERE Reg_Number = '$reg' AND Status='Confirmed' OR Status='Connected'";
        $iffed = mysqli_query($conn, $if);
        $ifnum = mysqli_num_rows($iffed);

        if($ifnum == 1){
            ?>
            <script> alert('Sorry You have already Secured a Place of Internship!');
                window.location.assign('index.php');
            </script>
            <?php
        }
        else {


            $sq = "UPDATE applications INNER JOIN internships ON applications.Organization=internships.Organization AND applications.Title=internships.Title SET Status='$status' WHERE applications.Organization='$org' AND Reg_Number='$reg' AND applications.Title='$title' AND Department='$dept'";

            $re = mysqli_query($conn, $sq);
            if (!$re) {
                die("Query Failed! " . mysqli_error($conn));
            } else {
                ?>
                <script> alert('Successfuly Secured Internship!');
                    window.location.assign('index.php');
                </script>
                <?php
            }
        }


?>