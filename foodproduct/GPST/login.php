<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 15%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 200px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<head>

<!-- your webpage info goes here -->

    <title>General Store</title>

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->	
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	
</head>
<body>

<!-- webpage content goes here in the body -->

	<div id="page">
		<div id="logo">
			<h1><a>General Store</a></h1>
		</div>
		<div class="nav">
			<ul>
				<li><a href="home.php">Home</a></li>
				
				<li><a href="login.php">Login</a></li>
			</ul>	
		</div>
		<div id="content">
		
			<h2>Login Form</h2>
			
			<form action="Check_admin_login.php" method="post">
			
			<div class="imgcontainer">
			<img src="img\avatar.png" alt="Avatar" class="avatar">
			</div>

			<div class="container">
			<div class="container">
			<label><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="ID" required>

			<label><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="pass" required>
				
				
			<button type="submit">Login</button>
			
			</form>
			

		</div>
		
		<div id="footer">
			<p>
				Webpage made by <br> RADCLIFFE &#9734;
			</p>
		</div>
	</div>
</body>
</html> 