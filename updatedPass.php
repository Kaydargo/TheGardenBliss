<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>New Password</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/media-queries.css">
	<link href="css/style.scss" rel="stylesheet" type="text/css" />
	<link href="css/graham.scss" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/x-icon" href="images/logo-w-text.png" />
</head>
<body>
<?php
include('includes/database.php');
include("loginServ.php");
include("resetPass_form.php");
?>
<?php
if (!isset($_SESSION['userID'])) {
	include('includes/header.php');
} else {
	include('includes/header2.php');
}
?>
<br><br><br><br><br>
	<form class="login-form" action="new_password.php" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>
</body>
</html>