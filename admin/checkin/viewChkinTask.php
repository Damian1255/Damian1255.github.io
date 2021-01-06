<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chatbot Demo - Admin</title>
	<link rel="stylesheet" href="../../css/adminMain.css">
	<link rel="stylesheet" href="../../css/viewChkinTask.css">
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
  					<div class="item_1">Checkin dialog records<a href="#">+ Add</a></div>
 					<div class="item_2">Checkin records<a href="#">+ Add</a></div>
  					<div class="item_3 active">Checkin tasks<a href="#">+ Add</a></div>
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
			<h1 style="margin: 5px 0;">View checkin task</h1>
			<form method="post">
				<div class="record-grid-container">
 					<div class="greet">Greet</div>
  					<div class="greeting">Greeting:</div>
					<div class="registration">Registration Card:</div>
					<div class="registration_card">Registration Card verify:</div>
					<div class="registration_verify">Registration Card verify subtask:</div>
  					<div class="greeting_text">
						<p>1</p>
					</div>
					<div class="registration_card_text"><p>24</p></div>
					<div class="registration_verify_text">
						<div class="regcard_subtask-grid-container">
							<div class="requestPassport">Request Passport:</div>
							<div class="requestPassport_text"><p>True</p></div>
							<div class="locateReservation">Locate Reservation:</div>
							<div class="locateReservation_text"><p>True</p></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>