<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Chatbot Demo - Admin</title>
	<link rel="stylesheet" href="../../css/adminMain.css">
	<link rel="stylesheet" href="../../css/viewChkinRec.css">
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
  					<div class="item_1">Groups<a href="#">+ Add</a></div>
 					<div class="item_2">Users<a href="#">+ Add</a></div>
				</div>
				<div class="menu-grid-container side_menu">
 					<div class="Title"><h3 style="margin: 1px;">Checkin</h3></div>
  					<div class="item_1">Checkin dialog records<a href="#">+ Add</a></div>
 					<div class="item_2 active">Checkin records<a href="#">+ Add</a></div>
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
			<h1 style="margin: 5px 0; width: 50%;">Select checkin record to view</h1>
			<div class="table">
				<div class="search">
					<input type="text" placeholder="search" style="width: 50%;" id="search">
					<input type="button" value="Search" class="search-btn">
				</div>
				<span>Action:</span>
				<select>
					<option value="-----" selected>-----</option>
				</select>
				<input type="button" value="Go">
				<span>0 of 2 selected</span>
				<table id="records">
					<tbody>
						<tr>
							<td class="table-checkbox"><input type=checkbox></td>
							<td style="font-weight: bold">ID</td>
							<td style="font-weight: bold">Name</td>
							<td style="font-weight: bold">Total Score</td>
							<td style="font-weight: bold">Max Score</td>
							<td style="font-weight: bold">Task</td>
							<td style="font-weight: bold">Time</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>2</td>
							<td>LT1</td>
							<td>50</td>
							<td>69</td>
							<td><a href="#">task detail</a></td>
							<td class="table-date">Nov 17, 2020, 4:01pm</td>
						</tr>
						<tr>
							<td><input type="checkbox"></td>
							<td>2</td>
							<td>admin</td>
							<td>41</td>
							<td>86</td>
							<td><a href="#">task detail</a></td>
							<td class="table-date">Nov 13, 2020, 1:42pm</td>
						</tr>
					</tbody>
			</table>
			</div>
			<div class="filter_menu">
				<table id="filter">
					<tbody>
						<tr style="background-color: darkred">
							<td style="padding: 8px;"><h3 style="margin: 0;color: white;font-size: 18px;">Filter</h3></td>
						</tr>
						<tr>
							<td><p style="font-size: 16px;">By time</p></td>
						</tr>
						<tr>
							<td><p>Any Date</p></td>
						</tr>
						<tr>
							<td><p>Today</p></td>
						</tr>
						<tr>
							<td><p>Past 7 days</p></td>
						</tr>
						<tr>
							<td><p>This month</p></td>
						</tr>
						<tr>
							<td><p>This year</p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>