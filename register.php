<?php
include('includes/database.php');
include("loginServ.php");
?>
<html>

<head>
	<meta charset="UTF-8">
	<title>Registration</title>
	<link rel="icon" type="image/x-icon" href="images/logo-w-text.png" />
</head>
<link href="css/graham.scss" rel="stylesheet">
<?php

if (!isset($_SESSION['userID'])) {
	include('includes/header.php');
} else {
	include('includes/header2.php');
}
?>

<body>
	<br><br><br><br><br><br>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card2">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images/logo-white.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="register_user.php">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-angle-double-right"></i></span>
							</div>
							<input type="text" name="firstName" class="form-control" placeholder="First Name">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-angle-double-right"></i></span>
							</div>
							<input type="text" name="lastName" class="form-control" placeholder="Last Name">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" placeholder="Username">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="	far fa-address-book"></i></span>
							</div>
							<input type="email" name="email" class="form-control" placeholder="Email Address">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password">
						</div>

						<div class="d-flex justify-content-center mt-3 login_container">
							<input type="submit" name="register" value="Register" class="btn login_btn"></input>
						</div>
					</form>
				</div>
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Have an account? &nbsp; <a class="linksG" href="login.php" class="ml-2">Login</a>
					</div>

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
</body>
<?php include 'includes/footer.php'; ?>

</html>