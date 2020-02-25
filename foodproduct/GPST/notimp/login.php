<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	require "store/connect.php";
	
	//Function to sanitize values received from the form. Prevents SQL injection
	
	
	//Sanitize the POST values
	$login = ($_POST['user']);
	$password = ($_POST['password']);
	
	//Create query
	$qry="SELECT * FROM user WHERE username='$login' AND password='$password'";
	$result=mysqli_query($conn,$qry);
	//while($row = mysql_fetch_array($result))
//  {
//  $level=$row['position'];
//  }
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['user_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['position'];
			session_write_close();
			//if ($level="admin"){
			header("location: admin/index.php");
			exit();
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>