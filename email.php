<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Reset Password</title>
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
session_start();
include('includes/database.php');
include("resetPass_form.php");
?>
<?php

if (!isset($_SESSION['userID'])) {
	include('includes/header.php');
} else {
	include('includes/header2.php');
}
?>
<br><br><br>
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images/logo-white.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="email.php">
                    <h2 class="form-title">Reset password</h2>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="email" name="email" class="form-control input_user" placeholder="Email Address">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<input type="submit" name="reset-password" value="Submit" class="btn login_btn"></input>
						</div>
					</form>
				</div>
				<div id="errMsg" style="text-align:center;">
					<?php if (!empty($_SESSION['errMsg'])) {
						echo $_SESSION['errMsg'];
					} ?>
				</div>
				<?php unset($_SESSION['errMsg']); ?>
			</div>
		</div>
	</div>
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/jquery.backstretch.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/retina-1.1.0.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/scripts.js"></script>
</body>
<?php include 'includes/footer.php'; ?>

</html>
<?php 
  ob_end_flush();
  ?>