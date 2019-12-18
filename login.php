<?php
session_start();
include("loginServ.php");
include ('includes/header.php');
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="css/graham.css" rel="stylesheet">
<link href="css/style.css" rel="style">
</head>
<body>
<div class="login">
<br>
<h1 align="center">Login</h1>
<form method="post" action="loginServer.php">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" required class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" required class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="register.php">No account? Register</a></p>  
                </form>  
</div>
<div id="errMsg" style="text-align:center;">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?>
</div>
</body>
</html>