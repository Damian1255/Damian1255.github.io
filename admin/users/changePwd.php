<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chatbot Demo - Admin</title>
	<link rel="stylesheet" href="../../css/adminMain.css">
	<link rel="stylesheet" href="../../css/changepwd.css">
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
			<h1 style="margin: 5px 0;">Password Change</h1>
			<p style="font-size: 1.1em;">Please enter your old password, for security sake, and then enter your new password twice so we can verify you typed it in correctly.</p>
			<form method="post">
				<div class="adduser-grid-container">
 					<div class="old_password">Old Password:</div>
  					<div class="new_password">New Password:</div>
  					<div class="password_cfm">Comfirm Password:</div>
					<div class="empty"></div>
					
  					<div class="old_password_text">
						<input type="password" name="password_old" id="password_old" required></div>
  					<div class="new_password_text">
						<input type="password" name="password_new" id="password_new" required>
						<p>Your password can't be too similar to your other personal information.</toher></p>
						<p>Your password must contain at least 8 characters.</p>
						<p>Your password can't be entirely numerical.</p>
						<p>Your password can't be a commonly used password.</p>
					</div>
  					<div class="password_cfm_text">
						<input type="password" name="password_confirm" id="password_cfm" required>
						<p>Re-enter your password for confirmation.</p></div>
					<div class="submit">
						<input type="submit" name="submit" value="Change Password" style="background-color: steelblue;float: right;">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>