<?php
	include('../store/connect.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysqli_query($conn,"UPDATE reservation SET status='$status' WHERE reservation_id='$roomid'");
	header("location: index.php");
?>