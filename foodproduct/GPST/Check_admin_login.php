<link rel="stylesheet"type="text/css"href="project.css">
<?php 

//include("connection.php");
require_once('functions/dbconfig.php');				
	require_once('functions/functions.php');
	
	
	$obj = new cls_func();
		
	

session_start();
	$_SESSION['ID']=$_POST['ID'];
	$_SESSION['pass']=$_POST['pass'];


	$ID=$_SESSION['ID'];
	$password=$_SESSION['pass'];

	$query = $obj->login_fun($ID);
	
		if($query->num_rows !== 0){
	
		while($row=$query->fetch_assoc())		{
		
					$dbID = $row['ID'];
					$dbpassword = $row['password'];
		
							if($ID==$dbID){
								
								if($password==$dbpassword){
								$id=md5($ID);
								header("location:admin/home22.php?=%$id&&m=$ID&&$id%=");
		
											}else{
										
												echo "<br />"."<br />"."<center>"."<h3>"."Invalid Password!"."</h3>";
												echo "<br />"."<br />"."<br />"."<br />"."<a href='login.php'>Try again</a>"."</center>";
												}
				
									}else{
										echo "<br />"."<br />"."<center>"."<h3>"."Invalid SSN !"."</h3>";			
										echo "<br />"."<br />"."<br />"."<br />"."<a href='login.php'>Try again</a>"."</center>";
												
										}}
			
			
						}else{ 
							echo "<br />"."<br />"."<center>"."<h3>"."Please Insert Valid ID and Password!"."</h3>";
							echo "<br />"."<br />"."<br />"."<br />"."<a href='login.php'>Try again</a>"."</center>";
												
							}

