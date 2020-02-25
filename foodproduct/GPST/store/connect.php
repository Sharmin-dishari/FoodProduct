<?php

$conn = mysqli_connect("localhost","root","","foodproduct");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>