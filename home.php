<?php
session_start();
if(!isset($_SESSION['userName'])) {
    header("location: index.html?error=Please sign in!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chatbot Demo - Home</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
   <div class="header">
        <h1 style="padding-left: 70px;text-align:left;float:left;">Welcome to Hotel West - Home</h1>
        <h2 style="padding-right: 70px;text-align:right;float:right;">
        Hi <?php echo $_SESSION['userName']; ?>!
        <?php if ($_SESSION['role'] != 3) { ?>
            <a class="login_out" href="admin/admin.html"> Panel</a>
        <?php } ?>
            <a class="login_out" href="logout.php"> logout</a>
        </h2>
        <hr style="clear:both;"/>     
    </div>
    <div class="login-box">
        <h2><a class="login_out" href="checkin/checkin.php">Check-in Task</a></h2>
        <h2><a class="login_out" href="checkout/checkout.php">Check-out Task</a></h2>
  </div>
</body>
</html>