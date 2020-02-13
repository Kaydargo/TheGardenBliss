<?php
session_start();
if(!isset($_SESSION['userID'])){
    header('Location: login.php');
}
require 'includes/database.php';
$currentUser = $_SESSION['userID'];
$getUserDetails = 'SELECT * FROM USERS WHERE userID = :userID';
$statement = $conn->prepare($getUserDetails);
$statement->bindValue(':userID', $currentUser);
$statement->execute();
$user = $statement->fetch();
$statement->closeCursor();

include 'includes/header.php';
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/graham.css" rel="stylesheet" type="text/css"/>
<style>label {
     color: black;
}
</style>
</head>
<body>
<div class="container">
<br><br><br><br><br>
    <h3 align="center">Update your profile</h3>  
    <div class="editUser">
                <form method="post" action="editUser.php">  
                <label for="profilePicture">Profile Picture</label>
                <input type="file" name="userPic" class="form-control" value="<?php echo $user['userPic']; ?>"/>
                    <label><strong>Username </strong><br><em>(Minimum 6 characters)</em></label>  
                     <input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>" required pattern="{6,}"/>  
                     <br />
                     <label><strong>First Name </strong><br></label>  
                     <input type="text" name="firstName" class="form-control" value="<?php echo $user['firstName']; ?>" required pattern="[A-Za-z]+"/>  
                     <br />
                     <label><strong>Last Name </strong><br></label>  
                     <input type="text" name="lastName" class="form-control" value="<?php echo $user['lastName']; ?>" required pattern="[A-Za-z]+"/>  
                     <br />
                     <label><strong>Email Address </strong><br></label>  
                     <input type="email" name="email" class="form-control" value="<?php echo $user['email']; ?>" required/> 
                     <br />   
                     <label><strong>Password </strong><br><em>(Minimum 8 characters and include one upper case and special character and one number)</em> </label>  
                     <input type="password" name="password" class="form-control" value="<?php echo $user['userpass']; ?>" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"/>  
                     <br />  
                     <input type="submit" name="updateUser" value="Update Profile" class="btn btn-info" />  
                     <br />  
                </form>
                </div>
                <div id="errMsg" style="text-align:center;">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>
</div>
</div>
</body>
</html>