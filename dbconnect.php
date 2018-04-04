<?php 
	$host="localhost";
	$user="root";
	$password="59156254654";
	$dbname="internship";

	$conn=mysqli_connect($host,$user,$password,$dbname);
	if(!$conn)
		echo "Connection refused" . mysqli_connect_error();
?>