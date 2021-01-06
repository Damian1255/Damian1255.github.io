<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chatbot Demo - Admin</title>
	<link rel="stylesheet" href="../../css/adminMain.css">
	<link rel="stylesheet" href="../../css/editUser.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	
<?php
	include '../../global.php';
	
	$con = mysqli_connect($DBHost, $DBUser, $DBPwd); //Connect to server
    if (!$con)
      {
        die('Could NOT connect:  ' . mysqli_error());
      }
	
	mysqli_select_db($con, $DBName) or die ("Could NOT connect to database"); //Connect to database
?>
	
	<div class="header">
		<h1 style="padding-left: 70px;text-align:left;float:left;">Hotel West - Admin</h1>
		<h2 style="padding-right: 70px;text-align:right;float:right;">
			<a class="header_menu" href="home.html">View Site</a>
		    <a class="header_menu" href="home.html">Change Password</a>
		    <a class="header_menu" href="home.html">Log Out</a>
		</h2>
		<hr style="clear:both;"/>     
    </div>
	<div class="main-grid-container">
		<div class="Menu">
			<div class="side_menu" style="float: left;">
				<div class="menu-grid-container side_menu">
 					<div class="Title"><h3 style="margin: 1px;">Authentication and Authorization</h3></div>
  					<div class="item_1">Groups<a href="#">+ Add</a></div>
 					<div class="item_2 active">Users<a href="#">+ Add</a></div>
				</div>
				<div class="menu-grid-container side_menu">
 					<div class="Title"><h3 style="margin: 1px;">Checkin</h3></div>
  					<div class="item_1">Checkin dialog records<a href="#">+ Add</a></div>
 					<div class="item_2">Checkin records<a href="#">+ Add</a></div>
  					<div class="item_3">Checkin tasks<a href="#">+ Add</a></div>
				</div>
				<div class="menu-grid-container side_menu">
 					<div class="Title"><h3 style="margin: 1px;">Checkout</h3></div>
  					<div class="item_1">Checkout dialog records<a href="#">+ Add</a></div>
 					<div class="item_2">Checkout records<a href="#">+ Add</a></div>
  					<div class="item_3">Checkout tasks<a href="#">+ Add</a></div>
				</div>
			</div>
		</div>
  		<div class="Content">
			<h1 style="margin: 5px 0;">Change User</h1>
			<form method="post">
				<div class="changeuser-grid-container">
 					<div class="username">Username:</div>
  					<div class="password">Password:</div>
  					<div class="username_text">
						<input type="text" name="username_text" id="username" required>
					</div>
  					<div class="password_text">
						<input type="text" name="password_text" id="password" required>
						<p>Your password can't be too similar to your other personal information.</toher></p>
					</div>
					<div class="info">Personal info</div>
 					<div class="firstname">First name:</div>
  					<div class="lastname">Last name:</div>
					<div class="email">Email Address:</div>
  					<div class="firstname_text">
						<input type="text" name="firstname_text" id="firstname" required>
					</div>
  					<div class="lastname_text">
						<input type="text" name="lastname_text" id="lastname" required>
					</div>
  					<div class="email_text">
						<input type="email" name="email_text" id="email" required>
					</div>
					<div class="permission">Permissions</div>
					<p>idk what is below here. not shown in picture</p>
				</div>
			</form>
		</div>
	</div>
</body>
</html>