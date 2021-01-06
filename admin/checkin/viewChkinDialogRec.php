<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chatbot Demo - Admin</title>
	<link rel="stylesheet" href="../../css/adminMain.css">
	<link rel="stylesheet" href="../../css/viewChkinDialogRec.css">
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
 					<div class="item_2">Users<a href="#">+ Add</a></div>
				</div>
				<div class="menu-grid-container side_menu">
 					<div class="Title"><h3 style="margin: 1px;">Checkin</h3></div>
  					<div class="item_1 active">Checkin dialog records<a href="#">+ Add</a></div>
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
			<h1 style="margin: 5px 0;">View checkin dialog record</h1>
			<form method="post">
				<div class="record-grid-container">
 					<div class="id">ID:</div>
  					<div class="time">Password:</div>
					<div class="body">Password:</div>
  					<div class="id_text">
						<p>1</p>
					</div>
  					<div class="time_text">
						<p>Dec. 17, 2020, 4:08pm</toher></p>
					</div>
  					<div class="body_text">
						<p>
							User: Good morning, how may I help you?<br>
							Bot: I have a room reservation and I would like to check in.<br>
							User: No room for you!<br>
						</p>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>