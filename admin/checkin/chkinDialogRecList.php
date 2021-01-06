<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chatbot Demo - Admin</title>
	<link rel="stylesheet" href="../../css/adminMain.css">
	<link rel="stylesheet" href="../../css/chkinDialogRecList.css">
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
	
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$role = 1;
		$order = mysqli_query($con, "INSERT INTO users (username, UserPassword, role) VALUES ('$username', '$password', '$role')");
	}
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
  					<div class="item_1">Groups</div>
 					<div class="item_2">Users</div>
				</div>
				<div class="menu-grid-container side_menu">
 					<div class="Title"><h3 style="margin: 1px;">Checkin</h3></div>
  					<div class="item_1 active">Checkin dialog records</div>
 					<div class="item_2">Checkin records</div>
  					<div class="item_3">Checkin tasks</div>
				</div>
				<div class="menu-grid-container side_menu">
 					<div class="Title"><h3 style="margin: 1px;">Checkout</h3></div>
  					<div class="item_1">Checkout dialog records</div>
 					<div class="item_2">Checkout records</div>
  					<div class="item_3">Checkout tasks</div>
				</div>
			</div>
		</div>
  		<div class="Content">
			<h1 style="margin: 5px 0; width: 50%;">Select checkin dialog record to view</h1>
			<div class="table">
				<span>Action:</span>
				<select>
					<option value="-----" selected>-----</option>
				</select>
				<input type="button" value="Go">
				<span>0 of 2 selected</span>
				<table>
					<tbody>
						<tr>
							<td class="table-checkbox"><input type=checkbox></td>
							<td style="font-weight: bold">ID</td>
							<td style="font-weight: bold">Created Time</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>2</td>
							<td class="table-date">Nov 15.2020</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>1</td>
							<td class="table-date">Nov 12,2020</td>
						</tr>
					</tbody>
			</table>
			</div>
		</div>
	</div>
</body>
</html>