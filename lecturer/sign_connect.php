<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pj = $_POST['pj'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $pwd = $_POST['password'];


    $check = "SELECT * FROM staff WHERE Username = '$username' OR PJ = '$pj'";
    $chek = mysqli_query($conn, $check);
    $numr = mysqli_num_rows($chek);
    if ($numr > 0) {
        ?>
        <script> alert("Username taken/ User already registered!!");
            window.location.assign('index.php');
        </script>
        <?php
    } else {


        $reg = "INSERT INTO staff (Name, PJ, Email, Username, Password) VALUES ('$name', '$pj', '$email', '$username', '$pwd')";
        $ger = mysqli_query($conn, $reg);
        if (!$ger) {
            die("Query failed" . mysqli_error($conn));
        } else {

            ?>
            <script> alert("Registration successful!! Login now");
                window.location.assign('index.php');
            </script>
            <?php
        }
    }
}
?>


