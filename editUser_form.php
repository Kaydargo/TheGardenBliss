<?php
include('includes/database.php');
include("loginServ.php");
?>
<?php
if (!isset($_SESSION['userID'])) {
	header('Location: login.php');
}
$currentUser = $_SESSION['userID'];
$getUserDetails = 'SELECT * FROM USERS WHERE userID = :userID';
$statement = $conn->prepare($getUserDetails);
$statement->bindValue(':userID', $currentUser);
$statement->execute();
$user = $statement->fetch();
$statement->closeCursor();

?>
<?php

if (!isset($_SESSION['userID'])) {
	include('includes/header.php');
} else {
	include('includes/header2.php');
}
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/media-queries.css">
	<link href="css/style.scss" rel="stylesheet" type="text/css" />
	<link href="css/graham.scss" rel="stylesheet" type="text/css" />
	<style>
		label {
			color: black;
		}
	</style>
</head>

<body>
	<br><br><br><br><br>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card2">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="images/logo-white.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="post" action="editUser.php">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="far fa-user-circle"></i></span>
							</div>
							<input type="file" name="userPic" class="form-control" value="<?php echo $user['userPic']; ?>" />
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-angle-double-right"></i></span>
							</div>
							<input type="text" name="firstName" class="form-control" value="<?php echo $user['firstName']; ?>" required pattern="[A-Za-z]+">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-angle-double-right"></i></span>
							</div>
							<input type="text" name="lastName" class="form-control" value="<?php echo $user['lastName']; ?>" required pattern="[A-Za-z]+">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control input_user" value="<?php echo $user['username']; ?>" required pattern="{6,}">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="	far fa-address-book"></i></span>
							</div>
							<input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required>
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="<?php echo $user['userpass']; ?>" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
						</div>

						<div class="d-flex justify-content-center mt-3 login_container">
							<input type="submit" name="updateUser" value="Update Profile" class="btn login_btn"></input>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="errMsg" style="text-align:center;">
		<?php if (!empty($_SESSION['errMsg'])) {
			echo $_SESSION['errMsg'];
		} ?>
	</div>
	<?php unset($_SESSION['errMsg']); ?>

</body>

<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/scripts.js"></script>

<?php include 'includes/footer.php'; ?>



</html>